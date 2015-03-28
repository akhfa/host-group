<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

   function __construct()
   {
     parent::__construct();
     $this->load->helper("URL");
     $this->load->helper('directory');
   }

   function index()
   {
     if($this->session->userdata('logged_in'))
     {
       $session_data = $this->session->userdata('logged_in');
       $data['username'] = $session_data['username'];
       $data['id'] = $session_data['id'];
       $this->load->view('home_view', $data);
     }
     else
     {
       redirect('login', 'refresh');
     }
   }

   function logout()
   {
     $this->session->unset_userdata('logged_in');
     $this->session->sess_destroy();
     redirect('home', 'refresh');
   }

}

?>