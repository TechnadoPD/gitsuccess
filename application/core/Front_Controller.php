<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_Controller extends CI_Controller 
{
	function __construct() {
		parent::__construct();	   

        $this->settings_site_title = $this->general->get_single_field('settings','','settings_site_title');  
        $this->fav_icon = $this->general->get_single_field('settings','','fav_icon'); 
        $this->settings_email = $this->general->get_single_field('settings','','settings_email');  
        $this->phone_no = $this->general->get_single_field('settings','','phone_no'); 
        $this->header_logo = $this->general->get_single_field('settings','','header_logo');  
        $this->address = $this->general->get_single_field('settings','','address'); 
        $this->settings_email_to = $this->general->get_single_field('settings','','settings_email_to');  
        $this->settings_email_from = $this->general->get_single_field('settings','','settings_email_from');  
        $this->footer_tagline = $this->general->get_single_field('settings','','footer_tagline'); 
        $this->footer_background_image = $this->general->get_single_field('settings','','footer_background_image');  
        $this->footer_heading = $this->general->get_single_field('settings','','footer_heading'); 
        $this->footer_text = $this->general->get_single_field('settings','','footer_text'); 

        $data["table"] = "social";
        $data["output_type"] = "result";
        $this->social = $this->general->get($data);

    }

}
