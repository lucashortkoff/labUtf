<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_parceria extends CI_Model{
    function __construct(){	
		parent::__construct();
	}

	public function Pagina()
	{
		$this->db->select("
        *
        ",FALSE);
        $operacao = $this->db->get("parceria");
        if(!$operacao){
            throw new exception($this->db->error()['message']);
        }
        $retorno = $operacao->result_array();
        return $retorno;
	}

}