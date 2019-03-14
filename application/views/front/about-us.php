<?php if(!empty($aboutdata)): foreach($aboutdata as $about): ?>
<section>
 <div style="background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)),url('<?php echo base_url('uploads/about_page/').$about->about_page_banner_image;?>');" class="container-fluid bg-overlay">
  <div class="row text-center">
   <h1 class="inner-pg-head"><?php echo $about->about_page_banner_heading; ?></h1>
 </div>
</div>
<div class="section-full small-device  p-tb80 bg-white bg-bottom-right bg-no-repeat abtsec-img">
  <div class="container">
   <div class="section-content">
    <div class="row">
     <div class="col-md-5 col-sm-12 animatedParent">
      <div class="why-choose-half-section animated pulse">
       <div class="wt-media">
        <img src="<?php echo base_url('uploads/about_page/').$about->about_page_right_image;?>" alt="">
      </div>
    </div>
  </div>
  <div class="col-md-7 col-sm-12">
    <!-- TITLE START -->
    <div class="section-head text-left">
     <h4 class="text-primary text-uppercase wt-title-small font-weight-900"><?php echo $about->about_page_intro_heading; ?></h4>
     <h2 class="text-uppercase font-45 m-b5 font-weight-600"><?php echo $about->about_page_heading; ?></h2>
   </div>
   <!-- TITLE END -->                              
   <div class="wt-box">
     <!--   <h2 class="font-weight-500">Industry is older than modern humans. Over time, the methods used have varied considerably.</h2> -->
     <p><?php echo $about->about_page_text; ?></p>
     <div class="text-left">
      <!--<img src="assets/images/signature.png" alt="signature" class="img-responsive" style="max-width: 250px;">-->
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<div id="choose" class="padding ptb-xs-40 gray-bg">
  <div class="container">
   <div class="row text-center">
    <div class="col-sm-6 col-sm-push-3 mb-30">
     <div class="heading-box pb-15">
      <h2><span><?php echo $about->about_page_sec2_heading; ?> </span></h2>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-lg-6 mt-xs-30">
   <div class="text-content mb-30 mt-sm-30">
    <p>
     <?php echo $about->about_page_sec2_text; ?>
   </p>
 </div>
 <div class="poins">
  <ul>
   <li>
    <i class="fa fa-suitcase" aria-hidden="true"></i><span><?php echo $about->quality_one; ?></span>
  </li>
  <li>
   <i class="fa fa-suitcase" aria-hidden="true"></i><span><?php echo $about->quality_two; ?></span>
 </li>
 <li>
  <i class="fa fa-suitcase" aria-hidden="true"></i><span><?php echo $about->quality_three; ?></span>
</li>
<li>
 <i class="fa fa-suitcase" aria-hidden="true"></i><span><?php echo $about->quality_four; ?></span>
</li>
<li>
 <i class="fa fa-suitcase" aria-hidden="true"></i><span><?php echo $about->quality_five; ?></span>
</li>
<li>
 <i class="fa fa-suitcase" aria-hidden="true"></i><span><?php echo $about->quality_six; ?></span>
</li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-6 text-center choose-img">
 <img src="<?php echo base_url('uploads/about_page/').$about->about_page_sec2_right_image;?>" alt="about-2" class="img-responsive">
</div>

</div>
</div>
</div>
<div class="tam">
 
</div>
</section>
<?php endforeach; endif; ?>