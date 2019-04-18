<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	
	public function novo()
	{
		$usuario = [
			"nome" => $this->input->post('nome'),
			"sobrenome" => $this->input->post('sobrenome'),
			"id_tipo" => $this->input->post('tipo'),
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
		if($this->Usuario_model->buscaUsuario($login['nome_usuario'])){
			echo json_encode([
				'status' => 1 ,
				'return'=>'Usuário Cadastrado']
			);
			die();
		}else{
			
			$this->login_model->salvaLogin($login);
			$this->Usuario_model->inserirUsuario($usuario);
			echo json_encode([
				'status' => 0 ,
				'return'=>'Usuário Cadastrado com Sucesso']
			);
			
		}
		
	}
	
	public function logar()
	{
		
		$usuario = [
			"nome_usuario" => $this->input->post('nome'),
			"senha" => md5($this->input->post('senha'))
		];
		
		$this->load->model('login_model');
		$this->load->model('admin_model');
		$logado = $this->login_model->logar($usuario["nome_usuario"], $usuario['senha']);

		if($logado){
			$this->session->set_userdata('usuario_logado', $logado);
			return redirect('/');
		}
		else{
			$admin = $this->admin_model->logarAdmin($usuario["nome_usuario"], $usuario['senha']);
			if($admin){

				$this->session->set_userdata('usuario_logado', $admin);
				$this->session->set_userdata('admin', $admin);

				return redirect('/');
			}
			return redirect('login');
		}
	}
	public function logout(){
		$this->session->unset_userdata(['usuario_logado', 'admin']);
		redirect('/');
	}
	public function dados(){
		if($this->session->has_userdata('usuario_logado' )){
			$this->load->view('dados');
		}
		else{
			redirect('/login');
		}
		
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
