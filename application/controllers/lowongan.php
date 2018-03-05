<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lowongan extends CI_Controller {

    # property
    public $initial_template    = '';     
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'lowongan'
    );

    public function __construct(){
       parent::__construct();
            $this->load->model('minfo');
            $this->load->library('messagecontroll');
    }

    protected function init(){
    
        isset($_SERVER['HTTP_REFERER']) ? $this->root = $_SERVER['HTTP_REFERER'] : '';
        $this->app_name         = strtolower( __CLASS__ ); 
        $this->initial_id       = $this->uri->segment(3);
        $this->initial_template = $this->uri->segment(2);         
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
        $params['cat']  = $this->minfo->bindDataInfo();
        $params['info']  = $this->minfo->info(1);
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
