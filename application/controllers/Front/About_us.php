<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends Front_Controller 
{
	
	public function index()
	{   
		$data['table'] = "about_page";
		$data['output_type'] = "result";

		$content['aboutdata'] = $this->general->get($data);

		$content['main_content'] = 'about-us';			
		$this->load->view('front/inc/view',$content);		
	}
}