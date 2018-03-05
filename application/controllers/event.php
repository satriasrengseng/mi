<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

    # property
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'event'
    );

    public function __construct(){
        parent::__construct();
        $this->load->model('mevent');
        $this->load->model('mcontact');
        $this->load->model('mads');
        $this->load->model('msocial');
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
		
        $params['datadb']   = $this->mevent->getEvent();
        $params['contact']  = $this->mcontact->bindDataContact();
        $params['ads']      = $this->mads->getAds();
		$params['social']   = $this->msocial->getSocial();		
			
        $this->getContent($params);	
	}
	
    public function detail(){
        $this->initial_template = 'detil';
        $params['datadb']   = $this->mevent->getEvent($this->uri->segment(3));
        $this->getContent($params);
    }

}
