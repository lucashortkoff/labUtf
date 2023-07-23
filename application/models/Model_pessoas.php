<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pessoas extends CI_Model{
    function __construct(){	
		parent::__construct();
	}

	public function Pagina()
	{
        $this->db->where('status',1);
        $operacao = $this->db->get("pessoas");
        if(!$operacao){
            throw new exception($this->db->error()['message']);
        }
        $retorno = $operacao->result_array();
        return $retorno;
	}

}