<!DOCTYPE html>
<html lang="en">
<head>
   <title><?php echo $this->settings_site_title; ?></title>
   <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
   <meta charset="utf-8">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="<?php echo base_url('uploads/settings/').$this->fav_icon;?>" type="image/gif" sizes="16x16">
   <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>assets/css/owl.carousel.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>assets/css/bootstrap.min.css">
   <link rev="stylesheet" href="<?php echo base_url('assets/front/');?>assets/css/animation.css">
   <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/');?>assets/css/style.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >
   <link  href="<?php echo base_url('assets/front/');?>assets/dist/jquery.fancybox.min.css" rel="stylesheet">
   <script  src="<?php echo base_url('assets/front/');?>assets/js/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
   <style type="text/css">

   .hori-carousel .inner-div:nth-child(2){
    z-index: 2;background-size: cover;background:#fff; 
    background-image: url(<?php echo base_url('uploads/home_page/').get_single_field('home_page','','home_page_sec2_background_image');?>);}
   .hori-carousel .inner-div:nth-child(3){
    background: url(<?php echo base_url('uploads/home_page/').get_single_field('home_page','','home_page_sec3_background_image');?>);
    z-index: 3;background-size: cover;padding: 80px 0;}
.hori-carousel .inner-div:nth-child(4){
    background: url(<?php echo base_url('uploads/home_page/').get_single_field('home_page','','home_page_sec4_banner_image');?>);
    z-index: 4;padding: 60px 0;background-size: cover;}
.hori-carousel .inner-div:nth-child(5){
    background: url(<?php echo base_url('uploads/home_page/').get_single_field('home_page','','home_page_sec5_banner_image');?>);
    z-index: 4;padding: 80px 0;background-size: cover;}}
</style>

  <style>
  .toast-top-right{ top:43% !important; right:39% !important;background-color: #20a9d2!important}
  .vl {border-left: 3px solid green;height:100px;}
</style>
</head>
<body>
  <?php if($this->session->flashdata('msg') == 1):?>
    <script>toastr.success('<?php echo $this->session->flashdata('alert_data')?>');</script>
    <?php elseif($this->session->flashdata('msg') == 2):?>
      <script>toastr.error('<?php echo $this->session->flashdata('alert_data')?>');</script>
      <?php endif;?>
   <header>
      <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <h3 class="modal-h3">Book an apartment here or on <span class="modal-hanson">Hanson Republic</span></h3>
                  <form method="post" action="<?php echo base_url('contact_us/booking');?>">
                     <div class="form-group">
                        <input type="text" class="form-control book-form" required placeholder="Enter Name" name="booking_name">
                        <?php echo form_error('booking_name', '<div style="color:red" class="error">', '</div>'); ?>
                     </div>
                     <div class="form-group">
                        <input type="email" class="form-control book-form" required placeholder="Enter Email" name="booking_email">
                        <?php echo form_error('booking_email', '<div style="color:red" class="error">', '</div>'); ?>
                     </div>
                     <div class="form-group">
                        <input type="number" class="form-control book-form" required placeholder="Enter Phone" name="booking_phone">
                        <?php echo form_error('booking_phone', '<div style="color:red" class="error">', '</div>'); ?>
                     </div>
                     <div class="form-group"></div>
                     <textarea class="form-control book-form" rows="5" name="booking_text" required placeholder="Enter Message"></textarea>
                     <?php echo form_error('booking_text', '<div style="color:red" class="error">', '</div>'); ?>
                  </div>
                  <div class="bok-btn text-center">
                     <button class="book-btn-md">BOOK</button>
                 </div>
              </form>
           </div>
        </div>
     </div>
  </div>
  <nav>
   <div class="container">
      <div class="col-md-3 col-xs-12 text-center"><a href="index.html"><img src="<?php echo base_url('uploads/settings/').$this->header_logo;?>" class="logo"></a></div>
      <div id="google_translate_element"></div>
      <div class="col-md-9">
         <div class="row top-bar">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
               <h4> Email us: <a href="mailto:construction@hansonrepublicllc.com "><?php echo $this->settings_email; ?></a> </h4>
            </div>
            <div class="col-md-3 col-xs-8">
               <h4> Call Us <a href="tel:+516-402-2086"><?php echo $this->phone_no; ?></a> </h4>
            </div>
         </div>
         <div class="visible-xs col-xs-2">
            <h3 class="menu-toggle">☰</h3>
         </div>
         <div class="nav-bar-cont nav-inline">
            <ul class="no-margin">
               <li><a href="<?php echo base_url('');?>" class="<?php echo ($this->uri->segment(1) == "")? "active-a":"";?>">Home</a></li>
               <li><a href="<?php echo base_url('about-us');?>"  class="<?php echo ($this->uri->segment(1) == "about-us")? "active-a":"";?>">About Us</a></li>
               <li><a href="<?php echo base_url('services');?>"  class="<?php echo ($this->uri->segment(1) == "services")? "active-a":"";?>">Services</a></li>
               <li><a href="<?php echo base_url('gallery');?>"  class="<?php echo ($this->uri->segment(1) == "gallery")? "active-a":"";?>">Gallery</a></li>
               <li><a href="<?php echo base_url('contact-us');?>"  class="<?php echo ($this->uri->segment(1) == "contact-us")? "active-a":"";?>">Contact Us</a></li>
            </ul>
         </div>
         <button class="book-btn" data-toggle="modal" data-target="#myModal">
            <a href="#">Book Now</a>
         </button>
      </div>
   </div>
</nav>
</header>