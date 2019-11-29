<?php
class profile_model extends CI_Model
{
	public function get_data($nim)
	{
		$this->db->select('*');
		$this->db->from('account');
		$this->db->where('nim',$nim);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_profile($data)
	{
		$param = array(
			"fullname" => $data['fullname'],
			"ttl" => $data['ttl'],
			"gender" => $data['gender'],
			"address" => $data['address'],
			"email" => $data['email']
		);
		$this->db->where('nim', $this->session->userdata('logged_user'));
		$update = $this->db->update('account', $param);
		if ($update) {
			return true;
		} else {
			return false;
		}
	}

	public function update_password($data)
	{
		$param = array(
			"password" => $data['new-pw']
		);
		$this->db->where('nim', $this->session->userdata('logged_user'));
		$this->db->where('password', $data['old-pw']);
		$update = $this->db->update('account', $param);
		if ($update) {
			return true;
		} else {
			return false;
		}
	}
}
?>