<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
    </div>
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/contact_page/index');?>" method="post" enctype="multipart/form-data">           
        <div class="box-body"> 

          <div class="form-group">
            <label>Contact Banner Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->contact_page_banner_image)?base_url('uploads/contact_page/').$record->contact_page_banner_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="contact_page_banner_image" data-toggle="modal" data-target="#exampleModal" name="contact_page_banner_image" value="<?php echo $record->contact_page_banner_image;?>" readonly>
                  <label for="contact_page_banner_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("contact_page_banner_image"); ?>
          </div> 

          <div class="form-group">
            <label>Contact Banner Heading</label>
            <input type="name" class="form-control" id="contact_page_banner_heading" name="contact_page_banner_heading" value="<?php echo !empty($record->contact_page_banner_heading)?$record->contact_page_banner_heading:''?>" required>
            <?php echo form_error('contact_page_banner_heading'); ?>
          </div>

          <div class="form-group">
            <label>Contact Left Heading</label>
            <input type="name" class="form-control" id="contact_page_left_heading" name="contact_page_left_heading" value="<?php echo !empty($record->contact_page_left_heading)?$record->contact_page_left_heading:''?>" required>
            <?php echo form_error('contact_page_left_heading'); ?>
          </div>

          <div class="form-group">
            <label>Contact Right Heading</label>
            <input type="name" class="form-control" id="contact_page_right_heading" name="contact_page_right_heading" value="<?php echo !empty($record->contact_page_right_heading)?$record->contact_page_right_heading:''?>" required>
            <?php echo form_error('contact_page_right_heading'); ?>
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