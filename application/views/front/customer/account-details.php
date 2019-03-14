<main>
    <div class="main2"></div>
<div id="content">
  <div id="fixed-barrier"></div>

    <div  class="">

      <?php if(!empty($records)): foreach($records as $record):?>
        <div class="clearfix"></div>
        <div class="dashBoard">
         <div class="">
           <?php $this->load->view('front/customer/side-nav');?>
           <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
            <h2 class="text-left dashBoardH4">My Account Details</h2>
            <div class="mainForm">
             <form method="post" action="<?php echo base_url('customer_dashboard/update_user');?>" enctype="multipart/form-data">
              <div class="col-xs-12 col-sm-6 dashboardform">
                <div class="col-xs-12 col-sm-12 margin-bottom-5"><h4>Account Information</h4></div>
                <div class="col-xs-12 col-sm-12">

                  <label>Your Name</label>
                  <input type="text" name="customers_name" value="<?php echo $record['customers_name'];?>" placeholder="Enter Your Name">
                  <?php echo form_error('customers_name', '<div style="color:red" class="error">', '</div>'); ?>
                </div>
                <div class="col-xs-12 col-sm-12">

                  <label>Email Address</label>
                  <input type="text" name="customers_email" value="<?php echo $record['customers_email'];?>" placeholder="Enter Your Email">
                  <?php echo form_error('customers_email', '<div style="color:red" class="error">', '</div>'); ?>
                </div>

                <div class="col-xs-12 col-sm-12">
                  <label>Phone Number</label>
                  <input type="text" name="customers_phone" value="<?php echo $record['customers_phone'];?>" placeholder="Enter Your Phone Number">
                  <?php echo form_error('customers_phone', '<div style="color:red" class="error">', '</div>'); ?>
                </div>

                <div class="col-xs-12 col-sm-12">
                  <label>Your Address</label>
                  <input type="text" name="customers_address" value="<?php echo $record['customers_address'];?>" placeholder="Enter Your Address">
                  <?php echo form_error('customers_address', '<div style="color:red" class="error">', '</div>'); ?>
                </div>

                <div class="form-group">
                  <div class="col-lg-12">
                    <label>User Image:</label>
                  </div>
                  <div class="input-group-btn">
                    <div class="image-upload">                      
                      <div style="background-color:#0000;" class="file-btn">
                        <label class="btn dashboardbtn" for="customers_image">Upload</label>
                        <input style="display:none" type="file" id="customers_image" name="customers_image">
                        <input type="text" id="customers_image" name="customers_image" value="<?php echo !empty($record['customers_image'])?$record['customers_image']:''?>" hidden>
                      </div>
                      <img style="max-width: 200px;" src="<?php echo !empty($record['customers_image'])?base_url('uploads/customers/').$record['customers_image']:base_url('assets/img/placeholder.png')?>">
                    </div>
                  </div>
                  <?php echo form_error('customers_image'); ?>                
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 text-center">
                  <button type="submit" class="dashboardbtn2">Update Your Details</button>
                </div>
              </div>
            </form>

            <form method="post" action="<?php echo base_url('customer_dashboard/update_user_password');?>">
              <div class="col-xs-12 col-sm-6">
                <div class="col-xs-12 col-sm-12 margin-bottom-5"><h4>Set New Password</h4></div>

                <div class="col-xs-12 col-sm-12">
                  <label>Current Password</label>
                  <input type="password" name="current_customers_password" placeholder="Enter Your Current Password">
                </div>

                <div class="col-xs-12 col-sm-12">
                  <label>New Password</label>
                  <input type="password" name="customers_password" placeholder="Enter Your New Password">
                </div>

                <div class="col-xs-12 col-sm-12">
                  <label>Confirm Password</label>
                  <input type="password" name="customers_confirm_password" placeholder="Confirm Your New Password">
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 text-center">
                  <button type="submit" class="dashboardbtn2">Update Password</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; endif; ?>

</div>
</div> 
<div class="clearfix"></div>

</div>
</main>