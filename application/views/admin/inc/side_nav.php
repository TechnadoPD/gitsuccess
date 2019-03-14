<div class="sidebar" data-color="purple" data-image="<?php echo base_url('uploads/developer/').$this->sideimage;?>">
    <style>
        .sidebar:after {background: linear-gradient(to bottom, <?php echo $this->layercolor;?> 0%, <?php echo $this->gradientcolor;?> 133%) !important;}
    </style>
    <div class="sidebar-wrapper">
        <div class="logo"><a href="#" class="simple-text"><img style="max-width:200px;" class="img-responsive" src="<?php echo base_url('uploads/settings/').$this->header_logo;?>"></a></div>
        <ul class="nav">
            <li class="active"><a href="<?php echo base_url('admin');?>"><i class="pe-7s-graph"></i><p>Dashboard</p></a></li>
            <li><a href="<?php echo base_url('admin/dashboard/profile_update');?>"><i class="pe-7s-user"></i><p>User Profile</p></a></li>
            
            <li><a href="<?php echo base_url('admin/settings/general');?>"><i class="pe-7s-config"></i><p>Site Settings</p></a></li>
            <!-- li><a href="<?php echo base_url('admin/events');?>"><i class="pe-7s-news-paper"></i><p>Event News</p></a></li -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle bcktrans" data-toggle="collapse" data-target="#demo">
                <i class="pe-7s-note2"></i>
                <p>
                    Pages Setting
                    <b class="caret"></b>
                </p>
            </a>
            <ul id="demo" class="collapse">
                <li><a href="<?php echo base_url('admin/about_page');?>">About Page</a></li>
                <li><a href="<?php echo base_url('admin/contact_page');?>">Contact Us Page</a></li>
                <li><a href="<?php echo base_url('admin/home_page');?>">Home Page</a></li>
                <li><a href="<?php echo base_url('admin/gallery_page');?>">Gallery Page</a></li>
                <li><a href="<?php echo base_url('admin/gallery');?>">Gallery Setting</a></li>
                <li><a href="<?php echo base_url('admin/services');?>">Services Settings</a></li>
                <li><a href="<?php echo base_url('admin/service_page');?>">Service Page</a></li>
                <li><a href="<?php echo base_url('admin/social');?>">Social Settings</a></li>
                <li><a href="<?php echo base_url('admin/work');?>">What we do</a></li>
                <li><a href="<?php echo base_url('admin/testimonials');?>">Testimonials</a></li>
            </ul>
        </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle bcktrans" data-toggle="collapse" data-target="#demo3">
        <i class="pe-7s-mail"></i>
        <p>
            Emails
            <b class="caret"></b>
        </p>
    </a>

    <ul id="demo3" class="collapse">
        <li><a href="<?php echo base_url('admin/booking');?>">Booking Inquiries&nbsp;<label class="countlabel"><?php echo $this->bookingcount; ?></label></a></li>
        <li><a href="<?php echo base_url('admin/contact_us');?>">Contact Inquiries&nbsp;<label class="countlabel"><?php echo $this->count; ?></label></a></li>
        <li><a href="<?php echo base_url('admin/newsletter');?>">Newsletters</a></li>
    </ul>
</li>
<?php if($this->session->userdata("master_admin_id") == 5): ?>
<li><a href="<?php echo base_url('admin/developer/general');?>"><i class="pe-7s-config"></i><p>Developer Settings</p></a></li>
<?php endif; ?>
</ul>
</div>
</div>

<style type="text/css">
.dropdown-menu li a
{
    color:#000 !important;
}
.bcktrans
{
    background: rgba(255, 255, 255, 0.14);
}
.collapse li a
{
    font-size: 16px;
}
</style>