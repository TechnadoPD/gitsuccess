<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">Edit Data</h3>
    </div>
    <div class="col-md-6">
      <form role="form" action="<?php echo base_url('admin/home_page/index');?>" method="post" enctype="multipart/form-data">           
        <div class="box-body"> 

          <div class="form-group">
            <label>Banner<span style="color:red;"> Heading</span></label>
            <input type="name" class="form-control" id="home_page_banner_heading" name="home_page_banner_heading" value="<?php echo !empty($record->home_page_banner_heading)?$record->home_page_banner_heading:''?>" required>
            <?php echo form_error('home_page_banner_heading'); ?>
          </div>

          <div class="form-group">
            <label>Banner<span style="color:red;"> Sub Heading</span></label>
            <input type="name" class="form-control" id="home_page_banner_sub_heading" name="home_page_banner_sub_heading" value="<?php echo !empty($record->home_page_banner_sub_heading)?$record->home_page_banner_sub_heading:''?>" required>
            <?php echo form_error('home_page_banner_sub_heading'); ?>
          </div>

          <div class="form-group">
            <label>Banner<span style="color:red;"> Text</span></label>
            <textarea class="editor form-control" rows="3" id="home_page_banner_text" name="home_page_banner_text" required><?php echo !empty($record->home_page_banner_text)?$record->home_page_banner_text:''?></textarea>
            <?php echo form_error('home_page_banner_text'); ?>
          </div>

          <div class="form-group">
            <label>Banner<span style="color:red;"> Button Text</span></label>
            <input type="name" class="form-control" id="home_page_banner_button_text" name="home_page_banner_button_text" value="<?php echo !empty($record->home_page_banner_button_text)?$record->home_page_banner_button_text:''?>" required>
            <?php echo form_error('home_page_banner_button_text'); ?>
          </div>

          <div class="form-group">
            <label>Banner<span style="color:red;"> Button Link</span></label>
            <input type="name" class="form-control" id="home_page_button_link" name="home_page_button_link" value="<?php echo !empty($record->home_page_button_link)?$record->home_page_button_link:''?>" required>
            <?php echo form_error('home_page_button_link'); ?>
          </div>

          <div class="form-group">
            <label>Section<span style="color:red;"> Two Heading</span></label>
            <input type="name" class="form-control" id="home_page_sec2_heading" name="home_page_sec2_heading" value="<?php echo !empty($record->home_page_sec2_heading)?$record->home_page_sec2_heading:''?>" required>
            <?php echo form_error('home_page_sec2_heading'); ?>
          </div>

          <div class="form-group">
            <label>Section<span style="color:red;"> Two Text</span></label>
            <textarea class="editor form-control" rows="3" id="home_page_sec2_text" name="home_page_sec2_text" required><?php echo !empty($record->home_page_sec2_text)?$record->home_page_sec2_text:''?></textarea>
            <?php echo form_error('home_page_sec2_text'); ?>
          </div>

          <div class="form-group">
            <label>Section<span style="color:red;"> Two Button Text</span></label>
            <input type="name" class="form-control" id="home_page_sec2_button_text" name="home_page_sec2_button_text" value="<?php echo !empty($record->home_page_sec2_button_text)?$record->home_page_sec2_button_text:''?>" required>
            <?php echo form_error('home_page_sec2_button_text'); ?>
          </div>

          <div class="form-group">
            <label>Section<span style="color:red;"> Two Button Link</span></label>
            <input type="name" class="form-control" id="home_page_sec2_button_link" name="home_page_sec2_button_link" value="<?php echo !empty($record->home_page_sec2_button_link)?$record->home_page_sec2_button_link:''?>" required>
            <?php echo form_error('home_page_sec2_button_link'); ?>
          </div>

          <div class="form-group">
            <label>Section Two Right Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->home_page_sec2_image)?base_url('uploads/home_page/').$record->home_page_sec2_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="home_page_sec2_image" data-toggle="modal" data-target="#exampleModal" name="home_page_sec2_image" value="<?php echo $record->home_page_sec2_image;?>" readonly>
                  <label for="home_page_sec2_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("home_page_sec2_image"); ?>
          </div>  

          <div class="form-group">
            <label>Section Two Background Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->home_page_sec2_background_image)?base_url('uploads/home_page/').$record->home_page_sec2_background_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="home_page_sec2_background_image" data-toggle="modal" data-target="#exampleModal" name="home_page_sec2_background_image" value="<?php echo $record->home_page_sec2_background_image;?>" readonly>
                  <label for="home_page_sec2_background_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("home_page_sec2_background_image"); ?>
          </div>  

          <div class="form-group">
            <label>Section<span style="color:red;"> Three Heading</span></label>
            <input type="name" class="form-control" id="home_page_sec3_heading" name="home_page_sec3_heading" value="<?php echo !empty($record->home_page_sec3_heading)?$record->home_page_sec3_heading:''?>" required>
            <?php echo form_error('home_page_sec3_heading'); ?>
          </div>

          <div class="form-group">
            <label>Section<span style="color:red;"> Three Sub Heading</span></label>
            <input type="name" class="form-control" id="home_page_sec3_subheading" name="home_page_sec3_subheading" value="<?php echo !empty($record->home_page_sec3_subheading)?$record->home_page_sec3_subheading:''?>" required>
            <?php echo form_error('home_page_sec3_subheading'); ?>
          </div>

          <div class="form-group">
            <label>Section Three Background Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->home_page_sec3_background_image)?base_url('uploads/home_page/').$record->home_page_sec3_background_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="home_page_sec3_background_image" data-toggle="modal" data-target="#exampleModal" name="home_page_sec3_background_image" value="<?php echo $record->home_page_sec3_background_image;?>" readonly>
                  <label for="home_page_sec3_background_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("home_page_sec3_background_image"); ?>
          </div> 

          <div class="form-group">
            <label>Section<span style="color:red;"> Four Heading</span></label>
            <input type="name" class="form-control" id="home_page_sec4_heading" name="home_page_sec4_heading" value="<?php echo !empty($record->home_page_sec4_heading)?$record->home_page_sec4_heading:''?>" required>
            <?php echo form_error('home_page_sec4_heading'); ?>
          </div>

          <div class="form-group">
            <label>Section<span style="color:red;"> Four Button Text</span></label>
            <input type="name" class="form-control" id="home_page_sec4_button_text" name="home_page_sec4_button_text" value="<?php echo !empty($record->home_page_sec4_button_text)?$record->home_page_sec4_button_text:''?>" required>
            <?php echo form_error('home_page_sec4_button_text'); ?>
          </div>

          <div class="form-group">
            <label>Section<span style="color:red;"> Four Button Link</span></label>
            <input type="name" class="form-control" id="home_page_sec4_button_link" name="home_page_sec4_button_link" value="<?php echo !empty($record->home_page_sec4_button_link)?$record->home_page_sec4_button_link:''?>" required>
            <?php echo form_error('home_page_sec4_button_link'); ?>
          </div>

          <div class="form-group">
            <label>Section Four Background Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->home_page_sec4_banner_image)?base_url('uploads/home_page/').$record->home_page_sec4_banner_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="home_page_sec4_banner_image" data-toggle="modal" data-target="#exampleModal" name="home_page_sec4_banner_image" value="<?php echo $record->home_page_sec4_banner_image;?>" readonly>
                  <label for="home_page_sec4_banner_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("home_page_sec4_banner_image"); ?>
          </div> 

          <div class="form-group">
            <label>Section<span style="color:red;"> Five Heading</span></label>
            <input type="name" class="form-control" id="home_page_sec5_heading" name="home_page_sec5_heading" value="<?php echo !empty($record->home_page_sec5_heading)?$record->home_page_sec5_heading:''?>" required>
            <?php echo form_error('home_page_sec5_heading'); ?>
          </div>

          <div class="form-group">
            <label>Section<span style="color:red;"> Five Sub Heading</span></label>
            <input type="name" class="form-control" id="home_page_sec5_subheading" name="home_page_sec5_subheading" value="<?php echo !empty($record->home_page_sec5_subheading)?$record->home_page_sec5_subheading:''?>" required>
            <?php echo form_error('home_page_sec5_subheading'); ?>
          </div>

          <div class="form-group">
            <label>Section Five Background Image</label>
            <div class="input-group-btn">
              <div class="image-upload">                      
                <img class="imgpath" src="<?php echo !empty($record->home_page_sec5_banner_image)?base_url('uploads/home_page/').$record->home_page_sec5_banner_image:base_url('assets/img/placeholder.png')?>">
                <div class="file-btn">
                  <input type="text" class="imageselect btn" id="home_page_sec5_banner_image" data-toggle="modal" data-target="#exampleModal" name="home_page_sec5_banner_image" value="<?php echo $record->home_page_sec5_banner_image;?>" readonly>
                  <label for="home_page_sec5_banner_image" class="btn btn-info">Upload</label>
                </div>
              </div>
            </div>
            <?php echo form_error("home_page_sec5_banner_image"); ?>
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