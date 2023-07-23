<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct(){
		parent::__construct();

		$this->ValidarLogin();
		$this->load->helper('help');
		$this->load->model('Model_home_page','home');
	}

	public function index(){
		$dados = $this->home->Pagina();
		$hoje = new DateTime();
		
		foreach($dados as $key =>$value){
			$criado = new DateTime($dados[$key]['data_criado']);
			
			$tempo = $hoje->diff(new DateTime($dados[$key]['data_criado']));

			$dados[$key]['criado'] = tratamentoDate($tempo);

			if(!empty($dados[$key]['link']))
				$dados[$key]['link'] = realpath(dirname(__DIR__)).'\\'.$dados[$key]['link'];
		}

		$this->data['produtos'] = $dados;

		$this->load->view('head/head.php',$this->data);
		$this->load->view('home_page/home_page.php');
	}
	
	public function excluirPdf()
	{	
		if($_POST)
			$this->output->set_content_type('application/json')->set_output(json_encode($this->home->excluirPdf($_POST['id'])));
	}

	public function addPdf()
	{
		$retorno  = false;
		if($_POST && $_FILES['arquivo']){
			$dados = $_POST;
			$dados['arquivo'] = $_FILES['arquivo'];

			if($dados['arquivo']['type'] === "application/pdf"){
				$arquivoNome = md5(time()).'.pdf';
				$caminho = realpath(dirname(__DIR__))."\\arquivo\\";

				if(move_uploaded_file($dados['arquivo']['tmp_name'], "$caminho$arquivoNome")){
					if(!empty($dados['titulo'])){
						$insert = [
							'titulo' 	  => $dados['titulo'],
							'descricao'   => $dados['descricao'] ?? null,
							'data_criado' => date('Y-m-d'),
							'status' 	  => 1,
							'link'		  => "arquivo\\$arquivoNome",
						];

						$retorno = $this->home->addPdf($insert);
					}
				}
			}
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($retorno));
	}
}
