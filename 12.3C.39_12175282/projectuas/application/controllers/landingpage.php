<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller 

{
  function __construct()
    
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('user_model');   
  } 
     
  public function index()

  {
    $this->load->view('landingpage');
  } 
  
  public function login()
  
  {
    $this->load->view('login');
  }

  public function table()

  {
    $this->load->model('user_model');
    $data['memberviewout'] = $this->user_model->list_table()->result();
    $this->load->view('table',$data);
  } 
   
	public function home()
	
  {
		$this->load->view('home');
	}
    
  public function process()

  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
         
    if ($this->user_model->logincheck($username, $password)== TRUE)
    
    {
      redirect('landingpage/home');
    }

    else

    {
      redirect('landingpage/login');
    }
  }

  public function register()
  
  {           
    $this->form_validation->set_rules('firstname', 'Nama Depan', 'required|max_length[50]');           
    $this->form_validation->set_rules('lastname', 'Nama Belakang', 'required|max_length[50]');           
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]');         
    $this->form_validation->set_rules('contactno', 'Nomor Kontak', 'required');
    $this->form_validation->set_rules('address', 'Alamat', 'required');
    $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
 
    if ($this->form_validation->run() == FALSE) 
    
    {
      $this->load->view('landingpage');
    }
    
    else
    
    {
      $form_data = array

      (
        'firstname' => set_value('firstname'),
        'lastname' => set_value('lastname'),
        'email' => set_value('email'),
        'contactno' => set_value('contactno'),
        'address' => set_value('address'),
      );
 
      if ($this->user_model->SaveForm($form_data) == TRUE) 
      
      {
        redirect('');
      }
      
      else
      
      {
        redirect('');
      }
    }
  }

  /* public function moverecord() // under construction

  {
    INSERT INTO memberin
    SELECT * FROM memberout WHERE id = $memberid
  } */
}
	