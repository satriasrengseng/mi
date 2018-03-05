<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Struktur extends CI_Controller {

    # property
    protected  $base_template   = array(
    'container' => 'container',
    'template'  => 'struktur'
    );

    public function __construct(){
        parent::__construct();
        $this->load->model('mstruktur');
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
        $params['struktur'] = $this->mstruktur->bindDataStruktur();
        // var_dump($params['struktur']);die;
        $this->getContent($params);
	}
}
