<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends Front_Controller 
{
	
	public function index()
	{  
		$data['table'] = "contact_page";
		$data['output_type'] = "result";

		$content['contactdata'] = $this->general->get($data);    
		$content['main_content'] = 'contact-us';			
		$this->load->view('front/inc/view',$content);		
	}

	public function booking()
	{
		$this->form_validation->set_rules('booking_name', 'Name', 'required');
		$this->form_validation->set_rules('booking_email', 'Email', 'required');
		$this->form_validation->set_rules('booking_phone', 'Email', 'required');
		$this->form_validation->set_rules('booking_text', 'Phone', 'required');
		
		if (!$this->form_validation->run() == FALSE)
		{
			$content = array(
				'booking_name' => $this->input->post('booking_name',TRUE),
				'booking_email' => $this->input->post('booking_email',TRUE),
				'booking_phone' => $this->input->post('booking_phone',TRUE),
				'booking_text' => $this->input->post('booking_text',TRUE),
				'booking_status' => 'enable',
			); 

			$data['table'] = "booking";
			$this->general->insert($data,$content);
			$this->session->set_flashdata('msg', '1');
			$this->session->set_flashdata('alert_data', 'Thank You! We will Contact You Soon');
			redirect();
		}
		else
		{
			$this->session->set_flashdata('msg', '2');
			$this->session->set_flashdata('alert_data', 'Failed Try Again');
			$error = validation_errors();
			$this->index();
		} 
	}

	public function contact_query()
	{
		$this->form_validation->set_rules('contact_us_name', ' Name', 'required');
		$this->form_validation->set_rules('contact_us_email', ' Email', 'required');
		$this->form_validation->set_rules('contact_us_text', 'Phone', 'required');
		if (!$this->form_validation->run() == FALSE)
		{
			$content = array(
				'contact_us_name' => $this->input->post('contact_us_name',TRUE),
				'contact_us_email' => $this->input->post('contact_us_email',TRUE),
				'contact_us_text' => $this->input->post('contact_us_text',TRUE),

				'contact_us_status' => 'enable',
			); 

			$data['table'] = "contact_us";
			$this->general->insert($data,$content);
			$this->session->set_flashdata('msg', '1');
			$this->session->set_flashdata('alert_data', 'Thank You! We will Contact You Soon');
			redirect();
		}
		else
		{
			$this->session->set_flashdata('msg', '2');
			$this->session->set_flashdata('alert_data', 'Failed Try Again');
			$error = validation_errors();
			$this->index();
		} 
	}
}