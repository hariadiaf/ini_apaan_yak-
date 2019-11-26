<?php
class loginscreen_model extends CI_Model
{
	public function validate_data($data)
	{
        $this->db->where('nim',$data['username']);
        $this->db->where('password',$data['password']);
        $result = $this->db->get('account');
        if($result->num_rows() == 1) {
            return $result->row(0);
        } else {
            return false;
        }
    }
}

?>