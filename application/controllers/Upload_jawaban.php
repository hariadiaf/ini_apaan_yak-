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
		if ($this->session->has_userdata('logged_user')) {
			$this->load->view('upload_jawaban',$data);
		} else {
			redirect('Loginscreen/index');
		}
	}

	public function check_upload()
	{
		$this->session->set_flashdata('message','upload_success');
		redirect('Upload_jawaban/index');
	}
	
}


?>