<?php
	if(!defined('BASEPATH')) exit('Forbidded');
	class EditUser_Controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form'));
		}

		function edituser()
		{
			$data = array('username' => $this->getusername(), 
							'group' => $this->getgroup(),
							'role' => $this->getrole()
						);
			$this->load->view('edituser_view', $data);
		}

		function getusername()
		{
			return $this->uri->segment(3);
		}

		function getgroup()
		{
			return $this->uri->segment(4);
		}

		function getrole()
		{
			return $this->uri->segment(5);
		}
	}
	?>