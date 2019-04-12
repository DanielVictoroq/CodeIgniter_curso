<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function novo()
	{
		$usuario = [
			"nome" => $this->input->post('nome'),
			"sobrenome" => $this->input->post('sobrenome'),
			"genero" => $this->input->post('genero'),
			"dataNascimento" => $this->input->post('date'),
			"telefone" => $this->input->post('fone'),
			"nome_usuario" => $this->input->post('nome_usuario')
		];
		$login =[
			"nome_usuario" => $this->input->post('nome_usuario'),
			'senha' => md5($this->input->post('senha')),
			'email' => $this->input->post('email')
		];
		$this->load->model('login_model');
		$this->load->model('Usuario_model');
		$this->login_model->salvaLogin($login);
		$this->Usuario_model->inserirUsuario($usuario);

		return redirect('/');
	}

	public function logar()
	{
		
		$usuario = [
			"nome_usuario" => $this->input->post('nome'),
			"senha" => md5($this->input->post('senha'))
		];
		
		$this->load->model('login_model');
		$logado = $this->login_model->logar($usuario["nome_usuario"], $usuario['senha']);

		if($logado){
			$this->session->set_userdata('usuario_logado', $logado);
			return redirect('/');
		}
		else{
			return redirect('login');
		}
	}
	public function logout(){
		$this->session->unset_userdata('usuario_logado');
		redirect('/');
	}
	public function telaLogar()
	{
		$this->load->view('index');
	}
	public function telaCadastro()
	{
		$this->load->view('cadastro');
	}
}
