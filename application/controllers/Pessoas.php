<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends MY_Controller {

	function __construct(){
		parent::__construct();

		$this->ValidarLogin();
		$this->load->model('Model_pessoas','pessoas');
	}

	public function index(){
		$this->data['pessoas'] = $this->pessoas->Pagina();

		$this->load->view('head/head.php',$this->data);
		$this->load->view('pessoas/pessoas.php');
	}
}