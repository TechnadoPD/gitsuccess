<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends Admin_Controller {
    function __construct() {
        parent::__construct();		
    }  

    public function index(){ 	
        $data['table'] = 'work';	
        $data['output_type'] = 'result';	
        $content['title'] = 'What we do';			
        $content['records']  = $this->general->get($data);
        $content['main_content'] = 'work/list';			
        $this->load->view('admin/inc/view',$content);   
    }

    public function edit($id){ 
        if($_POST){  
            $this->form_validation->set_rules('work_heading', 'Link', 'trim|required');
            $this->form_validation->set_rules('work_descripition', 'Link', 'trim|required');
            $this->form_validation->set_rules('work_button_text', 'Link', 'trim|required');
            $this->form_validation->set_rules('work_button_link', 'Link', 'trim|required');
            $this->form_validation->set_rules('work_image', 'Link', 'trim|required');
            if (!$this->form_validation->run() == FALSE){
                $content = array(
                    'work_heading' => $this->input->post('work_heading',TRUE),
                    'work_descripition' => $this->input->post('work_descripition',TRUE),
                    'work_button_text' => $this->input->post('work_button_text',TRUE),
                    'work_button_link' => $this->input->post('work_button_link',TRUE),
                    'work_image' => $this->input->post('work_image',TRUE),
                    'work_status' => 'enable',
                );  

                $data['where'] = array('work_id' => $id);       
                $data['table'] = 'work';  
                $this->general->update($data,$content); 
                $this->session->set_flashdata('msg', '1');
                $this->session->set_flashdata('alert_data', 'Updated Successfully.');
                redirect('admin/work');
            }else{
                $data['where'] = array('work_id' => $id);       
                $data['table'] = 'work';  
                $data['output_type'] = 'row';   
                $content['title'] = 'What We Do';   
                $content['record']  = $this->general->get($data);

                $content['main_content'] = 'work/edit';          
                $this->load->view('admin/inc/view',$content);  
            } 
        }else{        
            $data['where'] = array('work_id' => $id);       
            $data['table'] = 'work';  
            $data['output_type'] = 'row';   
            $content['title'] = 'What We Do';   
            $content['record']  = $this->general->get($data); 

            $content['main_content'] = 'work/edit';          
            $this->load->view('admin/inc/view',$content);  
        } 
    }



}

