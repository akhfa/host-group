<?php 

  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);
  error_reporting(-1);

  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Do_Register extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->helper('URL');
 }
 
 function index()
 {
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_register');
 
   if($this->form_validation->run() == FALSE)
   {
     $this->load->view('failedregister_view');
   }
   else
   {
     $this->load->view('successregister_view');
   }
 
 }

function register($password)
 {
   $username = $this->input->post('username');

   $result = $this->user->register($username, $password);

   if($result)
   {
     //$this->load->view('successregister_view');
     return TRUE;
   }
   else
   {
     // $this->load->view('failedregister_view');
     return FALSE;
   }
 }
}
?>