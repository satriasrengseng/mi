<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kalender extends CI_Controller {

    # property
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'kalender'
    );

    public function __construct(){
        parent::__construct();
        $this->load->model('mkalender');
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
        $params['kalender'] = $this->mkalender->bindDataKalender();
        $this->getContent($params);
	}
}
