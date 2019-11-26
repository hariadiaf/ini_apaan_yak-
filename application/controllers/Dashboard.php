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
		if ($this->session->has_userdata('logged_user')) {
			$this->load->view('dashboard',$data);
		} else {
			redirect('Loginscreen/index');
		}
		
	}
}


?>