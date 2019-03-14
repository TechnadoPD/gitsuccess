<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$link = explode('/',(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
if($link[4] == 'admin'){  

  $this->set_directory( "Admin" );

  $request = $this->uri->segment(2);
  if(!empty($request) && strpos($request,'-'))
  { 
    $route['admin/'.$request.''] = str_replace('-','_',$request);
    $route['admin/'.$request.'/(:any)'] = str_replace('-','_',$request).'/$1';
    $route['admin/'.$request.'/(:any)/(:any)'] = str_replace('-','_',$request).'/$1/$2';
  }
  $route['admin/logout'] = 'login/logout'; 
  $route['admin/forgot-password'] = 'login/forgot_password'; 
  $route['admin/reset-password/(:any)'] = 'login/reset_password/$1';
  $route['admin/(:any)'] = '$1'; 
  $route['admin/(:any)/(:any)'] = '$1/$2'; 
  $route['admin/(:any)/(:any)/(:any)'] = '$1/$2/$3'; 
  $route['admin/(:any)/(:any)/(:any)/(:any)'] = '$1/$2/$3/$4'; 
  $route['admin'] = 'dashboard/index';
  $route['default_controller'] = 'front';
  $route['404_override'] = '';
  $route['translate_uri_dashes'] = FALSE;
}else{ 
  $this->set_directory( "Front" );

  $route['about-us'] = 'about_us/index';
  $route['contact-us'] = 'contact_us/index';
  $route['gallery'] = 'gallery/index';
  $route['services'] = 'services/index';

  
  //-----------------------------------------------------Defaults-----------------------------------------------------------------
  $route['default_controller'] = 'home';
  $route['404_override'] = '';
  $route['translate_uri_dashes'] = FALSE;
}






