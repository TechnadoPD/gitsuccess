<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
    </div>
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/gallery_page/index');?>" method="post" enctype="multipart/form-data">           
        <div class="box-body"> 

          <div class="form-group">
            <label>Contact Banner Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->gallery_page_banner_image)?base_url('uploads/gallery_page/').$record->gallery_page_banner_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="gallery_page_banner_image" data-toggle="modal" data-target="#exampleModal" name="gallery_page_banner_image" value="<?php echo $record->gallery_page_banner_image;?>" readonly>
                  <label for="gallery_page_banner_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("gallery_page_banner_image"); ?>
          </div> 

          <div class="form-group">
            <label>Contact Banner Heading</label>
            <input type="name" class="form-control" id="gallery_page_banner_heading" name="gallery_page_banner_heading" value="<?php echo !empty($record->gallery_page_banner_heading)?$record->gallery_page_banner_heading:''?>" required>
            <?php echo form_error('gallery_page_banner_heading'); ?>
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