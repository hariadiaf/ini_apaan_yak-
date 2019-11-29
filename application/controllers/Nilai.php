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
		if ($this->session->has_userdata('logged_user')) {
			$this->load->view('nilai',$data);
		} else {
			redirect('Loginscreen/index');
		}
	}
}


?>