<?php

class Admin_model extends CI_Model
{
    
    public function logarAdmin($nome, $senha){
        $nomes = $this->db->where('nome_usuario', $nome);
        $senhas = $this->db->where('password', $senha);
        $user = $this->db->get('admin')->row_array();
        $this->load->model('usuario_model');
        if($user){
            $usuario = $this->usuario_model->buscaUsuario($nome);
        }
        else{
            $usuario = false;
        }
        return $usuario;
    }
}
