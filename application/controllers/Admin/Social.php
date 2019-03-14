<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social extends Admin_Controller {
    function __construct() {
        parent::__construct();		
    }  

    public function index(){ 	
        $data['table'] = 'social';	
        $data['output_type'] = 'result';	
        $content['title'] = 'Social Links';			
        $content['records']  = $this->general->get($data);
        $content['main_content'] = 'social/list';			
        $this->load->view('admin/inc/view',$content);   
    }

    public function edit($id){ 
        if($_POST){  

            $this->form_validation->set_rules('social_name', 'Name', 'trim|required|min_length[2]|max_length[300]');
            $this->form_validation->set_rules('social_link', 'Link', 'trim|required');
            
            if (!$this->form_validation->run() == FALSE){

                $content = array(
                    'social_name' => $this->input->post('social_name',TRUE),
                    'social_link' => $this->input->post('social_link',TRUE),
                    'social_image' => $this->input->post('social_image',TRUE),
                    'social_status' => 'enable',
                );  

            

                $data['where'] = array('social_id' => $id);       
                $data['table'] = 'social';  
                $this->general->update($data,$content); 
                $this->session->set_flashdata('msg', '1');
                $this->session->set_flashdata('alert_data', 'Updated Successfully.');
                redirect('admin/social');
            }else{
                $data['where'] = array('social_id' => $id);       
                $data['table'] = 'social';  
                $data['output_type'] = 'row';   
                $content['title'] = 'Social';   
                $content['record']  = $this->general->get($data);

                $content['main_content'] = 'social/edit';          
                $this->load->view('admin/inc/view',$content);  
            } 
        }else{        
            $data['where'] = array('social_id' => $id);       
            $data['table'] = 'social';  
            $data['output_type'] = 'row';   
            $content['title'] = 'social';   
            $content['record']  = $this->general->get($data); 

            $content['main_content'] = 'social/edit';          
            $this->load->view('admin/inc/view',$content);  
        } 
    }



}

