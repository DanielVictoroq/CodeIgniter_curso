<?php

class Usuario_model extends CI_Model
{
    
    public function buscaUsuario($usuario){
        $this->db->where('nome_usuario', $usuario);
        return $this->db->get('usuario')->row_array();
    }
    public function inserirUsuario($usuario){
        $this->db->insert('usuario', $usuario);
    }
}
