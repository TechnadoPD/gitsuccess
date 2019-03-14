<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Front_Controller {
	
	public function index()
	{   
		$data['table'] = "home_page";
		$data['output_type'] = "result";
		$content['homedata'] = $this->general->get($data);

		$data2['table'] = "gallery";
		$data2['output_type'] = "result";
		$data2['limit'] = 10;
		$content['gallerydata'] = $this->general->get($data2);

		$data3['table'] = "testimonials";
		$data3['output_type'] = "result";
		$data3['limit'] = 10;
		$content['testidata'] = $this->general->get($data3);

		$data4['table'] = "work";
		$data4['output_type'] = "result";
		$content['workdata'] = $this->general->get($data4);

		$content['main_content'] = 'home';			
		$this->load->view('front/inc/view',$content);      			
	}
	public function newsletter()
	{
		$content['newsletter_email'] = $this->input->post('newsletter_email',TRUE);
		$exist_email = $this->general->get_single_field('newsletter',array('newsletter_email'=>$this->input->post('newsletter_email',TRUE)),'newsletter_email');
		if ($content['newsletter_email'] == $exist_email) {
			$this->session->set_flashdata('msg', '2');
			$this->session->set_flashdata('alert_data', 'No Email Address Or Already Subscribed');
			redirect();
		}
		else
		{	
			$data['table'] = "newsletter";
			$content['newsletter_email'] = $this->input->post('newsletter_email',TRUE);
			$result = $this->general->insert($data,$content);
			if($result)
			{
				$this->session->set_flashdata('msg', '1');
				$this->session->set_flashdata('alert_data', 'Successfully Subscribed');
				redirect();
			}
			else
			{
				$this->session->set_flashdata('msg', '2');
				$this->session->set_flashdata('alert_data', 'Subscripition Failed');
				redirect();
			}
		}
	}
	
}
