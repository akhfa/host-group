<?php
	if(!defined('BASEPATH')) exit('Forbidded');
	class Register extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$this->load->helper(array('form'));
			$this->load->view('register_view');
		}
	}

?>