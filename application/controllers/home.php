<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    # property
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'home'
    );

    public function __construct(){
        parent::__construct();
        $this->load->model('mabout');
        $this->load->model('mevent');
        $this->load->helper('global');
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
        $params['about'] = $this->mabout->getAbout();
        $params['events'] = $this->mevent->getEvent();
        //echo '<pre>'.print_r($params['ads'], true).'</pre>';      
        $this->getContent($params);
	}
}
