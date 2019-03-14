<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Edit</h3>
    </div>     
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/social/edit/').$record->social_id?>" method="post" enctype="multipart/form-data">       
        <div class="box-body"> 

          <div class="form-group">
            <label>Name</label>
            <input type="name" class="form-control" id="social_name" name="social_name" value="<?php echo !empty($record->social_name)?$record->social_name:''?>" required>
            <?php echo form_error('social_name'); ?>
          </div> 

          <div class="form-group">
            <label>Link</label>
            <input type="name" class="form-control" id="social_link" name="social_link" value="<?php echo !empty($record->social_link)?$record->social_link:''?>" required>
            <?php echo form_error('social_link'); ?>
          </div> 

          <div class="form-group">
            <label>Social Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->social_image)?base_url('uploads/social/').$record->social_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="social_image" data-toggle="modal" data-target="#exampleModal" name="social_image" value="<?php echo $record->social_image;?>" readonly>
                  <label for="social_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("social_image"); ?>
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