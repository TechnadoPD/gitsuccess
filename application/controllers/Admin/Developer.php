<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends Admin_Controller {
	function __construct() {
		parent::__construct();		
	}  

	public function general(){   
    if($_POST)
    {
      $this->form_validation->set_rules('developer_nav_gradient', 'Site Title', 'trim|required');
      $this->form_validation->set_rules('developer_nav_color', 'Site Title', 'trim|required');
      $this->form_validation->set_rules('developer_content_image', 'Site Title', 'trim|required');
      $this->form_validation->set_rules('developer_nav_image', 'Site Title', 'trim|required');

      if (!$this->form_validation->run() == FALSE){
        $content = array(
          'developer_nav_gradient' => $this->input->post('developer_nav_gradient',TRUE),
          'developer_nav_color' => $this->input->post('developer_nav_color',TRUE),
          'developer_content_image' => $this->input->post('developer_content_image',TRUE),
          'developer_nav_image' => $this->input->post('developer_nav_image',TRUE),
          'developer_login_background' => $this->input->post('developer_login_background',TRUE),

          'developer_status' => 'enable',
        );    

        $data['where'] = array('developer_id' => 1);		
        $data['table'] = 'developer';	
        $this->general->update($data,$content);        
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Updated Successfully.');
        redirect('admin/developer/general');
      }
      else{
        $data['where'] = array('developer_id' => 1);		
        $data['table'] = 'developer';	
        $data['output_type'] = 'row';	
        $content['title'] = 'General Settings';		
        $content['record']  = $this->general->get($data);
        $content['main_content'] = 'developer/general';			
        $this->load->view('admin/inc/view',$content);   
      }
    }
    else
    {      

      $data['where'] = array('developer_id' => 1);		
      $data['table'] = 'developer';	
      $data['output_type'] = 'row';	
      $content['title'] = 'Developer Settings';		
      $content['record']  = $this->general->get($data);
      $content['main_content'] = 'developer/general';			
      $this->load->view('admin/inc/view',$content);   
    }
  }
}

