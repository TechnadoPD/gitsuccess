
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Admin_Controller {
    function __construct() {
        parent::__construct();		
    }  

    public function index(){ 	
        $data['table'] = 'services';	
        $data['output_type'] = 'result';	
        $content['title'] = 'Services';			
        $content['records']  = $this->general->get($data);
        $content['main_content'] = 'services/list';			
        $this->load->view('admin/inc/view',$content);   
    } 

    public function add()
    {
        if($_POST)
        {  
            $this->form_validation->set_rules('services_heading', 'Services Heading', 'required');
            $this->form_validation->set_rules('services_text', 'Services Text', 'required');
            $this->form_validation->set_rules('services_image', 'Services Image', 'required');
            if (!$this->form_validation->run() == FALSE)
            {

                $content = array(
                    'services_heading' => $this->input->post('services_heading',TRUE),
                    'services_text' => $this->input->post('services_text',TRUE),
                    'services_image' => $this->input->post('services_image',TRUE),

                    'created_by' => 1,
                    'services_status' => 'enable',
                );  

                $data['table'] = 'services';  
                $this->general->insert($data,$content);

                $this->session->set_flashdata('msg', '1');
                $this->session->set_flashdata('alert_data', 'Added Successfully.');
                redirect('admin/services');
            }
            else
            {
                $this->session->set_flashdata('msg', '2');
                $this->session->set_flashdata('alert_data', 'Add Failed.');
                $error = validation_errors();
                $content['main_content'] = 'services/add';          
                $this->load->view('admin/inc/view',$content);  
            } 
        }
        else
        { 
            $content['title'] = 'Services'; 
            $content['main_content'] = 'services/add';          
            $this->load->view('admin/inc/view',$content);  
        }
    }

    public function edit($id){ 
        if($_POST)
        {  
            $this->form_validation->set_rules('services_heading', 'Services Heading', 'required');
            $this->form_validation->set_rules('services_text', 'Services Text', 'required');
            $this->form_validation->set_rules('services_image', 'Services Image', 'required');

            if (!$this->form_validation->run() == FALSE)
            {

                $content = array(
                    'services_heading' => $this->input->post('services_heading',TRUE),
                    'services_text' => $this->input->post('services_text',TRUE),
                    'services_image' => $this->input->post('services_image',TRUE),


                    'services_status' => 'enable',
                    'updated_by' => '1'
                );

                $data['where'] = array('services_id' => $id);
                $data['table'] = 'services';  
                $this->general->update($data,$content); 

                $this->session->set_flashdata('msg', '1');
                $this->session->set_flashdata('alert_data', 'Updated Successfully.');
                redirect('admin/services');
            }
            else
            {        
                $data['where'] = array('services_id' => $id);  
                $data['table'] = 'services'; 
                $data['output_type'] = 'row';   
                $content['title'] = 'Services';   
                $content['record']  = $this->general->get($data);

                
                $this->session->set_flashdata('msg', '2');
                $this->session->set_flashdata('alert_data', 'Failed.');
                $error = validation_errors();
                $content['main_content'] = 'services/edit';           
                $this->load->view('admin/inc/view',$content); 
            } 
        }
        else
        {        

            $data['where'] = array('services_id' => $id);  
            $data['table'] = 'services';
            $data['output_type'] = 'row'; 
            $content['record']  = $this->general->get($data);

            $content['title'] = 'Services';   
            $content['main_content'] = 'services/edit';           
            $this->load->view('admin/inc/view',$content);   
        } 
    }

    public function delete($id)
    {
        $content = array(
            'services_status' => 'disable',
        );    
        $data['where'] = array('services_id' => $id);       
        $data['table'] = 'services';  
        $this->general->update($data,$content); 
        $this->session->set_flashdata('msg', '1');
        $this->session->set_flashdata('alert_data', 'Deleted Successfully.');
        redirect('admin/services');
    }

}

