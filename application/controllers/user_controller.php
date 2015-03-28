<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	Class User_Controller extends CI_Controller
	{
		function __construct()
	   {
	     parent::__construct();
	     $this->load->model('user','',TRUE);
	   }

		function deluser()
		{
			if($this->user->deluser($this->getusername()))
			{
				redirect('home', 'refresh');
			}
		}

		function getusername()
		{
			return $this->uri->segment(3);
		}
	}
?>