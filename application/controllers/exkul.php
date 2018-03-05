<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exkul extends CI_Controller {

    # property
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'exkul'
    );

    public function __construct(){
        parent::__construct();
        $this->load->model('mgallery');
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
        $params['datadb']   = $this->mgallery->bindExkul($this->uri->segment(3));
        $params['osis'] = $this->mgallery->bindExkul();
        $this->getContent($params);
	}

    public function detil() {
        $this->initial_template = 'detil';

        $params['datadb']   = $this->mgallery->bindExkul($this->uri->segment(3));
        $params['osis']     = $this->mgallery->getOsis($this->uri->segment(3));
        $this->getContent($params);
    }
}
