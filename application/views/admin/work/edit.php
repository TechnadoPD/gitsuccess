<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Edit</h3>
    </div>     
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/work/edit/').$record->work_id?>" method="post" enctype="multipart/form-data">       
        <div class="box-body"> 

          <div class="form-group">
            <label>Heading</label>
            <input type="name" class="form-control" id="work_heading" name="work_heading" value="<?php echo !empty($record->work_heading)?$record->work_heading:''?>" required>
            <?php echo form_error('work_heading'); ?>
          </div> 

          <div class="form-group">
            <label>Text</label>
            <textarea class="editor form-control" rows="3" id="work_descripition" name="work_descripition" required><?php echo !empty($record->work_descripition)?$record->work_descripition:''?></textarea>
            <?php echo form_error('work_descripition'); ?>
          </div>

          <div class="form-group">
            <label>Button Link</label>
            <input type="name" class="form-control" id="work_button_text" name="work_button_text" value="<?php echo !empty($record->work_button_text)?$record->work_button_text:''?>" required>
            <?php echo form_error('work_button_text'); ?>
          </div> 

          <div class="form-group">
            <label>Button Text</label>
            <input type="name" class="form-control" id="work_button_link" name="work_button_link" value="<?php echo !empty($record->work_button_link)?$record->work_button_link:''?>" required>
            <?php echo form_error('work_button_link'); ?>
          </div> 

          <div class="form-group">
            <label>Work Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->work_image)?base_url('uploads/work/').$record->work_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="work_image" data-toggle="modal" data-target="#exampleModal" name="work_image" value="<?php echo $record->work_image;?>" readonly>
                  <label for="work_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("work_image"); ?>
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