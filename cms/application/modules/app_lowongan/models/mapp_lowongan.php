<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapp_lowongan extends CI_Model{
    
    public function getLowongan($lowongan_id = "") {
        
        $this->db->select('satria_smk_info.*, satria_smk_info.info_id as kategori, satria_kategori_info.*');
        $this->db->from('satria_smk_info');
        $this->db->join('satria_kategori_info', 'satria_smk_info.info_kategori = satria_kategori_info.info_id');
        $arrayName = array('1', '2', '3');
        $this->db->or_where_not_in('info_kategori', $arrayName);
        if( $lowongan_id !== "" ){
            $this->db->where('satria_smk_info.info_id', $lowongan_id);
        }
        $query = $this->db->get();
        if($query->num_rows() > 0){
            if( $lowongan_id !== "" ){
                return $query->row_array(); 
            }else{
                return $query->result_array(); 
            }
        }else return null;
    }    

    public function getKategoriInfo() {
        $this->db->select('*');
        $this->db->from('satria_kategori_info');
        $this->db->where('info_id !=', 1);
        $qry = $this->db->get();
        if ($qry->num_rows() > 0) {
            return $qry->result_array();
        } else return null;
    }
    
    public function grapImage($infoid){
        
        $this->db->select('info_file');
        $this->db->from('satria_smk_info');
        $this->db->where('info_id', $infoid);
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