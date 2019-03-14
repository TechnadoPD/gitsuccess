<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller{
	
	public function index()
	{	
		$content['main_content'] = 'dashboard/dashboard';			
		$this->load->view('admin/inc/view',$content);
	}

	public function profile_update()
	{	
		$data['table'] = "master_admin";
		$data['output_type'] = 'row';
		$data['where'] = array('master_admin_id' =>1);
		$content['record'] = $this->general->get($data);
		$content['main_content'] = 'dashboard/profile-update';			
		$this->load->view('admin/inc/view',$content);
	}

	public function update_profile()
	{
		$this->form_validation->set_rules('master_admin_bussniess', 'bussniess', 'trim');
		if(!$this->form_validation->run() == FALSE)
		{
			$content = array(
				'master_admin_bussniess' => $this->input->post('master_admin_bussniess',TRUE),
				'master_admin_name' => $this->input->post('master_admin_name',TRUE),
				'master_admin_email' => $this->input->post('master_admin_email',TRUE),
				'master_admin_address' => $this->input->post('master_admin_address',TRUE),
				'master_admin_image' => $this->input->post('master_admin_image',TRUE),

				'master_admin_status' => 'enable',
				'master_admin_updated_by' => '1');   

			 

			$data['where'] = array('master_admin_id' => 1);     
			$data['table'] = 'master_admin';    
			$this->general->update($data,$content);        
			$this->session->set_flashdata('msg', '1');
			$this->session->set_flashdata('alert_data', 'Admin Data Updated');
			redirect($_SERVER['HTTP_REFERER']);
		}

	}

	public function update_password()
	{
		$this->form_validation->set_rules('new_password', 'New Password', 'trim|min_length[3]|max_length[25]');
		$this->form_validation->set_rules('cnf_password', 'Confirm Password', 'trim|matches[new_password]');
		if (!$this->form_validation->run() == FALSE){
			$content = array(
				'master_admin_status' => 'enable',
				'master_admin_updated_by' => '1'
			);  
			if($this->input->post('cnf_password',TRUE)){
				$content['master_admin_password'] = $this->encryption->encrpyt($this->input->post('cnf_password'));
			}  

			$data['where'] = array('master_admin_id' => 1);		
			$data['table'] = 'master_admin';	
			$this->general->update($data,$content);        
			$this->session->set_flashdata('msg', '1');
			$this->session->set_flashdata('alert_data', 'Password Updated');
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			$this->session->set_flashdata('msg', '2');
			$this->session->set_flashdata('alert_data', 'Password Update Failed');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
