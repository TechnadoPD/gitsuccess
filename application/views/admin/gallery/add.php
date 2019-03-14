<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Add</h3>
    </div>    
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/gallery/add')?>" method="post" enctype="multipart/form-data">       
        <div class="box-body">

          <div class="form-group">
            <label>Gallery Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->gallery_image)?base_url('uploads/gallery/').$record->gallery_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="gallery_image" required data-toggle="modal" data-target="#exampleModal" name="gallery_image" value="<?php echo !empty($record->gallery_image)?$record->gallery_image:"";?>" readonly>
                  <label for="gallery_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("gallery_image"); ?>
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
