<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_page extends Admin_Controller {
	function __construct() {
		parent::__construct();		
	}  

	public function index(){   
    if($_POST)
    {
      $this->form_validation->set_rules('about_page_banner_image', 'Banner Image', 'trim|required');
      $this->form_validation->set_rules('about_page_banner_heading', 'Banner Heading', 'trim|required');
      $this->form_validation->set_rules('about_page_intro_heading', 'Intro Heading', 'trim|required');
      $this->form_validation->set_rules('about_page_heading', 'Heading', 'trim|required');
      $this->form_validation->set_rules('about_page_text', 'Text', 'trim|required');
      $this->form_validation->set_rules('about_page_right_image', 'Right Image', 'trim|required');
      $this->form_validation->set_rules('about_page_sec2_heading', 'Section Two Heading', 'trim|required');
      $this->form_validation->set_rules('about_page_sec2_text', 'Section Two Text', 'trim|required');
      $this->form_validation->set_rules('about_page_sec2_right_image', 'Section Two Right Image', 'trim|required');
      $this->form_validation->set_rules('quality_one', 'Quality one', 'trim|required');
      $this->form_validation->set_rules('quality_two', 'Quality two', 'trim|required');
      $this->form_validation->set_rules('quality_three', 'Quality three', 'trim|required');
      $this->form_validation->set_rules('quality_four', 'Quality four', 'trim|required');
      $this->form_validation->set_rules('quality_five', 'Quality five', 'trim|required');
      $this->form_validation->set_rules('quality_six', 'Quality six', 'trim|required');
      if (!$this->form_validation->run() == FALSE)
      {
        $content = array(
          'about_page_banner_image' => $this->input->post('about_page_banner_image',TRUE),
          'about_page_banner_heading' => $this->input->post('about_page_banner_heading',TRUE),
          'about_page_intro_heading' => $this->input->post('about_page_intro_heading',TRUE),
          'about_page_heading' => $this->input->post('about_page_heading',TRUE),
          'about_page_text' => $this->input->post('about_page_text',TRUE),
          'about_page_right_image' => $this->input->post('about_page_right_image',TRUE),
          'about_page_sec2_heading' => $this->input->post('about_page_sec2_heading',TRUE),
          'about_page_sec2_text' => $this->input->post('about_page_sec2_text',TRUE),
          'about_page_sec2_right_image' => $this->input->post('about_page_sec2_right_image',TRUE),
          'quality_one' => $this->input->post('quality_one',TRUE),
          'quality_two' => $this->input->post('quality_two',TRUE),
          'quality_three' => $this->input->post('quality_three',TRUE),
          'quality_four' => $this->input->post('quality_four',TRUE),
          'quality_five' => $this->input->post('quality_five',TRUE),
          'quality_six' => $this->input->post('quality_six',TRUE),

          
          'about_page_status' => 'enable',
          'updated_by' => '1'
        );    

        $data['where'] = array('about_page_id' => 1);		
        $data['table'] = 'about_page';	
        $this->general->update($data,$content);        
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Updated Successfully.');
        redirect('admin/about_page/index');
      }
      else
      {
        $data['where'] = array('about_page_id' => 1);   
        $data['table'] = 'about_page';  
        $data['output_type'] = 'row'; 
        $content['title'] = 'About Us Page';    
        $content['record']  = $this->general->get($data);
        $content['main_content'] = 'about_page/edit';     
        $this->load->view('admin/inc/view',$content);     
      }
    }

    else
    {        
      $data['where'] = array('about_page_id' => 1);		
      $data['table'] = 'about_page';	
      $data['output_type'] = 'row';	
      $content['title'] = 'About Us Page';		
      $content['record']  = $this->general->get($data);
      $content['main_content'] = 'about_page/edit';			
      $this->load->view('admin/inc/view',$content);   
    }
  }
}

