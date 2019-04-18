<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {
	
	public function index()
	{
		if($this->session->has_userdata('usuario_logado' )){
			
			$this->load->model("produtos_model");
			$dados = $this->produtos_model->getTodos();
			$lista = [
				'lista' => $dados
			];
			$this->load->view('produtos', $lista);
		}
		else{
			redirect('/login');
		}
	}
	
	public function telaCadastroProduto(){
		if($this->session->has_userdata('usuario_logado' )){
			$this->load->view('cadastro-produto');
		}
		else{
			redirect('/login');
		}
	}
	
	public function cadastrarProdutos(){
		$produto = [
			"nome" => $this->input->post('nome'),
			"descricao" => $this->input->post('descricao'),
			"quantidade" => $this->input->post('quantidade'),
			"preco" => $this->input->post('preco'),
		];
		$this->load->model("produtos_model");
		$this->produtos_model->insertProduto($produto);
		redirect('/');
	}
}
