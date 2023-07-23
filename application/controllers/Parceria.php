<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parceria extends MY_Controller {

	function __construct(){
		parent::__construct();

		$this->ValidarLogin();
		$this->load->model('Model_parceria','parcerias');
	}


    public function index(){
		$this->data['parcerias'] = $this->parcerias->Pagina();

		$this->load->view('head/head.php',$this->data);
		$this->load->view('parceria/parceria.php');
	}
}