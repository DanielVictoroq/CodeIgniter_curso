<?php

class Produtos_model extends CI_Model
{

    public function getTodos(){
        return $this->db->get('produtos')->result_array();
    }
}
