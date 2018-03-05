<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mabout extends CI_Model{


    public function getAbout($initial_id = 1)
    {
        $this->db->select('*');
        $this->db->from('satria_about');
        $this->db->where('jenjang_id', $initial_id);
        $query = $this->db->get();
         if( $query->num_rows() > 0 ){
            if( $initial_id !== "" ){
               return $query->row_array();
            }else{
               return $query->result_array();
            }

        }else return null;
    }



}
