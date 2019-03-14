<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
    </div>
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/settings/general');?>" method="post" enctype="multipart/form-data">           
        <div class="box-body"> 

          <div class="form-group">
            <label>Site Title</label>
            <input type="name" class="form-control" id="settings_site_title" name="settings_site_title" value="<?php echo !empty($record->settings_site_title)?$record->settings_site_title:''?>" required>
            <?php echo form_error('settings_site_title'); ?>
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input type="name" class="form-control" id="settings_email" name="settings_email" value="<?php echo !empty($record->settings_email)?$record->settings_email:''?>" required>
            <?php echo form_error('settings_email'); ?>
          </div>

          <div class="form-group">
            <label>Email From</label>
            <input type="name" class="form-control" id="settings_email_to" name="settings_email_to" value="<?php echo !empty($record->settings_email_to)?$record->settings_email_to:''?>" required>
            <?php echo form_error('settings_email_to'); ?>
          </div>

          <div class="form-group">
            <label>Email To</label>
            <input type="name" class="form-control" id="settings_email_from" name="settings_email_from" value="<?php echo !empty($record->settings_email_from)?$record->settings_email_from:''?>" required>
            <?php echo form_error('settings_email_from'); ?>
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <input type="name" class="form-control" id="phone_no" name="phone_no" value="<?php echo !empty($record->phone_no)?$record->phone_no:''?>" required>
            <?php echo form_error('phone_no'); ?>
          </div>

          <div class="form-group">
            <label>Address</label>
            <input type="name" class="form-control" id="address" name="address" value="<?php echo !empty($record->address)?$record->address:''?>" required>
            <?php echo form_error('address'); ?>
          </div>

          <div class="form-group">
            <label>Footer Copyright Text</label>
            <input type="name" class="form-control" id="footer_tagline" name="footer_tagline" value="<?php echo !empty($record->footer_tagline)?$record->footer_tagline:''?>" required>
            <?php echo form_error('footer_tagline'); ?>
          </div>

          <div class="form-group">
            <label>Footer Heading</label>
            <input type="name" class="form-control" id="footer_heading" name="footer_heading" value="<?php echo !empty($record->footer_heading)?$record->footer_heading:''?>" required>
            <?php echo form_error('footer_heading'); ?>
          </div>

          <div class="form-group">
            <label>Footer text</label>
            <textarea class="editor form-control" rows="3" id="footer_text" name="footer_text" required><?php echo !empty($record->footer_text)?$record->footer_text:''?></textarea>
            <?php echo form_error('footer_text'); ?>
          </div>

          <div class="form-group">
            <label>Footer Background Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->footer_background_image)?base_url('uploads/settings/').$record->footer_background_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="footer_background_image" data-toggle="modal" data-target="#exampleModal" name="footer_background_image" value="<?php echo $record->footer_background_image;?>" readonly>
                  <label for="footer_background_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("footer_background_image"); ?>
          </div>  
          
          <div class="form-group">
            <label>Header Logo</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->header_logo)?base_url('uploads/settings/').$record->header_logo:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" value="<?php echo $record->header_logo;?>" id="header_logo" data-toggle="modal" data-target="#exampleModal" name="header_logo" value="<?php echo $record->header_logo;?>" readonly>
                  <label for="header_logo" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("header_logo"); ?>
          </div>

          <div class="form-group">
            <label>Fav Icon</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->fav_icon)?base_url('uploads/settings/').$record->fav_icon:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" value="<?php echo $record->fav_icon;?>" id="fav_icon" data-toggle="modal" data-target="#exampleModal" name="fav_icon" value="" readonly>
                  <label for="fav_icon" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("fav_icon"); ?>
          </div>
          
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="<?php echo base_url('admin')?>" class="btn btn-danger">Dashboard</a>
        </div>    
      </form>  
    </div>
  </div>
</div>