<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_page extends Admin_Controller 
{
	function __construct() 
  {
    parent::__construct();		
  }  

  public function index(){   
    if($_POST)
    {
      $this->form_validation->set_rules('service_page_banner_image', 'Banner Image', 'trim|required');
      $this->form_validation->set_rules('service_page_banner_heading', 'Banner Heading', 'trim|required');
      $this->form_validation->set_rules('service_page_intro_heading', 'Intro Heading', 'trim|required');
      $this->form_validation->set_rules('service_page_heading', 'Heading', 'trim|required');

      if (!$this->form_validation->run() == FALSE)
      {
        $content = array(
          'service_page_banner_image' => $this->input->post('service_page_banner_image',TRUE),
          'service_page_banner_heading' => $this->input->post('service_page_banner_heading',TRUE),
          'service_page_intro_heading' => $this->input->post('service_page_intro_heading',TRUE),
          'service_page_heading' => $this->input->post('service_page_heading',TRUE),

          'service_page_status' => 'enable',
          'updated_by' => '1'
        );    

        $data['where'] = array('service_page_id' => 1);		
        $data['table'] = 'service_page';	
        $this->general->update($data,$content);        
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Updated Successfully.');
        redirect('admin/service_page/index');
      }
      else
      {
        $data['where'] = array('service_page_id' => 1);		
        $data['table'] = 'service_page';	
        $data['output_type'] = 'row';	
        $content['title'] = 'Service Page Settings';		
        $content['record']  = $this->general->get($data);
        $content['main_content'] = 'service_page/edit';			
        $this->load->view('admin/inc/view',$content);   
      }
    }
    else
    {        
      $data['where'] = array('service_page_id' => 1);		
      $data['table'] = 'service_page';	
      $data['output_type'] = 'row';	
      $content['title'] = 'Service Page';		
      $content['record']  = $this->general->get($data);
      $content['main_content'] = 'service_page/edit';			
      $this->load->view('admin/inc/view',$content);   
    }
  }
}

