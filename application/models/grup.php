<?php
	Class Grup extends CI_Model
	{
		
		function getgrup()
		{
			$this->db->select('group');
			$this->db->distinct();
			$this->db->from('users');
			$this->db->where('group !=', 'default');
			$this->db->order_by("group", "asc");
			
			$query = $this->db->get();

			if($query->num_rows())
			{
				return $query->result();
			}
			else {
				return false;
			}
		}

		function delgrup($grup)
		{
			$this->db->where('username', $username); 
			if($this->db->delete('users'))
				return true;
			else
				return false;
			
		}
	}
?>