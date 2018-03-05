<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_kalender extends MX_Controller {
    
    # property
    public $root;
    public $app_name            = ''; 
    public $pageTitle           = ''; 
    public $initialPage         = 'Jadwal';
    # initial file image
    public $imgDir              = 'uploads/jadwal';
    public $initial_id;
    public $initial_template    = '';     
    protected  $base_template   = array(
    'container' => '../../layout/container',
    'template'  => 'tpl' 
    );


    # method
    public function __construct(){
       $this->accesscontroll->authenticate();
       $this->load->model('m'.strtolower( __CLASS__ ), 'coredb');         
       parent::__construct();
       $this->init();
       // initial helper
       $this->load->helper( array(  
        'image/image'
       ));          
	}
    
    protected function init(){
    
        isset($_SERVER['HTTP_REFERER']) ? $this->root = $_SERVER['HTTP_REFERER'] : '';
        $this->app_name         = strtolower( __CLASS__ ); 
        $this->initial_id       = $this->uri->segment(3);
        $this->initial_template = $this->uri->segment(2);         
        $this->registerValidation();
        // initial helper
        $this->load->helper( array(
        'file/file'));      
    }

    public function registerValidation(){
        
         define("REG_VALIDATION", strtolower( __CLASS__ ));
    }    
    
    private function getContent($args = array()){
         
        try{
            $body_data['contents'] = $this->load->view($this->base_template['template'], $args, TRUE);
            $this->load->view($this->base_template['container'], $body_data);
        }catch(Exception $e) {
            echo 'Caught exception, params function getContent is wrong : ',  $e->getMessage(), "\n";
        }      
    }  
    
    public function index(){
        // $params['datadb']     =  $this->coredb->bindDataPage(1);   
        $params['kalender']     =  $this->coredb->getKalender();
        $this->getContent($params);
  	}

    public function add(){
        $params['jenjang']      =  $this->coredb->getJenjang();
        if( $_POST ){
             if( $this->form_validation->run(REG_VALIDATION) !== FALSE ){
               # processing file upload
               if( $_FILES['file_kalender_akademik']['name'] !== "" )
               {
                   $this->load->library('fileupload');
                   $this->fileupload->path_directory = $this->imgDir;
                   if( $this->fileupload->init($_FILES['file_kalender_akademik']) !== FALSE ){
                        $_POST['file_kalender_akademik']     = $this->fileupload->path_directory;
                   }
               }
             # -------------------------------------------------------------------------------------               
                # record database    
                $this->load->library('uidcontroll');
                if( $this->uidcontroll->insertData('satria_kalender_akademik', bindProcessing($_POST) ) !== FALSE){
                    $this->session->set_flashdata('msg_success', 'Success Save Data');  
                    redirect( base_url($this->app_name) );
                }else{$this->session->set_flashdata('msg_success', 'Invalid Data to Save !');}
            }else{ $this->messagecontroll->delivered('msg_warning', validation_errors()); } 
        }
        $this->getContent($params);       
        
    }

    public function edit(){
        $params['datadb'] =  $this->coredb->bindKalender($this->initial_id);
        $params['kelas']  =  $this->coredb->getKalender();
        if( $_POST ){
          // var_dump($_FILES['file']['name']);die;
            if( $this->form_validation->run( REG_VALIDATION ) !== FALSE ){
               # processing file upload
               if( $_FILES['file_kalender_akademik']['name'] !== "" )
               {
                   $this->load->library('fileupload');
                   $this->fileupload->path_directory = $this->imgDir;
                   if( $this->fileupload->init($_FILES['file_kalender_akademik']) !== FALSE ){
                        $_POST['file_kalender_akademik']     = $this->fileupload->path_directory;
                   }
               }
             # ------------------------------------------------------------------------------------- 
                
               # update data
               $this->load->library('uidcontroll');
               $db_config['where'] = array('jenjang_id', $this->initial_id);
               $db_config['table'] = 'satria_kalender_akademik';
               $db_config['data']  =  bindProcessing($_POST);
               if( $this->uidcontroll->updateData( $db_config ) !== FALSE ){

                    $this->session->set_flashdata('msg_success', 'Success Update Data');
                    redirect( base_url($this->app_name) );
                    
               }else{$this->messagecontroll->delivered('msg_error', 'Invalid Data to Update !');}    
                
            }else{ $this->messagecontroll->delivered('msg_warning', validation_errors()); }   
        }
        

        $this->getContent($params);  
    }
}
?>