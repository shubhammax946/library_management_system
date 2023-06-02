<?php
class Home extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
  }
    public function index()
    {
        $this->load->view('home');
        $this->load->view('signup');
         $this->load->view('adminlogin');
    }
    public function dash()
    {

      $this->load->view('dashboard');
    }
   
public function book(){

  $this->load->view('book_list/index_b');
 



 $this->load->view('book_list/create_b');

 $this->load->view('book_list/delete_b');
 $this->load->view('book_list/edit_b');

 $this->load->view('book_list/process_b');

 $this->load->view('book_list/view_b');
}

      
    
 
  

    
}

?>

