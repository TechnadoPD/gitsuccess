
<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Edit</h3>
    </div>     
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/services/edit/').$record->services_id;?>" method="post" enctype="multipart/form-data">       
        <div class="box-body"> 

          <div class="form-group">
            <label>Services Heading</label>
            <input type="text" class="form-control" id="services_heading" value="<?php echo !empty($record->services_heading)?$record->services_heading:''?>" name="services_heading" required/>
            <?php echo form_error('services_heading'); ?>
          </div>

          <div class="form-group">
            <label>Services <span style="color:red;">Text</span> </label>
            <textarea class="editor form-control" rows="3" id="services_text" name="services_text" required><?php echo !empty($record->services_text)?$record->services_text:''?></textarea>
            <?php echo form_error('services_text'); ?>
          </div>

          <div class="form-group">
            <label>Services Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->services_image)?base_url('uploads/services/').$record->services_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="services_image" required data-toggle="modal" data-target="#exampleModal" name="services_image" value="<?php echo !empty($record->services_image)?$record->services_image:"";?>" readonly>
                  <label for="services_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("services_image"); ?>
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

