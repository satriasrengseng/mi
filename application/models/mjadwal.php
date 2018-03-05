<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mjadwal extends CI_Model{
    
    public function bindDataJadwal() {
        
        $this->db->select('*');
        $this->db->from('satria_smk_jadwal');
        $this->db->join('satria_kelas_jurusan', 'satria_smk_jadwal.id_kelas_jurusan = satria_kelas_jurusan.id_kelas_jurusan');
        $query =  $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{ return null; }
    }

    public function getKelasJurusan() {
    	$this->db->select('*');
    	$this->db->from('satria_kelas_jurusan');
    	$this->db->group_by('kd_jenjang_smk');
    	$qry = $this->db->get();
    	if ($qry->num_rows() > 0) {
    		return $qry->result_array();
    	}else{return null;}
    }
}