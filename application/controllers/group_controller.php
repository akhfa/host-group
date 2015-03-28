<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	Class Group_Controller extends CI_Controller
	{
		function __construct()
	   {
	     parent::__construct();
	     $this->load->model('group','',TRUE);
	   }

		function delgroup()
		{
			if($this->group->delgroup($this->getgroupname()))
			{
				redirect('home', 'refresh');
			}
		}

		function getgroupname()
		{
			return $this->uri->segment(3);
		}
	}
?>