<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{



    public function create($data){
        $this->db->insert('users', $data);
    }

    public function all(){
        return $users = $this->db->get('users')->result_array();
    }
    function getUser($userId){
        $this->db->where('id', $userId);
        return $user = $this->db->get('users')->row_array();
    }

    function updateUser($userId, $data){
        $this->db->where('id', $userId);
        $this->db->update('users',$data);
    }

    function deleteUser($userId){
        $this->db->where('id', $userId);
        $this->db->delete('users');
    }
}