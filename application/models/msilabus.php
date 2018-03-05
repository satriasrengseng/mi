<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msilabus extends CI_Model{
    
    public function bindDataSilabus(){
        
        $this->db->select('*');
        $this->db->from('satria_smk_silabus');
        $query =  $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{ return null; }
    }
}