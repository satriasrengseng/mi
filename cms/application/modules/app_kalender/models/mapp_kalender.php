<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapp_kalender extends CI_Model{

    public function getJenjang() {
        $this->db->select('*');
        $this->db->from('satria_jenjang');
        $qry = $this->db->get();
        if ($qry->num_rows() > 0) {
            return $qry->result_array();
        } else return null;
    }

    public function getKalender() {
        $this->db->select('*');
        $this->db->from('satria_kalender_akademik');
        $this->db->join('satria_jenjang', 'satria_kalender_akademik.jenjang_id = satria_jenjang.jenjang_id');
        $this->db->where('satria_jenjang.jenjang_id', 1);
        $this->db->order_by('satria_jenjang.jenjang_id', 'asc');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array(); 
        } else return null;
    }

    public function bindKalender($kalenderid = "", $offset="", $limit=""){
        
        $this->db->select('*');
        $this->db->from('satria_kalender_akademik');
        if( $kalenderid !== "" ){
            $this->db->where('id_kalender_akademik', $kalenderid);
        }
        if($offset !== "" || $limit !== ""){
            $this->db->limit($offset, $limit);
        }
        $this->db->order_by('id_kalender_akademik', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            if( $kalenderid !== "" ){
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