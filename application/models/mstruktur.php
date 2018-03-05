<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mstruktur extends CI_Model{

    public function bindDataStruktur(){

        $this->db->select('*');
        $this->db->from('satria_struktur');
        $this->db->where('jenjang_id', 1);
        $query =  $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }else{ return null; }
    }

    public function getOfficers(){

        $this->db->select('*');
        $this->db->from('officer');
        $query =  $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }else{ return null; }
    }

    public function getSponsors(){

        $this->db->select('*');
        $this->db->from('sponsors');
        $query =  $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }else{ return null; }
    }

    public function getAbout($initial_id = 1)
    {
        $this->db->select('*');
        $this->db->from('satria_about');
        $query = $this->db->get();
         if( $query->num_rows() > 0 ){
            if( $initial_id !== "" ){
               return $query->row_array();
            }else{
               return $query->result_array();
            }

        }else return null;
    }


    public function getPriceMi($initial_id = "") {
        $this->db->select('price_real, jenjang_id, satria_price.fasilitas_id, satria_fasilitas.fasilitas_nama');
        $this->db->from('satria_price');
        $this->db->join('satria_fasilitas', 'satria_price.fasilitas_id = satria_fasilitas.fasilitas_id');
        $this->db->where('satria_price.jenjang_id', 1);
        $this->db->order_by('satria_price.fasilitas_id', 'DESC');
        $query = $this->db->get();
         if( $query->num_rows() > 0 ){
            if( $initial_id !== "" ){
               return $query->row_array();
            }else{
               return $query->result_array();
            }

        }else return null;
    }


    public function getPriceMts($initial_id = "") {
        $this->db->select('price_real, jenjang_id, satria_price.fasilitas_id, satria_fasilitas.fasilitas_nama');
        $this->db->from('satria_price');
        $this->db->join('satria_fasilitas', 'satria_price.fasilitas_id = satria_fasilitas.fasilitas_id');
        $this->db->where('satria_price.jenjang_id', 2);
        $this->db->order_by('satria_price.fasilitas_id', 'DESC');
        $query = $this->db->get();
         if( $query->num_rows() > 0 ){
            if( $initial_id !== "" ){
               return $query->row_array();
            }else{
               return $query->result_array();
            }

        }else return null;
    }


    public function getPriceSmk($initial_id = "") {
        $this->db->select('price_real, jenjang_id, satria_price.fasilitas_id, satria_fasilitas.fasilitas_nama');
        $this->db->from('satria_price');
        $this->db->join('satria_fasilitas', 'satria_price.fasilitas_id = satria_fasilitas.fasilitas_id');
        $this->db->where('satria_price.jenjang_id', 3);
        $this->db->order_by('satria_price.fasilitas_id', 'DESC');
        $query = $this->db->get();
         if( $query->num_rows() > 0 ){
            if( $initial_id !== "" ){
               return $query->row_array();
            }else{
               return $query->result_array();
            }

        }else return null;
    }

    public function sendMessage(){

       if($_POST){

            // php mailer

       }
    }
}
