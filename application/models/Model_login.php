<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model{
    function __construct(){	
		parent::__construct();
	}

	public function dataUsers($dados,$is_search = true){
		if(!empty($dados['nome'])){
			if($is_search){
				$this->db->where('nome',$dados['nome']);
				$this->db->where('id',$dados['id']);
			}else{
				$email = $dados['nome'];
				$pass = hash('sha256',$dados['pass']);

				$this->db->where('email',$email);
				$this->db->where('senha',$pass);
			}

			return $this->db->get('user')->row_array();
		}
	}
    
}