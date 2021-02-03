<?php
    
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->library('Breadcrumbs');
   
    }
    

    public function index()
    {
        $data['page_content'] = 'page/setting/index';

        //initialize breadcrumbs 
        $this->breadcrumbs->push('Setting', '/setting');
        $this->breadcrumbs->unshift('Home', '/');
        $data['breadcrumbs'] = $this->breadcrumbs->show();

        $this->load->view('index', $data);
    }

   

}
    
    /* End of file Setting.php */
    

?>