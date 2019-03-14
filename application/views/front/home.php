<?php if(!empty($homedata)): foreach($homedata as $row): ?>

  <section class="hori-carousel case-study-sec">
   <div class="inner-div animatedParent" style="height: auto;">
    <video autoplay muted loop id="myVideo" style="width: 100%;">
     <source src="<?php echo base_url('assets/front/');?>bg-video.mp4" type="video/mp4">
       Your browser does not support HTML5 video. 
     </video>
     <div class="container">
       <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 banner-text-video">
         <div class="inner-pic text-center banner-text fadeInDown go">
          <h1><?php echo $row->home_page_banner_heading;?><br />
            <?php echo $row->home_page_banner_sub_heading;?>
          </h1>
          <p><?php echo $row->home_page_banner_text;?></p>
          <button class="button">
            <a href="<?php echo $row->home_page_button_link;?>"><?php echo $row->home_page_banner_button_text;?></a>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="inner-div about">
  <div class="overlay1"></div>
  <div class="overlay2">
    <div class="container">
     <div class="row">
      <h2 class="text-center"><?php echo $row->home_page_sec2_heading;?></h2>
    </div>
    <div class="row animatedParent">
      <div class="col-md-6 col-sm-6 col-xs-12">
       <div class="about-text ">
        <p class="animated fadeInDown go"><?php echo $row->home_page_sec2_text;?></p>
        <button class="pull-left button">
          <a href="<?php echo $row->home_page_sec2_button_link;?>"><?php echo $row->home_page_sec2_button_text;?></a>
        </button>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 hidden-xs about-img"> <img src="<?php echo base_url('uploads/home_page/').$row->home_page_sec2_image;?>" style="width: 100%;"> </div>
  </div>
</div>
</div>
</div>
<div class="inner-div choose text-center">
  <div class="container">
   <div class="row">
    <h2><?php echo $row->home_page_sec3_heading;?></h2>
    <p><?php echo $row->home_page_sec3_subheading;?></p>
  </div>
  <div class="row">
    <?php if(!empty($workdata)): foreach($workdata as $work):?>
    <div class="col-md-4 col-sm-4 col-xs-12">
     <div class="service">
      <img src="<?php echo base_url('uploads/work/').$work->work_image;?>">
      <h3><?php echo $work->work_heading?></h3>
      <p><?php echo $work->work_descripition?></p>
      <button class="button2">
        <a href="<?php echo $work->work_button_link?>"><?php echo $work->work_button_text?></a>
      </button>
    </div>
  </div>
<?php endforeach; endif; ?>
</div>
</div>
</div>
<div class="inner-div text-center gallery">
  <div class="container">
   <div class="row">
    <h2><?php echo $row->home_page_sec4_heading;?></h2>
    <!--<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, </p>-->
  </div>
  <div class="margine">
    <div class="row">
     <div class="owl-carousel owl-theme">
      <?php if(!empty($gallerydata)): foreach($gallerydata as $gal): ?>
        <div class="item">
          <a href="<?php echo base_url('uploads/gallery/').$gal->gallery_image;?>" data-fancybox="gallery"><img src="<?php echo base_url('uploads/gallery/').$gal->gallery_image;?>"></a>
        </div>
      <?php endforeach; endif;?>
    </div>
  </div>
</div>
<button class="button clearfix ">
 <a href="<?php echo $row->home_page_sec4_button_link;?>"><?php echo $row->home_page_sec4_button_text;?></a>
</button>
</div>
</div>
<div class="inner-div testimonial">
  <div id="particles-js"></div>
  <div class="container">
   <div class="row text-center">
    <h2><?php echo $row->home_page_sec5_heading;?></h2>
    <p><?php echo $row->home_page_sec5_subheading;?> </p>
  </div>
  <div class="owl-carousel owl-theme">
    <?php if(!empty($testidata)): foreach($testidata as $testi): ?>
    <div class="item">
     <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="testimonial-inner">
       <div class="col-md-2 col-xs-2"> 
        <img src="<?php echo base_url('uploads/testimonials/').$testi->testimonials_image;?>"> 
      </div>
      <div class="col-md-9 col-xs-10">
        <h3><?php echo $testi->testimonials_name;?></h3>
        <p><?php echo $testi->testimonials_text;?></p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="testimonial-inner">
     <div class="col-md-2 col-xs-2"> <img src="<?php echo base_url('uploads/testimonials/').$testi->testimonials_image;?>"> </div>
     <div class="col-md-9 col-xs-10">
      <h3><?php echo $testi->testimonials_name;?></h3>
        <p><?php echo $testi->testimonials_text;?></p>
    </div>
  </div>
</div>
</div>
<?php endforeach; endif; ?>
</div>
</div>
</div>
</section>
<?php endforeach; endif; ?>