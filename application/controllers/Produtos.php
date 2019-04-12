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
}
