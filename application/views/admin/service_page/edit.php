<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
    </div>
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/service_page/index');?>" method="post" enctype="multipart/form-data">           
        <div class="box-body"> 

          <div class="form-group">
            <label>Service Page Banner Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->service_page_banner_image)?base_url('uploads/service_page/').$record->service_page_banner_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="service_page_banner_image" data-toggle="modal" data-target="#exampleModal" name="service_page_banner_image" value="<?php echo $record->service_page_banner_image;?>" readonly>
                  <label for="service_page_banner_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("service_page_banner_image"); ?>
          </div> 

          <div class="form-group">
            <label>Service Banner Heading</label>
            <input type="name" class="form-control" id="service_page_banner_heading" name="service_page_banner_heading" value="<?php echo !empty($record->service_page_banner_heading)?$record->service_page_banner_heading:''?>" required>
            <?php echo form_error('service_page_banner_heading'); ?>
          </div>

          <div class="form-group">
            <label>Service Page Intro Heading</label>
            <input type="name" class="form-control" id="service_page_intro_heading" name="service_page_intro_heading" value="<?php echo !empty($record->service_page_intro_heading)?$record->service_page_intro_heading:''?>" required>
            <?php echo form_error('service_page_intro_heading'); ?>
          </div>

          <div class="form-group">
            <label>Service Page Heading</label>
            <input type="name" class="form-control" id="service_page_heading" name="service_page_heading" value="<?php echo !empty($record->service_page_heading)?$record->service_page_heading:''?>" required>
            <?php echo form_error('service_page_heading'); ?>
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