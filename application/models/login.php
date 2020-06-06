<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {
	
	public function cek_user($data)
		{
			$query = $this->db->get_where('admin', $data);
			return $query;
		}

	public function cek_user_login($data)
		{
			$query = $this->db->get_where('reservation', $data);
			return $query;
		}

	public function cek_login_pelanggan($table, $where)
		{
	
		return $this->db->get_where($table,$where);
	
		}
}
