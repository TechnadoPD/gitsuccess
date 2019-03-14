<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends Admin_Controller {
    function __construct() {
        parent::__construct();		
    }  

    public function index(){ 	
        $data['table'] = 'newsletter';	
        $data['output_type'] = 'result';	
        $content['title'] = 'Newsletters';			
        $content['records']  = $this->general->get($data);
        $content['main_content'] = 'newsletter/list';			
        $this->load->view('admin/inc/view',$content);   
    } 

    public function delete($id)
    {
        $content = array(
            'newsletter_status' => 'disable',
        );    
        $data['where'] = array('newsletter_id' => $id);       
        $data['table'] = 'newsletter';  
        $this->general->update($data,$content); 
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Deleted Successfully.');
        redirect('admin/newsletter');
    }
}