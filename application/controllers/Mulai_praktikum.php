<?php

class Mulai_praktikum extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mulai_praktikum_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Mulai Praktikum',
			'filename' => 'mulai_praktikum'
		);
		$this->load->view('mulai_praktikum',$data);
	}
}


?>