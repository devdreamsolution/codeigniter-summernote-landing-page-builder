<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingpageController extends CI_Controller {
	public function index()
	{
		$strvalue = '';
		$query = "SELECT * FROM landingpage";
		$result	= $this->db->query($query)->row();
		if (isset($result))
			$strvalue = html_entity_decode($result->strvalue);

		$data['title'] = 'Landingpage';
		$data['contentview'] = 'admin/landingpage';
		$data['active'] = 'landingpage';
		$data['strvalue'] = $strvalue;
		$this->load->view('admin/layout', $data);
	}

	public function saveData()
	{
		$strvalue = htmlentities($this->input->post('strvalue'));
		$query = "SELECT * FROM landingpage";
		$rows = $this->db->query($query)->num_rows();
		if ($rows > 0) {
			$query = "UPDATE landingpage SET strvalue = '$strvalue';";
		} else {
			$query = "INSERT INTO landingpage VALUES(NULL,'$strvalue');";
		}
		$result = $this->db->query($query);
	}

	public function imageUpload() {
		if(empty($_FILES['file'])) {
			exit();	
		}

		$errorImgFile = "img/img_upload_error.jpg";
		$destinationFilePath = 'img-uploads/'.$_FILES['file']['name'];
		if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)) {
			echo $errorImgFile;
		}
		else {
			echo $destinationFilePath;
		}
	}
}
