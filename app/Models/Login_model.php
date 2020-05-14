<?php

class Login_model extends CI_Model{

    public function login($user, $password)
    {
        $this->db->where("user", $user);
        $this->db->where("password", $password);
        
        $user_model = $this->db->get("tb")->row_array();
        return $user_model;
    }
}