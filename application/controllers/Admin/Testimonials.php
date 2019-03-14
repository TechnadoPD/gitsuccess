<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends Admin_Controller {
    function __construct() {
        parent::__construct();      
    }  

    public function index(){    
        $data['table'] = 'testimonials'; 
        $data['output_type'] = 'result';    
        $content['title'] = 'Testimonials';          
        $content['records']  = $this->general->get($data);
        $content['main_content'] = 'testimonials/list';          
        $this->load->view('admin/inc/view',$content);   
    } 

    public function add()
    {

       if($_POST)
       {  
        $this->form_validation->set_rules('testimonials_name', 'Testimonial Name', 'required');
        $this->form_validation->set_rules('testimonials_text', 'Testimonial Descripition', 'required');
        $this->form_validation->set_rules('testimonials_image', 'Testimonial Iamge', 'required');
        if (!$this->form_validation->run() == FALSE)
        {

            $content = array(
                'testimonials_name' => $this->input->post('testimonials_name',TRUE),
                'testimonials_text' => $this->input->post('testimonials_text',TRUE),
                'testimonials_image' => $this->input->post('testimonials_image',TRUE),

                'testimonials_created_by' => 1,
                'testimonials_status' => 'enable',
            );  
 

        $data['table'] = 'testimonials';  
        $this->general->insert($data,$content);

        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Added Successfully.');
        redirect('admin/testimonials');
    }
    else
    {
        $this->session->set_flashdata('msg', '2');
        $this->session->set_flashdata('alert_data', 'Add Failed.');
        $error = validation_errors();
        $content['main_content'] = 'testimonials/add';          
        $this->load->view('admin/inc/view',$content); 
    } 
}
else
{ 
    $content['title'] = 'Testimonials';
    $content['main_content'] = 'testimonials/add';          
    $this->load->view('admin/inc/view',$content); 
}
}

public function edit($id){ 
    if($_POST)
    {  
        $this->form_validation->set_rules('testimonials_name', 'Testimonial Name', 'required');
        $this->form_validation->set_rules('testimonials_text', 'Testimonial Descripition', 'required');
        $this->form_validation->set_rules('testimonials_image', 'Testimonial Iamge', 'required');
        if (!$this->form_validation->run() == FALSE)
        {

            $content = array(
                'testimonials_name' => $this->input->post('testimonials_name',TRUE),
                'testimonials_text' => $this->input->post('testimonials_text',TRUE),
                'testimonials_image' => $this->input->post('testimonials_image',TRUE),

                'testimonials_updated_by' => 1,
                'testimonials_status' => 'enable',
            );  

            $data['where'] = array('testimonials_id' => $id);
            $data['table'] = 'testimonials';  
            $this->general->update($data,$content); 

            $this->session->set_flashdata('msg', '1');
            $this->session->set_flashdata('alert_data', 'Updated Successfully.');
            redirect('admin/testimonials');
        }
        else
        {        
            $data['where'] = array('testimonials_id' => $id);  
            $data['table'] = 'testimonials';
            $data['output_type'] = 'row'; 
            $content['title'] = 'Testimonials';  
            $content['record']  = $this->general->get($data);

            $this->session->set_flashdata('msg', '2');
            $this->session->set_flashdata('alert_data', 'Failed.');
            $error = validation_errors();
            $content['main_content'] = 'testimonials/edit';           
            $this->load->view('admin/inc/view',$content); 
        } 
    }
    else
    {   

        $data['where'] = array('testimonials_id' => $id);  
        $data['table'] = 'testimonials';
        $data['output_type'] = 'row'; 
        $content['record']  = $this->general->get($data);

        $content['title'] = 'Testimonials';   
        $content['main_content'] = 'testimonials/edit';           
        $this->load->view('admin/inc/view',$content);   
    } 
}

public function delete($id)
{
    $content = array(
        'testimonials_status' => 'disable',
    );    
    $data['where'] = array('testimonials_id' => $id);       
    $data['table'] = 'testimonials';  
    $this->general->update($data,$content); 
    $this->session->set_flashdata('msg', '1');
    $this->session->set_flashdata('alert_data', 'Deleted Successfully.');
    redirect('admin/testimonials');
}

}

