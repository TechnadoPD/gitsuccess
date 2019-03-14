<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Admin_Controller {
	function __construct() {
		parent::__construct();		
	}  

	public function general(){   
    if($_POST){
      $this->form_validation->set_rules('settings_site_title', 'Site Title', 'trim|required|min_length[3]|max_length[20]');
      $this->form_validation->set_rules('settings_email', 'Email address', 'trim|required|valid_email');
      $this->form_validation->set_rules('settings_email_to', 'Email Address From', 'trim|required|valid_email');
      $this->form_validation->set_rules('settings_email_from', 'Email address To', 'trim|required|valid_email');
      $this->form_validation->set_rules('phone_no', 'Phone Number', 'trim|required');

      if (!$this->form_validation->run() == FALSE){
        $content = array(
          'settings_site_title' => $this->input->post('settings_site_title',TRUE),
          'settings_email' => $this->input->post('settings_email',TRUE),
          'footer_background_image' => $this->input->post('footer_background_image',TRUE),
          'header_logo' => $this->input->post('header_logo',TRUE),
          'fav_icon' => $this->input->post('fav_icon',TRUE),
          'settings_email_to' => $this->input->post('settings_email_to',TRUE),
          'settings_email_from' => $this->input->post('settings_email_from',TRUE),
          'phone_no' => $this->input->post('phone_no',TRUE),
          'address' => $this->input->post('address',TRUE),
          'footer_heading' => $this->input->post('footer_heading',TRUE),
          'footer_text' => $this->input->post('footer_text',TRUE),
          'footer_tagline' => $this->input->post('footer_tagline',TRUE),
          'settings_status' => 'enable',
          'updated_by' => '1'
        );    
  
        $data['where'] = array('settings_id' => 1);		
        $data['table'] = 'settings';	
        $this->general->update($data,$content);        
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Updated Successfully.');
        redirect('admin/settings/general');
      }
      else{
        $data['where'] = array('settings_id' => 1);		
        $data['table'] = 'settings';	
        $data['output_type'] = 'row';	
        $content['title'] = 'General Settings';		
        $content['record']  = $this->general->get($data);
        $content['main_content'] = 'settings/general';			
        $this->load->view('admin/inc/view',$content);   
      }
    }
    else{        
      $data['where'] = array('settings_id' => 1);		
      $data['table'] = 'settings';	
      $data['output_type'] = 'row';	
      $content['title'] = 'General Settings';		
      $content['record']  = $this->general->get($data);
      $content['main_content'] = 'settings/general';			
      $this->load->view('admin/inc/view',$content);   
    }
  }
   public function photo_delete()
  {
    if (!unlink($_POST['photolink']))
    {
      echo 2;
    }
    else
    {
      echo 1;
    }
    
  }

  public function photo_upload()
  {
    if(!empty($_FILES['image']))
    {
      $image = single_image_upload($_FILES['image'],"./uploads/".$_POST['imagepath']);
      echo json_encode($image);
    }
    else
    {
      echo 2;
    }
  }
}

