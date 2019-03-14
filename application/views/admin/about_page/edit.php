<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
    </div>
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/about_page/index');?>" method="post" enctype="multipart/form-data">           
        <div class="box-body"> 
          <div class="form-group">
            <label>About Banner Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->about_page_banner_image)?base_url('uploads/about_page/').$record->about_page_banner_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="about_page_banner_image" data-toggle="modal" data-target="#exampleModal" name="about_page_banner_image" value="<?php echo $record->about_page_banner_image;?>" readonly>
                  <label for="about_page_banner_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("about_page_banner_image"); ?>
          </div> 
          <div class="form-group">
            <label>About Banner Heading</label>
            <input type="name" class="form-control" id="about_page_banner_heading" name="about_page_banner_heading" value="<?php echo !empty($record->about_page_banner_heading)?$record->about_page_banner_heading:''?>" required>
            <?php echo form_error('about_page_banner_heading'); ?>
          </div>
          <div class="form-group">
            <label>About Page Intro Heading</label>
            <input type="name" class="form-control" id="about_page_intro_heading" name="about_page_intro_heading" value="<?php echo !empty($record->about_page_intro_heading)?$record->about_page_intro_heading:''?>" required>
            <?php echo form_error('about_page_intro_heading'); ?>
          </div>
          <div class="form-group">
            <label>About Page Heading</label>
            <input type="name" class="form-control" id="about_page_heading" name="about_page_heading" value="<?php echo !empty($record->about_page_heading)?$record->about_page_heading:''?>" required>
            <?php echo form_error('about_page_heading'); ?>
          </div>
          <div class="form-group">
            <label>About Page Section One Text</label>
            <textarea class="editor form-control" rows="3" id="about_page_text" name="about_page_text" required><?php echo !empty($record->about_page_text)?$record->about_page_text:''?></textarea>
            <?php echo form_error('about_page_text'); ?>
          </div>
          <div class="form-group">
            <label>About Page Right Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->about_page_right_image)?base_url('uploads/about_page/').$record->about_page_right_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="about_page_right_image" data-toggle="modal" data-target="#exampleModal" name="about_page_right_image" value="<?php echo $record->about_page_right_image;?>" readonly>
                  <label for="about_page_right_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("about_page_right_image"); ?>
          </div> 
          <div class="form-group">
            <label>About Page Section Two Heading</label>
            <input type="name" class="form-control" id="about_page_sec2_heading" name="about_page_sec2_heading" value="<?php echo !empty($record->about_page_sec2_heading)?$record->about_page_sec2_heading:''?>" required>
            <?php echo form_error('about_page_sec2_heading'); ?>
          </div>
          <div class="form-group">
            <label>About Page Section Two Text</label>
            <textarea class="editor form-control" rows="3" id="about_page_sec2_text" name="about_page_sec2_text" required><?php echo !empty($record->about_page_sec2_text)?$record->about_page_sec2_text:''?></textarea>
            <?php echo form_error('about_page_sec2_text'); ?>
          </div>
          <div class="form-group">
            <label>About Page Section Two Right Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->about_page_sec2_right_image)?base_url('uploads/about_page/').$record->about_page_sec2_right_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="about_page_sec2_right_image" data-toggle="modal" data-target="#exampleModal" name="about_page_sec2_right_image" value="<?php echo $record->about_page_sec2_right_image;?>" readonly>
                  <label for="about_page_sec2_right_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("about_page_sec2_right_image"); ?>
          </div> 
          <div class="form-group">
            <label>Quality One</label>
            <input type="name" class="form-control" id="quality_one" name="quality_one" value="<?php echo !empty($record->quality_one)?$record->quality_one:''?>" required>
            <?php echo form_error('quality_one'); ?>
          </div>
          <div class="form-group">
            <label>Quality Two</label>
            <input type="name" class="form-control" id="quality_two" name="quality_two" value="<?php echo !empty($record->quality_two)?$record->quality_two:''?>" required>
            <?php echo form_error('quality_two'); ?>
          </div>
          <div class="form-group">
            <label>Quality Three</label>
            <input type="name" class="form-control" id="quality_three" name="quality_three" value="<?php echo !empty($record->quality_three)?$record->quality_three:''?>" required>
            <?php echo form_error('quality_three'); ?>
          </div>
          <div class="form-group">
            <label>Quality Four</label>
            <input type="name" class="form-control" id="quality_four" name="quality_four" value="<?php echo !empty($record->quality_four)?$record->quality_four:''?>" required>
            <?php echo form_error('quality_four'); ?>
          </div>
          <div class="form-group">
            <label>Quality Five</label>
            <input type="name" class="form-control" id="quality_five" name="quality_five" value="<?php echo !empty($record->quality_five)?$record->quality_five:''?>" required>
            <?php echo form_error('quality_five'); ?>
          </div>
          <div class="form-group">
            <label>Quality Six</label>
            <input type="name" class="form-control" id="quality_six" name="quality_six" value="<?php echo !empty($record->quality_six)?$record->quality_six:''?>" required>
            <?php echo form_error('quality_six'); ?>
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