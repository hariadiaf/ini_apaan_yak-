<?php

class Upload_jawaban extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('upload_jawaban_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Upload Jawaban',
			'filename' => 'upload_jawaban'
		);
		$this->load->view('upload_jawaban',$data);
	}

	// $this->session->set_flashdata('message','upload_success');
}


?>