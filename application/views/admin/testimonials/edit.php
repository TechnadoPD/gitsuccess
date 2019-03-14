<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
    </div>
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/testimonials/edit/').$record->testimonials_id;?>" method="post" enctype="multipart/form-data">     
        <div class="box-body"> 

        <div class="form-group">
            <label> Testimonial <span class="dls">Name</span> </label>
            <input type="text" class="form-control" id="testimonials_name" value="<?php echo !empty($record->testimonials_name)?$record->testimonials_name:''?>" name="testimonials_name" required/>
            <?php echo form_error('testimonials_name'); ?>
          </div>

          <div class="form-group">
            <label>Testimonial<span class="dls"> Descripition</span> </label>
            <textarea class="editor form-control" rows="3" id="testimonials_text" name="testimonials_text" required><?php echo !empty($record->testimonials_text)?$record->testimonials_text:''?></textarea>
            <?php echo form_error('testimonials_text'); ?>
          </div>

          <div class="form-group">
            <label>Testimonial Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->testimonials_image)?base_url('uploads/testimonials/').$record->testimonials_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="testimonials_image" required data-toggle="modal" data-target="#exampleModal" name="testimonials_image" value="<?php echo !empty($record->testimonials_image)?$record->testimonials_image:"";?>" readonly>
                  <label for="testimonials_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("testimonials_image"); ?>
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

