<?php

class Nilai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('nilai_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Nilai',
			'filename' => 'nilai'
		);
		$this->load->view('nilai',$data);
	}
}


?>