<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends Admin_Controller {
    function __construct() {
        parent::__construct();		
    }  

    public function index(){ 	
        $data['table'] = 'contact_us';	
        $data['output_type'] = 'result';	
        $content['title'] = 'Contact Inquiries';			
        $content['records']  = $this->general->get($data);
        $content['main_content'] = 'contact_us/list';			
        $this->load->view('admin/inc/view',$content);   
    } 

    public function delete($id)
    {
        $content = array(
            'contact_us_viewstatus' => 'read',
        );    
        $data['where'] = array('contact_us_id' => $id);       
        $data['table'] = 'contact_us';  
        $this->general->update($data,$content); 
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Updated Successfully.');
        redirect('admin/contact_us');
    }
}