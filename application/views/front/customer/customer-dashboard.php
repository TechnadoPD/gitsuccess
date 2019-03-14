<main>
    <div class="main2"></div>
<div id="content">
  <div id="fixed-barrier"></div>
  <div class="padding-0 clearfix" data-ref="mixitup-container">
    <div class="">
      <div class="dashBoard">
       <div class="">
         <?php $this->load->view('front/customer/side-nav');?>
         <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
          <h2 class="text-left dashBoardH4">My Dashboard</h2>
          <div class="col-md-6">
            <div class="box">
              <?php if(!empty($records)): foreach($records as $record):?>
                <div class="box-title">
                  <h3 class="display-inline-block">Account Details</h3>
                  <a href="<?php echo base_url('customer-account');?>" class="pull-right"> <i class="fa fa-edit"></i></a>
                </div>
                <div class="box-content">
                 <p class="no-margin-bottom margin-five"><?php echo $record['customers_name'];?></p>
                 <p><?php echo $record['customers_email'];?></p>
                 <a class="pass-link" href="<?php echo base_url('customer-account');?>">Change Password</a>
               </div>
             <?php endforeach; endif; ?>
           </div>
         </div>
         <div class="col-md-6">
          <div class="box">
            <div class="box-title">
              <h3 class="display-inline-block">Devices History</h3>
              <a href="<?php echo base_url('customer-device-status');?>" class="pull-right"><i class="fa fa-eye"></i></a>
            </div>
            <div class="box-content">
             <p>View All <span class="font-weight-700"></span></p>   
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div> 
<div class="clearfix"></div>
</div>
</main>