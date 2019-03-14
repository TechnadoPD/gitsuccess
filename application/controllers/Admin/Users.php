<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin_Controller{
	function __construct() {
		parent::__construct();	
		if(!in_array('User Management',$this->user_roles)){
      redirect('admin');
    }  
	}
  
	public function index()
	{	
		$content['main_content'] = 'users/list';			
		$this->load->view('admin/inc/view',$content);
	}
	
}
