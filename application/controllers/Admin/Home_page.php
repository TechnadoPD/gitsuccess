<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends Admin_Controller {
	function __construct() {
		parent::__construct();		
	}  

	public function index(){   
    if($_POST)
    {
      $this->form_validation->set_rules('home_page_banner_heading', 'Banner Heading', 'trim|required');
      $this->form_validation->set_rules('home_page_banner_sub_heading', 'Banner Sub Heading', 'trim|required');
      $this->form_validation->set_rules('home_page_banner_text', 'Banner Text', 'trim|required');
      $this->form_validation->set_rules('home_page_banner_button_text', 'Button Text', 'trim|required');
      $this->form_validation->set_rules('home_page_button_link', 'Button Link', 'trim|required');
      $this->form_validation->set_rules('home_page_sec2_heading', 'Section Two Heading', 'trim|required');
      $this->form_validation->set_rules('home_page_sec2_text', 'Section Two Text', 'trim|required');
      $this->form_validation->set_rules('home_page_sec2_button_text', 'Button Text', 'trim|required');
      $this->form_validation->set_rules('home_page_sec2_button_link', 'Button Link', 'trim|required');
      $this->form_validation->set_rules('home_page_sec3_heading', 'Section Three Heading', 'trim|required');
      $this->form_validation->set_rules('home_page_sec3_subheading', 'Sub Heading', 'trim|required');
      $this->form_validation->set_rules('home_page_sec4_heading', 'Heading', 'trim|required');
      $this->form_validation->set_rules('home_page_sec4_button_text', 'Button Text', 'trim|required');
      $this->form_validation->set_rules('home_page_sec4_button_link', 'Button Link', 'trim|required');
      $this->form_validation->set_rules('home_page_sec5_heading', 'Heading', 'trim|required');
      $this->form_validation->set_rules('home_page_sec5_subheading', 'Sub Heading', 'trim|required');

      if (!$this->form_validation->run() == FALSE)
      {
        $content = array(
          'home_page_banner_heading' => $this->input->post('home_page_banner_heading',TRUE),
          'home_page_banner_sub_heading' => $this->input->post('home_page_banner_sub_heading',TRUE),
          'home_page_banner_text' => $this->input->post('home_page_banner_text',TRUE),
          'home_page_banner_button_text' => $this->input->post('home_page_banner_button_text',TRUE),
          'home_page_button_link' => $this->input->post('home_page_button_link',TRUE),
          'home_page_sec2_heading' => $this->input->post('home_page_sec2_heading',TRUE),
          'home_page_sec2_text' => $this->input->post('home_page_sec2_text',TRUE),
          'home_page_sec2_button_text' => $this->input->post('home_page_sec2_button_text',TRUE),
          'home_page_sec2_button_link' => $this->input->post('home_page_sec2_button_link',TRUE),
          'home_page_sec3_heading' => $this->input->post('home_page_sec3_heading',TRUE),
          'home_page_sec3_subheading' => $this->input->post('home_page_sec3_subheading',TRUE),
          'home_page_sec4_heading' => $this->input->post('home_page_sec4_heading',TRUE),
          'home_page_sec4_button_text' => $this->input->post('home_page_sec4_button_text',TRUE),
          'home_page_sec4_button_link' => $this->input->post('home_page_sec4_button_link',TRUE),
          'home_page_sec5_heading' => $this->input->post('home_page_sec5_heading',TRUE),
          'home_page_sec5_subheading' => $this->input->post('home_page_sec5_subheading',TRUE),
          'home_page_sec5_banner_image' => $this->input->post('home_page_sec5_banner_image',TRUE),
          'home_page_sec4_banner_image' => $this->input->post('home_page_sec4_banner_image',TRUE),
          'home_page_sec3_background_image' => $this->input->post('home_page_sec3_background_image',TRUE),
          'home_page_sec2_background_image' => $this->input->post('home_page_sec2_background_image',TRUE),
          'home_page_sec2_image' => $this->input->post('home_page_sec2_image',TRUE),
          'Home_page_status' => 'enable',
          'updated_by' => '1'
        );     

        $data['where'] = array('home_page_id' => 1);		
        $data['table'] = 'home_page';	
        $this->general->update($data,$content);        
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Updated Successfully.');
        redirect('admin/home_page/index');
      }
      else
      {
        $data['where'] = array('home_page_id' => 1);    
        $data['table'] = 'home_page'; 
        $data['output_type'] = 'row'; 
        $content['title'] = 'Home Page';    
        $content['record']  = $this->general->get($data);
        $content['main_content'] = 'home_page/edit';      
        $this->load->view('admin/inc/view',$content);   
      }
    }
    else
    {        
      $data['where'] = array('home_page_id' => 1);		
      $data['table'] = 'home_page';	
      $data['output_type'] = 'row';	
      $content['title'] = 'Home Page';		
      $content['record']  = $this->general->get($data);
      $content['main_content'] = 'home_page/edit';			
      $this->load->view('admin/inc/view',$content);   
    }
  }
}

