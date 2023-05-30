<?php
class Home extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
  }
    public function index(){
        $this->load->view('home');
       $this->load->view('signup');
     $this->load->view('adminlogin');
   
     
    }
    public function dash(){
      $this->load->view('dashboard');
    
 
    }
    
}

?>