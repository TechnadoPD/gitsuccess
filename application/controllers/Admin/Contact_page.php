<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_page extends Admin_Controller 
{
	function __construct() 
  {
    parent::__construct();		
  }  

  public function index(){   
    if($_POST)
    {
      $this->form_validation->set_rules('contact_page_banner_image', 'Section One Heading', 'trim|required');
      $this->form_validation->set_rules('contact_page_banner_heading', 'Time One Heading', 'trim|required');
      $this->form_validation->set_rules('contact_page_right_heading', 'Time One', 'trim|required');
      $this->form_validation->set_rules('contact_page_left_heading', 'Time One', 'trim|required');

      if (!$this->form_validation->run() == FALSE)
      {
        $content = array(
          'contact_page_banner_image' => $this->input->post('contact_page_banner_image',TRUE),
          'contact_page_banner_heading' => $this->input->post('contact_page_banner_heading',TRUE),
          'contact_page_left_heading' => $this->input->post('contact_page_left_heading',TRUE),
          'contact_page_right_heading' => $this->input->post('contact_page_right_heading',TRUE),

          'contact_page_status' => 'enable',
          'updated_by' => '1'
        );    

        $data['where'] = array('contact_page_id' => 1);		
        $data['table'] = 'contact_page';	
        $this->general->update($data,$content);        
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Updated Successfully.');
        redirect('admin/contact_page/index');
      }
      else
      {
        $data['where'] = array('contact_page_id' => 1);		
        $data['table'] = 'contact_page';	
        $data['output_type'] = 'row';	
        $content['title'] = 'Contact Page Settings';		
        $content['record']  = $this->general->get($data);
        $content['main_content'] = 'contact_page/edit';			
        $this->load->view('admin/inc/view',$content);   
      }
    }
    else
    {        
      $data['where'] = array('contact_page_id' => 1);		
      $data['table'] = 'contact_page';	
      $data['output_type'] = 'row';	
      $content['title'] = 'Contact Page';		
      $content['record']  = $this->general->get($data);
      $content['main_content'] = 'contact_page/edit';			
      $this->load->view('admin/inc/view',$content);   
    }
  }
}

