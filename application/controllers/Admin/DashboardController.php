<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->library('session');
	}

	public function index()
	{
		$user = $this->session->userdata('user');
		if ($user['email'] == '' && $user['name'] == '')
			redirect('first', 'location');

		$xml = '';
		$query = "SELECT * FROM tbldata ORDER BY id";
		$rows = $this->db->query($query)->result_array();
		foreach ($rows as $row) {
			$xml .= '<tr>
						<td>'.$row["fullname"].'</td>
			          	<td>'.$row["address"].'</td>
			          	<td>'.$row["email"].'</td>
			          	<td>'.$row["phone"].'</td>
			          	<td>'.$row["ip"].'</td>
			          	<td>'.$row["country"].'</td>
			          	<td>'.$row["comments"].'</td>
			          	<td>'.$row["creation_date"].'</td>
			          	<td>'.$row["modified_date"].'</td>
			          	<td><button type="button" id="'.$row["id"].'" class="btn btn-warning btn-sm detail-siswa" data-toggle="modal" data-target="#modal-info">
                		<i class="fa fa-edit"></i>Edit
              			</button></td>
				    </tr>';
		}
		$data['title'] = 'Dashboard';
		$data['contentview'] = 'admin/dashboard';
		$data['active'] = 'dashboard';
		$data['xml'] = $xml;
		$this->load->view('admin/layout', $data);
	}

	public function getModal() {
		$id = $this->input->post('id');

		$query = "SELECT comments FROM tbldata WHERE id='$id'";
		$result = $this->db->query($query)->row('comments');
		echo $result;
	}

	public function saveModal() {
		$id = $this->input->post('id');
		$comments = $this->input->post('comments');

		$query = "UPDATE tbldata SET comments='$comments' WHERE id='$id'";
		$result = $this->db->query($query);

		echo $result;
	}
}