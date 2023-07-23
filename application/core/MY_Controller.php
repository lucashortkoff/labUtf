<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public $user_Data = '';
	public $CI;

	function __construct(){
		parent::__construct();

		$this->CI = &get_instance();
		$this->load->model('Model_login','login');
		$this->load->library('session');
	}

	protected function ValidarLogin($dados = []){
		$data['success'] = false;
		$this->data['user'] = $this->login->dataUsers($dados,false);

		if(!empty($dados)){
			if(!empty($this->data['user'])){
				$data['success'] = true;
			}

			if($data['success']){
				if(empty($_SESSION)){
					session_start();
				}

				$_SESSION['id'] = $this->data['user']['id'];
				$_SESSION['nome'] = $this->data['user']['nome'];

				$this->user_Data = $this->data['user'];

				return true;
			}else{
				return false;
			}
		}else{
			if(!empty($this->session->userdata)){
				$this->user_Data = $this->login->dataUsers($this->session->userdata,true);

				if(!empty($this->user_Data))
					$this->user_Data['log'] = true;

				return true;
			}
		}
	}

	public function ValidarLogout($dados){
		if(!empty($dados)){
			$id = $dados['id'];
			$this->CI->user_Data["$id"] = null;
			session_destroy();

			redirect(base_url());
		}
	}
}