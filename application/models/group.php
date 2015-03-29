<?php
	Class Group extends CI_Model
	{
		
		function getgroup()
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

		function getmember($groupname)
		{
			$this->db->select('username, group, role');
			$this->db->from('users');
			$this->db->where('group', $groupname);
			$this->db->order_by("username", "asc");
			
			$query = $this->db->get();

			if($query->num_rows())
			{
				return $query->result();
			}
			else {
				return false;
			}
		}

		function delgroup($group)
		{
			$this->db->where('group', $group); 
			if($this->db->delete('users'))
				return true;
			else
				return false;
			
		}
	}
?>