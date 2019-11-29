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
		if ($this->session->has_userdata('logged_user')) {
			$this->load->view('mulai_praktikum',$data);
		} else {
			redirect('Loginscreen/index');
		}
	}

	public function mulai()
	{
		$data = array(
			'title' => 'Mulai Praktikum',
			'filename' => 'praktikum'
		);
		$this->load->view('praktikum',$data);
	}
}


?>