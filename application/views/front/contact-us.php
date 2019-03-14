
<?php if(!empty($contactdata)): foreach($contactdata as $data):?>
   <section>
      <div style="background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url('<?php echo base_url("uploads/contact_page/").$data->contact_page_banner_image;?>')" class="container-fluid contact-bg-overlay">
         <div class="row text-center">
            <h1 class="inner-pg-head"><?php echo $data->contact_page_banner_heading?></h1>
         </div>
      </div>
      <div class="section-full p-t80 p-b50">
         <div class="container-fluid">
            <div class="wt-box col-md-6">
               <h4 class="text-uppercase contact-h4"><?php echo $data->contact_page_left_heading?> </h4>
               <div class="wt-separator-outer m-b30">
                  <div class="wt-separator style-square">
                     <span class="separator-left bg-primary"></span>
                     <span class="separator-right bg-primary"></span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-6 m-b30">
                     <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix">
                        <div class="wt-icon-box-sm bg-primary">
                           <span class="icon-cell text-white">
                              <i class="fa fa-phone"></i>
                           </span>
                        </div>
                        <div class="icon-content">
                           <h5 class="wt-tilte text-uppercase">Phone</h5>
                           <a href="tel:<?php echo $this->phone_no; ?>"><?php echo $this->phone_no; ?></a>
                        </div>
                     </div>
                  </div>
                     <div class="col-md-6 col-sm-6 m-b30">
                        <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix">
                           <div class="wt-icon-box-sm bg-primary">
                              <span class="icon-cell text-white">
                                 <i class="fa fa-map-marker"></i>
                              </span>
                           </div>
                           <div class="icon-content">
                              <h5 class="wt-tilte text-uppercase">Address</h5>
                              <p><?php echo $this->address; ?></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-8 col-sm-6 m-b30">
                        <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix">
                           <div class="wt-icon-box-sm bg-primary">
                              <span class="icon-cell text-white">
                                 <i class="fa fa-envelope"></i>
                              </span>
                           </div>
                           <div class="icon-content">
                              <h5 class="wt-tilte text-uppercase">Email</h5>
                              <a href="mailto:<?php echo $this->settings_email; ?> "><?php echo $this->settings_email; ?> </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wt-box col-md-6">
                  <h4 class="text-uppercase"><?php echo $data->contact_page_right_heading?> </h4>
                  <div class="wt-separator-outer m-b30">
                     <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                     </div>
                  </div>
                  <form class="cons-contact-form" method="post" action="<?php echo base_url('contact_us/contact_query');?>">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                 <input name="contact_us_name" type="text" required class="form-control" placeholder="Name">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                 <input name="contact_us_email" type="email" required class="form-control" placeholder="Email">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <div class="input-group">
                                 <span class="input-group-addon v-align-m"><i class="fa fa-pencil-alt"></i></span>
                                 <textarea name="contact_us_text" rows="4" class="form-control Message" required placeholder="Message"></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 text-right">
                           <button type="Submit" class="button">
                              Submit
                           </button>
                           <button class="button">
                             Reset
                           </button>

                        </div>
                     </div>
                     <?php echo form_error('contact_us_name', '<div style="color:red" class="error">', '</div>'); ?>
                     <?php echo form_error('contact_us_email', '<div style="color:red" class="error">', '</div>'); ?>
                     <?php echo form_error('contact_us_text', '<div style="color:red" class="error">', '</div>'); ?>
                  </form>
               </div>
            </div>
         </div>
      </section>
   <?php endforeach; endif; ?>
