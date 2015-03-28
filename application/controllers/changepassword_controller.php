<?php
	if(!defined('BASEPATH')) exit('Forbidded');
	class ChangePassword_Controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$this->load->helper(array('form'));
			$this->load->view('changepassword_view');
		}
	}
	?>