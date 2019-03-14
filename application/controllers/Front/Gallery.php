<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Front_Controller 
{
	
	public function index()
	{     
		$data['table'] = "gallery_page";
		$data['output_type'] = "result";
		$content['gallerydata'] = $this->general->get($data); 

		$data2['table'] = "gallery";
		$data2['output_type'] = "result";
		$data2['limit'] = 50;
		$content['gallery'] = $this->general->get($data2); 

		$content['main_content'] = 'gallery';			
		$this->load->view('front/inc/view',$content);		
	}
}