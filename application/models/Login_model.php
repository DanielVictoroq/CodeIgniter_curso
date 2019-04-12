<?php

class Login_model extends CI_Model
{
    
    public function salvaLogin($usuario){
        $this->db->insert('login', $usuario);
    }
    public function logar($nome, $senha){
        $nomes = $this->db->where('nome_usuario', $nome);
        $senhas = $this->db->where('senha', $senha);
        $user = $this->db->get('login')->row_array();
        
        $this->load->model('usuario_model');
        if($nomes && $senhas){
            $usuario = $this->usuario_model->buscaUsuario($nome);
        }
        else{
            $usuario = false;
        }
        return $usuario;
    }
}
