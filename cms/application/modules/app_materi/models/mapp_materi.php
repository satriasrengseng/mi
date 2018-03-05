<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapp_materi extends CI_Model{

    public function binDataMateri($initial_id = "") {
        $this->db->select('*');
        $this->db->from('satria_smk_materi');
        if ($initial_id !== "") {
            $this->db->where('materi_id', $initial_id);
        }
        $qry = $this->db->get();
        if ($qry->num_rows() > 0) {
            return $qry->result_array();
        }else return null;
    }

    public function binDataX($initial_id = "X") {
        $this->db->select('*');
        $this->db->from('satria_smk_materi');
        if ($initial_id !== "") {
            $this->db->where('kd_jenjang_smk', $initial_id);
        }
        $qry = $this->db->get();
        if ($qry->num_rows() > 0) {
            return $qry->result_array();
        }else return null;
    }

    public function binDataXi($initial_id = "XI") {
        $this->db->select('*');
        $this->db->from('satria_smk_materi');
        if ($initial_id !== "") {
            $this->db->where('kd_jenjang_smk', $initial_id);
        }
        $qry = $this->db->get();
        if ($qry->num_rows() > 0) {
            return $qry->result_array();
        }else return null;
    }

    public function binDataXii($initial_id = "XII") {
        $this->db->select('*');
        $this->db->from('satria_smk_materi');
        if ($initial_id !== "") {
            $this->db->where('kd_jenjang_smk', $initial_id);
        }
        $qry = $this->db->get();
        if ($qry->num_rows() > 0) {
            return $qry->result_array();
        }else return null;
    }
    
    public function getEvent($event_id = "", $offset="", $limit=""){
        
        $this->db->select('*');
        $this->db->from('satria_event');
        if( $event_id !== "" ){
            $this->db->where('event_id', $event_id);
        }
        if($offset !== "" || $limit !== ""){
            $this->db->limit($offset, $limit);
        }
        $this->db->order_by('event_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            if( $event_id !== "" ){
                return $query->row_array(); 
            }else{
                return $query->result_array(); 
            }
        }else return null;
    }    
    
    public function grapImage($event_id){
        
        $this->db->select('event_pict');
        $this->db->from('satria_event');
        $this->db->where('event_id', $event_id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else return null;
    }

    public function getSlide($event_id){
        
        $this->db->select('is_slide');
        $this->db->from('satria_event');
        $this->db->order_by('event_id', 'ASC');
        $this->db->where('event_id', $event_id);        
        $query = $this->db->get();
        if($query->num_rows() > 0){
                return $query->result_array();
        }else return null;
    }

    public function getTotalEvents(){
        
        $this->db->select('*');
        $this->db->from('satria_event');
        $this->db->order_by('event_id', 'DESC');
        $query = $this->db->get();
        return $query->num_rows();
    }
    
      public function PastEvent(){
        
        $this->db->select('*');
        $this->db->from('satria_event');
        $this->db->where('status', '1');
        $query = $this->db->get();
        if( $query->num_rows() > 0 ){
            return $query->result_array();
        }else return null;
      } 

      public function CommingSoon(){
        
        $this->db->select('*');
        $this->db->from('satria_event');
        $this->db->where('status', '0');
        $query = $this->db->get();
        if( $query->num_rows() > 0 ){
            return $query->result_array();
        }else return null;
      }      
    
      public function bindDataPage(){
        
        $this->db->select('*');
        $this->db->from('satria_event');
        $query = $this->db->get();
        if( $query->num_rows() > 0 ){
            return $query->result_array();
        }else return null;
      }
}