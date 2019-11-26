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

	public function validate_data()
	{
		$data = $this->input->post(null,TRUE);
		$login_data = $this->loginscreen_model->validate_data($data);
		if ($login_data) {
			$logged_user = $login_data->nim;
            $this->session->set_userdata('logged_user',$logged_user);
            redirect('Dashboard/index');
        } else {
            $this->session->set_flashdata('message','login_failed');
            redirect('Loginscreen/index');
        }
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Loginscreen/index');
	}
}

?>