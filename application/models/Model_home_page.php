<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home_page extends CI_Model{
    function __construct(){	
		parent::__construct();
	}

    public function Pagina(){
        $this->db->where('status', 1);
        $this->db->group_by('id');

        $operacao = $this->db->get("feed");

        if(!$operacao){
            throw new exception($this->db->error()['message']);
        }

        return $operacao->result_array();
    }

    public function excluirPdf($pdf){
        if(!empty($pdf)){
            $this->db->where('id', $pdf);
            return $this->db->update('feed',['status' => 0]);
        }
    }

    public function addPdf($dados){
        if(!empty($dados)){
            $operacao = $this->db->insert('feed',$dados);

            if (!empty($this->db->error()["code"])) {
                throw new Exception($this->db->error()["message"]);
            } 

            return $operacao;
        }
    }
}