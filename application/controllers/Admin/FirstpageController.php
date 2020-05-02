<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstpageController extends CI_Controller {
	public function index()
	{
		$strvalue = '';
		$query = "SELECT * FROM firstpage";
		$result	= $this->db->query($query)->row();
		if (isset($result))
			$strvalue = html_entity_decode($result->strvalue);

		$data['title'] = 'Firstpage';
		$data['contentview'] = 'admin/firstpage';
		$data['active'] = 'firstpage';
		$data['strvalue'] = $strvalue;
		$this->load->view('admin/layout', $data);
	}

	public function saveData()
	{
		$strvalue = htmlentities($this->input->post('strvalue'));
		$query = "SELECT * FROM firstpage";
		$rows = $this->db->query($query)->num_rows();
		if ($rows > 0) {
			$query = "UPDATE firstpage SET strvalue = '$strvalue';";
		} else {
			$query = "INSERT INTO firstpage VALUES(NULL,'$strvalue');";
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
