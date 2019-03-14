<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_page extends Admin_Controller 
{
	function __construct() 
  {
    parent::__construct();		
  }  

  public function index(){   
    if($_POST)
    {
      $this->form_validation->set_rules('gallery_page_banner_image', 'Section One Heading', 'trim|required');
      $this->form_validation->set_rules('gallery_page_banner_heading', 'Time One Heading', 'trim|required');

      if (!$this->form_validation->run() == FALSE)
      {
        $content = array(
          'gallery_page_banner_image' => $this->input->post('gallery_page_banner_image',TRUE),
          'gallery_page_banner_heading' => $this->input->post('gallery_page_banner_heading',TRUE),

          'gallery_page_status' => 'enable',
          'updated_by' => '1'
        );    

        $data['where'] = array('gallery_page_id' => 1);		
        $data['table'] = 'gallery_page';	
        $this->general->update($data,$content);        
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Updated Successfully.');
        redirect('admin/gallery_page/index');
      }
      else
      {
        $data['where'] = array('gallery_page_id' => 1);		
        $data['table'] = 'gallery_page';	
        $data['output_type'] = 'row';	
        $content['title'] = 'Gallery Page Settings';		
        $content['record']  = $this->general->get($data);
        $content['main_content'] = 'gallery_page/edit';			
        $this->load->view('admin/inc/view',$content);   
      }
    }
    else
    {        
      $data['where'] = array('gallery_page_id' => 1);		
      $data['table'] = 'gallery_page';	
      $data['output_type'] = 'row';	
      $content['title'] = 'Gallery Page';		
      $content['record']  = $this->general->get($data);
      $content['main_content'] = 'gallery_page/edit';			
      $this->load->view('admin/inc/view',$content);   
    }
  }
}

