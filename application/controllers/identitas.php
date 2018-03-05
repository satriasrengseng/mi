<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Identitas extends CI_Controller {

    # property
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'identitas'
    );

    public function __construct(){
        parent::__construct();
        $this->load->library('messagecontroll');
    }

    # method
    private function getContent($args = array()){

        try{
            $body_data['contents'] = $this->load->view($this->base_template['template'], $args, TRUE);
            $this->load->view($this->base_template['container'], $body_data);
        }catch(Exception $e) {
            echo 'Caught exception, params function getContent is wrong : ',  $e->getMessage(), "\n";
        }
    }

    public function index(){
        if(!$_POST){
            $this->load->model('mabout');
            $params['about'] = $this->mabout->getAbout();  
            $this->getContent($params);
        }else{
            // echo 'asd';
            $this->load->library('uidcontroll');
            $testi['nama']   = $this->input->post('nama');
            $testi['status'] = $this->input->post('status');
            $testi['desc_testimoni']   = $this->input->post('desc_testimoni');

            $this->uidcontroll->insertData('satria_testimoni', $testi);
            // $this->session->set_flashdata('msg_success', 'Success Save Data');
            echo json_encode('sukses'); 
        }

        

    }

}
