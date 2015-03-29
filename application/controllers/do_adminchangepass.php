<?php 

  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);
  error_reporting(-1);

  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Do_AdminChangePass extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->helper(array('URL','array'));
 }
 
 function index()
 {
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('passwordConf', 'Password', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'PasswordConf', 'trim|required|xss_clean|callback_change');
 
   if($this->form_validation->run())
   {
      $this->load->view('successchange_view', array('username' => $this->input->post('username')));
   }
   else
   {
      $this->load->view('failedchange_view');
   }
 
 }

function change($password)
 {
   $passwordConf = $this->input->post('passwordConf');

    $username = $this->input->post('username');
   
   if(strcmp($password, $passwordConf) == 0)
    {
      if($result = $this->user->changepassword($username, $password))
        return TRUE;
      else
        return FALSE;
    }
   else
   {
      return FALSE;
   }
   
 }
}
?>