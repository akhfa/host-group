<?php
	if(!defined('BASEPATH')) exit('Forbidded');
	class ChangePassword_Controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form'));
		}

		function index()
		{
			$this->load->view('changepassword_view');
		}

		function changepass()
		{
				$data = array('username' => $this->getusername());
				$this->load->view('adminchangepassword_view', $data);
		}

		function getusername()
		{
			return $this->uri->segment(3);
		}
	}
	?>