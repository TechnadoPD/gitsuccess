<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
     <a href="<?php echo base_url('customer-dashboard');?>" class="dashboardbtn <?php echo ($this->uri->segment(1) == 'customer-dashboard')?'active':'' ?>">Dashboard</a>
     <a href="<?php echo base_url('customer-account');?>" class="dashboardbtn <?php echo ($this->uri->segment(1) == 'customer-account')?'active':'' ?>">Account Details</a>
     <a href="<?php echo base_url('customer-device-status');?>" class="dashboardbtn <?php echo ($this->uri->segment(1) == 'customer-device-status')?'active':'' ?>">Status Of Your Devices</a>
     <a href="<?php echo base_url('Customer_dashboard/logout');?>" class="dashboardbtn">Log Out</a>
   </div>