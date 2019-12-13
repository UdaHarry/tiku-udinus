<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
class My_model extends CI_Model{

    public function Get($table){
        return $this->db->get($table)->result_array();
    }

    public function Get_where($table,$data){
        return $this->db->get_where($table,$data);
    }

    public function Insert($table,$data){
        return $this->db->insert($table,$data);
    }

    public function Update($table, $data, $where){
        return $this->db->update($table,$data,$where);
    }

    public function Delete($table,$where){
        return $this->db->delete($table,$where);
    }

}