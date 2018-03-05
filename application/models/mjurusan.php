<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mjurusan extends CI_Model{
    
    public function bindDataJurusan(){
        
        $this->db->select('*');
        $this->db->from('satria_jurusan');
        $query =  $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{ return null; }
    }
}