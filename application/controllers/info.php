<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_Controller {

    # property
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'info'
    );

    public function __construct(){
       parent::__construct();
            $this->load->model('minfo');
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
        $params['cat']   = $this->minfo->bindDataInfo();
        $params['info']  = $this->minfo->info();
        $this->getContent($params);
    }

    public function lowongan() {
        $this->initial_template = 'lowongan';
        $params['info']  = $this->minfo->info(1);
        $this->getContent($params);
    }

    public function kelulusan() {
        $this->initial_template = 'lowongan';
        $params['info']  = $this->minfo->info(4);
        $this->getContent($params);
    }

    public function detail(){
        $this->initial_template = 'detail';
        $this->load->model('mcontact');
        $params['contact'] = $this->mcontact->bindDataContact();

        $this->load->model('mads');
        $params['ads'] = $this->mads->getAds();
        $this->load->model('mgallery');
        $params['gallery'] = $this->mgallery->getAllGallery2($this->uri->segment(3));
				//var_dump($params['gallery']);
				$this->load->model('msocial');
				$params['social'] = $this->msocial->getSocial();			
        $this->getContent($params);
    }

}
