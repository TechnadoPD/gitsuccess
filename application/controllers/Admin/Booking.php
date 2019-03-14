<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends Admin_Controller {
    function __construct() {
        parent::__construct();		
    }  

    public function index(){ 	
        $data['table'] = 'booking';	
        $data['output_type'] = 'result';	
        $content['title'] = 'Booking Inquiries';			
        $content['records']  = $this->general->get($data);
        $content['main_content'] = 'booking/list';			
        $this->load->view('admin/inc/view',$content);   
    } 

    public function delete($id)
    {
        $content = array(
            'booking_viewstatus' => 'read',
        );    
        $data['where'] = array('booking_id' => $id);       
        $data['table'] = 'booking';  
        $this->general->update($data,$content); 
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Updated Successfully.');
        redirect('admin/booking');
    }
}