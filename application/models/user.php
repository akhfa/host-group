<?php
	Class User extends CI_Model
	{
		function login ($username, $password)
		{
			$this->db->select('id, username, password');
			$this->db->from('users');
			$this->db->where('username', $username);
			$this->db->where('password', MD5($password));
			$this->db->limit(1);

			$query = $this->db->get();

			if($query->num_rows() == 1)
			{
				return $query->result();
			}
			else {
				return false;
			}
		}
		function register($username, $password)
		{
			$this->db->select('id, username, password');
			$this->db->from('users');
			$this->db->where('username', $username);
			$this->db->limit(1);

			$query = $this->db->get();

			if($query->num_rows() == 1)
			{
				return false;
			}
			else 
			{
				$data = array('username' => $username,
						  		'password' => MD5($password));
				$this->db->insert('users', $data);
				return true;
			}
		}
		function changepassword($username, $password)
		{
			$data = array(
               'password' => MD5($password)
            );

			$this->db->where('username', $username);
			if($this->db->update('users', $data))
				return true;
			else
				return false;
		}
	}
?>