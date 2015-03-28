<?php
	ini_set('display_errors',1);
  ini_set('display_startup_errors',1);
  error_reporting(-1);
	if(!defined('BASEPATH')) exit('Forbidded');
	class Upload_Controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url', 'array'));
		}

		function index()
		{
			$this->load->view('upload_view', array('error' => ' ' ));
		}

		function do_upload()
		{
			$session_data = $this->session->userdata('logged_in');
			$id = element('id', $session_data);
			$username = element('username', $session_data);
			$group = element('group', $session_data);

			// Cek Folder
			if(!is_dir('./uploads/'.$group))
				mkdir('./uploads/'.$group, 0777, TRUE);

			$config['upload_path'] = './uploads/'.$group;
			$config['allowed_types'] = '*';
			$config['max_size']	= '1500';
			$config['max_width']  = '*';
			$config['max_height']  = '*';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_view', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());

				$this->load->view('uploadsuccess_view', $data);
			}
		}
	}
?>