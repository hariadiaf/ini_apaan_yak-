<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Dasbor',
			'filename' => 'dashboard'
		);
		$this->load->view('dashboard',$data);
	}
}


?>