<?php
	if(!defined('BASEPATH')) exit('Forbidded');
	class Login extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$this->load->helper(array('form'));
			$this->load->view('login_view');
		}
	}
?>