<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstpageController extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->library('session');
	}

	public function index()
	{
		$strvalue = '';
		$query = "SELECT * FROM firstpage";
		$result	= $this->db->query($query)->row();
		if (isset($result))
			$strvalue = html_entity_decode($result->strvalue);

		$data['strvalue'] = $strvalue;
		$data['contentview'] = 'firstpage';
		$this->load->view('layout', $data);
	}
}
