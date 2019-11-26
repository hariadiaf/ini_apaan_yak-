<?php

class Loginscreen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginscreen_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Login to Impulse',
			'filename' => 'loginscreen'
		);
		$this->load->view('loginscreen',$data);
	}
}

?>