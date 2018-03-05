<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mkalender extends CI_Model{

    public function bindDataKalender(){

        $this->db->select('*');
        $this->db->from('satria_kalender_akademik');
        $this->db->where('jenjang_id', 1);
        $query =  $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{ return null; }
    }
}
