<?php

class Login_model extends CI_Model
{

    public function salvaLogin($usuario){
        $this->db->insert('login', $usuario);
    }
}
