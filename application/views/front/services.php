<section>
   <?php if(!empty($servicedata)): foreach($servicedata as $data):?>
      <div style="background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url('<?php echo base_url("uploads/service_page/").$data->service_page_banner_image;?>')" class="container-fluid services-bg-overlay">
         <div class="row text-center">
            <h1 class="inner-pg-head"><?php echo $data->service_page_banner_heading ?></h1>
         </div>
      </div>
   <?php endforeach; endif; ?>
   <div class="service-head">
      <div class="container">
         <div class="section-head text-center service-h4">
            <h4 class="text-primary text-uppercase wt-title-small font-weight-900"><?php echo $data->service_page_intro_heading ?></h4>
            <h2 class="text-uppercase font-45 m-b5 font-weight-600"><?php echo $data->service_page_heading ?></h2>
         </div>
      </div>
   </div>
   <div id="services-section" class="ptb-xs-40">
      <div class="container">
         <div class="row">
            <?php if(!empty($services)): foreach($services as $row):?>
               <div class="col-lg-6 mb-sm-30 mb-xs-30 mb-30">
                  <div class="sevice-box img-scale">
                     <figure>
                        <img src="<?php echo base_url("uploads/services/").$row->services_image;?>" alt="serv-1" class="img-responsive">
                     </figure>
                     <div class="service-text">
                        <h3><a href="#!"><?php echo $row->services_heading?></a></h3>
                        <div class="wt-separator-outer mb-10">
                           <div class="wt-separator style-square">
                              <span class="separator-left bg-primary"></span>
                              <span class="separator-right bg-primary"></span>
                           </div>
                        </div>
                        <p><?php echo $row->services_text?></p>
                     </div>
                  </div>
               </div>
            <?php endforeach; endif; ?>

         </div>
      </div>
   </div>
</section>
