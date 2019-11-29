<?php

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Edit Profil',
			'filename' => 'profile',
			'profile' => $this->profile_model->get_data($this->session->userdata('logged_user'))
		);
		if ($this->session->has_userdata('logged_user')) {
			$this->load->view('profile',$data);
		} else {
			redirect('Loginscreen/index');
		}
	}

	public function update_data()
	{
		$data = $this->input->post(null,TRUE);
		$edit = $this->profile_model->update_profile($data);
		if($edit) {
			$this->session->set_flashdata('message','update_success');
			redirect('Profile/index');
		} else {
			$this->session->set_flashdata('message','update_error');
			redirect('Profile/index');
		}
	}

	public function update_password()
	{
		$data = $this->input->post(null,TRUE);
		$edit = $this->profile_model->update_password($data);
		if($edit) {
			$this->session->set_flashdata('message', 'pw_success');
			redirect('Profile/index');
		} else {
			$this->session->set_flashdata('message', 'pw_error');
			redirect('Profile/index');
		}
	}
}


?>