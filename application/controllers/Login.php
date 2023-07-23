<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{
    function __construct(){
	    parent::__construct();
    
	    $this->ValidarLogin();
	    $this->load->model('Model_login','login');
	  }
  
    public function index(){
      $this->load->view('head/head.php',$this->data);
	    $this->load->view('login/login.php');
    }
  
    public function authUser(){
      $dados_log = $_POST;
      $success = false;
    
      if($dados_log){
        $dados_log['log'] = false;
        $success = $this->ValidarLogin($dados_log);
      
        if($success)
          redirect(base_url().'/Home');
        else
          return false;
      }else{
        redirect(base_url().'login');
      }
    }
  
    public function Logout(){
      $success = false;
    
      if($this->CI->user_Data)
        $success = $this->ValidarLogout($this->CI->user_Data);
    
      redirect(base_url());
	  }
}