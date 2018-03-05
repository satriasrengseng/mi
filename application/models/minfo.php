<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Minfo extends CI_Model{
    
    public function bindDataInfo(){
        
        $this->db->select('*');
        $this->db->from('satria_kategori_info');
        $info_kategori = array('1','2','3');
        $this->db->where_not_in('info_id', $info_kategori);
        $query =  $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{ return null; }
    }

    public function info($info_id = "") {
    	$this->db->select('*');
    	$this->db->from('satria_mts_info');
    	if ($info_id != "") {
    		$this->db->where('info_kategori', $info_id);	
            $info_kategori = array('1','2','3');
            $this->db->where_not_in('info_kategori', $info_kategori);
    	}
        $info_kategori = array('1','2','3');
        $this->db->where_not_in('info_kategori', $info_kategori);        
        $qry = $this->db->get();
    	if ($qry->num_rows() > 0) {
    		return $qry->result_array();
    	}else return null;
    }
}