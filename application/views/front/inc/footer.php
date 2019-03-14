 <footer>
   <div class="footer">
      <div class="container">
         <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
               <h2><?php echo $this->footer_heading; ?></h2>
               <p><?php echo $this->footer_text; ?></p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
               <h2>Newsletter</h2>
               <p>Stay updates with our latest trends</p>
               <div class="filde">
                  <form method="post" action="<?php echo base_url('home/newsletter');?>">
                     <input type="text" name="newsletter_email" placeholder="Enter Your Email">
                     <button type="submit"><i class="fa fa-arrow-right"></i></button>
                  </form>
               </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
               <h2>Follow us</h2>
               <p>Let us be social</p>
               <ul>
                  <?php if(!empty($this->social)): foreach($this->social as $row):?>
                     <li><a href="<?php echo $row->social_link; ?>"><img src="<?php echo base_url('uploads/social/').$row->social_image;?>" class="img-responsive"></a></li>
                  <?php endforeach; endif; ?>
               </ul>
            </div>
         </div>
      </div>
      <div class="copy">
         <div class="container">
            <p><?php echo $this->footer_tagline; ?></p>
         </div>
      </div>
   </div>
</footer>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script src="<?php echo base_url('assets/front/');?>assets/dist/jquery.fancybox.min.js"></script>
<script src="<?php echo base_url('assets/front/');?>assets/js/css3-animate-it.js"></script>
<script src="<?php echo base_url('assets/front/');?>assets/js/owl.carousel.min.js"></script> 
<script src="<?php echo base_url('assets/front/');?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/front/');?>assets/js/slick.js"></script> 
<script src="<?php echo base_url('assets/front/');?>assets/js/particles.js"></script>
<script src="<?php echo base_url('assets/front/');?>assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/front/');?>assets/js/custom.js"></script>
</body>
</html>