<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ManageUser extends CI_Controller {

   function __construct()
   {
     parent::__construct();
     $this->load->helper("URL");
     $this->load->helper('directory');
     $this->load->model('user','',TRUE);
   }

   function index()
   {
     if($this->session->userdata('logged_in'))
     {
       $session_data = $this->session->userdata('logged_in');
       $data['username'] = $session_data['username'];
       $data['id'] = $session_data['id'];
       $data['group'] = $session_data['group'];
       $data['role'] = $session_data['role'];

       if($session_data['role'] === "admin"){
          $data['daftaruser'] = $this->user->getuser();
          $this->load->view('manageuser_view', $data);
       }
       else
       {
          $this->load->view('home_view', $data);
       }
     }
     else
     {
       redirect('login', 'refresh');
     }
   }

}

?>