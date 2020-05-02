<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->helper('security');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()	{
		$strvalue = '';

		$data['title'] = '';
		$data['contentview'] = 'admin/login';
		$data['active'] = '';
		$data['strvalue'] = $strvalue;
		$this->load->view('Admin/login');
	}

	public function match() {
		$email = $this->input->post('email');
        $password = $this->input->post('password');
        $password = do_hash($password);

        $query = "SELECT * FROM user WHERE email = '$email' || name = '$email' AND password = '$password'";
        $result = $this->db->query($query);

        if ($result->num_rows() == 1) {
        	$user['email'] = $result->row('email');
        	$user['name'] = $result->row('name');
        	$this->session->set_userdata('user', $user);
        	echo 1;
        } else {
        	echo 0;
        }
	}

	public function getProfile() {
		$query = "SELECT * FROM user LIMIT 1";
		$result = $this->db->query($query);
		$data['name'] = $result->row('name');
		$data['email'] = $result->row('email');
		$data['title'] = 'Profile';
		$data['contentview'] = 'admin/profile';
		$data['active'] = '';
		$data['strvalue'] = '';
		$this->load->view('admin/layout', $data);
	}

	public function saveProfile() {
		$email = $this->input->post('email');
        $name = $this->input->post('name');
        $curpass = $this->input->post('curpass');
        $curpass = do_hash($curpass);
        $newpass = $this->input->post('newpass');
        $hash_pass = do_hash($newpass);
        if ($newpass == '') {
        	$query = "UPDATE user SET name = '$name', email = '$email'";
        	$result = $this->db->query($query);
        	echo "Success";
        } else {
        	$query = "SELECT * from user WHERE password = '$curpass'";
        	$rows = $this->db->query($query)->num_rows();
        	if ($rows == 1) {
        		$query = "UPDATE user SET name = '$name', email = '$email' , password = '$hash_pass'";
        		$result = $this->db->query($query);
        		echo "Success";
        	} else {
        		echo "Current Password Doesn't Match";
        	}
        }
	}
}
