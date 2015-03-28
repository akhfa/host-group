<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	Class File_Controller extends CI_Controller
	{
		function __construct()
	   {
	     parent::__construct();
	     $this->load->helper('file');
	   }
	  //  function index()
	  //  {
	  //    if($this->session->userdata('logged_in'))
	  //    {
	  //      $session_data = $this->session->userdata('logged_in');
	  //      $data['username'] = $session_data['username'];
	  //      $data['id'] = $session_data['id'];
	  //      $this->load->view('home_view', $data);
	  //    }
	  //    else
	  //    {
	  //      redirect('login', 'refresh');
	  //    }
	 	// }
		function delFile()
		{
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$id = $session_data['id'];
			$dir = './uploads/'.$id.'-'.$username.'/';
			$namaFile = $this->getNamaFile();

			if(unlink($dir.$namaFile))	
				redirect('home', 'refresh');
			else
				echo "Delete Failed";
		}

		function getNamaFile()
		{
			return $this->uri->segment(3);
		}
	}
?>