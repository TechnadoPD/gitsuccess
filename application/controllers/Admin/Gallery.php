<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Admin_Controller {
    function __construct() {
        parent::__construct();		
    }  

    public function index()
    { 	
        $data['table'] = 'gallery';	
        $data['output_type'] = 'result';	
        $content['title'] = 'Gallery';			
        $content['records']  = $this->general->get($data);
        $content['main_content'] = 'gallery/list';			
        $this->load->view('admin/inc/view',$content);   
    } 

    public function add()
    {
        if($_POST)
        {  
            $content = array(
                'gallery_image' => $this->input->post('gallery_image'),
                'gallery_created_by' => 1,
                'gallery_status' => 'enable',
            );

            if(!empty($this->input->post('gallery_image')))
            {
                $data['table'] = 'gallery';  
                $this->general->insert($data,$content);

                $this->session->set_flashdata('msg', '1');
                $this->session->set_flashdata('alert_data', 'Gallery Image Added');
                redirect('admin/gallery');

            }
            else
            {
                $this->session->set_flashdata('msg', '2');
                $this->session->set_flashdata('alert_data', 'Image Required');
                redirect('admin/gallery');
            }
            
        }
        else
        {       
            $content['main_content'] = 'gallery/add';          
            $this->load->view('admin/inc/view',$content);  
        }
    }

    public function edit($id){ 
        if($_POST)
        {  
            $content = array(
                'gallery_image' => $this->input->post('gallery_image'),
                'gallery_status' => 'enable',
                'gallery_updated_by' => '1'
            );
            if(!empty($this->input->post('gallery_image')))
            {

                $data['where'] = array('gallery_id' => $id);
                $data['table'] = 'gallery';  
                $this->general->update($data,$content); 

                $this->session->set_flashdata('msg', '1');
                $this->session->set_flashdata('alert_data', 'Gallery Image Updated');
                redirect('admin/gallery');
            }
            else
            {
                $this->session->set_flashdata('msg', '2');
                $this->session->set_flashdata('alert_data', 'No image Selected');
                redirect('admin/gallery');
            }
        }
        else
        {        
           $data['table'] = 'gallery';    
           $data['output_type'] = 'row';  
           $data['where'] = array('gallery_id' => $id);  
           $content['title'] = 'Gallery';          
           $content['record']  = $this->general->get($data);
           $content['title'] = 'Gallery Update';   
           $content['main_content'] = 'gallery/edit';           
           $this->load->view('admin/inc/view',$content);   
       } 
   }

   public function delete($id)
   {
    $content = array(
        'gallery_status' => 'disable',
    );    
    $data['where'] = array('gallery_id' => $id);       
    $data['table'] = 'gallery';  
    $this->general->update($data,$content); 
    $this->session->set_flashdata('msg', '1');
    $this->session->set_flashdata('alert_data', 'Deleted Successfully.');
    redirect('admin/gallery');
}
}