<?php if(!empty($gallerydata)): foreach($gallerydata as $data):?>
<section>
  <div style="background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url('<?php echo base_url("uploads/gallery_page/").$data->gallery_page_banner_image;?>')" class="container-fluid gallery-bg-overlay">
    <div class="row text-center">
     <h1 class="inner-pg-head">GALLERY</h1>
   </div>
 </div>
 <div class="container gal-container">

  <?php if(!empty($gallery)): foreach($gallery as $img):?>
  <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
    <div class="box">
      <a href="#" data-toggle="modal" data-target="#<?php echo $img->gallery_id;?>">
        <img src="<?php echo base_url('uploads/gallery/').$img->gallery_image;?>">
      </a>
      <div class="modal fade" id="<?php echo $img->gallery_id;?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="modal-body">
              <img src="<?php echo base_url('uploads/gallery/').$img->gallery_image;?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; endif; ?>

</div>
</section>
<?php endforeach; endif; ?>
