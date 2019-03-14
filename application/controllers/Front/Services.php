<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Front_Controller 
{
	
	public function index()
	{     
		$data['table'] = "service_page";
		$data['output_type'] = "result";
		$content['servicedata'] = $this->general->get($data); 

		$data2['table'] = "services";
		$data2['output_type'] = "result";
		$data2['limit'] = 50;
		$content['services'] = $this->general->get($data2); 

		$content['main_content'] = 'services';			
		$this->load->view('front/inc/view',$content);		
	}
}