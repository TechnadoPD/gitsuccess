<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();	
		if(!$this->session->userdata('master_admin_id')){		
			$this->uri->segment(2)=='login'||$this->uri->segment(2)=='forgot-password'||$this->uri->segment(2)=='reset-password'?'':redirect('admin/login');
		}   
		$this->header_logo = $this->general->get_single_field('settings','','header_logo');  
		$this->fav_icon = $this->general->get_single_field('settings','','fav_icon'); 
        $this->address = $this->general->get_single_field('settings','','address'); 
        $this->settings_site_title = $this->general->get_single_field('settings','','settings_site_title');  
        $this->settings_email_to = $this->general->get_single_field('settings','','settings_email_to');  
        $this->footer_tagline = $this->general->get_single_field('settings','','footer_tagline'); 
        $this->phone_no = $this->general->get_single_field('settings','','phone_no');   
        $this->settings_email = $this->general->get_single_field('settings','','settings_email');     
	 	$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
		
		$data['table'] = "contact_us";
		$data['where'] = array('contact_us_viewstatus' => 'unread');
		$this->count = count($this->general->get($data));

		$data['table'] = "booking";
		$data['where'] = array('booking_viewstatus' => 'unread');
		$this->bookingcount = count($this->general->get($data));


		
		//-------------------------------------------------------------------------------------------------------
		//------------- DEVELOPER SIDE CHANGES NO NEED TO TOUCH THIS PART WITHOUT PERMISSION --------------------
		//-------------------------------------------------------------------------------------------------------

		$this->sideimage = $this->general->get_single_field('developer','','developer_nav_image');  
        $this->contentimage = $this->general->get_single_field('developer','','developer_content_image'); 
        $this->gradientcolor = $this->general->get_single_field('developer','','developer_nav_gradient');   
        $this->layercolor = $this->general->get_single_field('developer','','developer_nav_color');
        $this->loginback = $this->general->get_single_field('developer','','developer_login_background');  
	} 
}
