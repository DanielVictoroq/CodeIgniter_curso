<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function novo()
	{
		$usuario = [
			"nome_usuario" => $this->input->post('nome'),
			"email" => $this->input->post('email'),
			"senha" => md5($this->input->post('senha'))
		];

		$this->load->model('login_model');
		$this->login_model->salvaLogin($usuario);

		return redirect('/');
	}
}
