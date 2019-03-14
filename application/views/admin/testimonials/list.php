
<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">List</h3>
    </div>
    <a class="btn btn-info" href="<?php echo site_url('admin/testimonials/add');?>">Add New</a>
    <hr style="border-top: 1px solid #504444;">
    <div class="col-md-12">  
      <div class="box-body"> 

       <table id="table_id" class="table table-bordered table-striped">
        <thead>
          <tr>
            <td>S.no</td>
            <td>Testimonial Name</td>
            <td>Testimonial Descripition</td>
            <td>Testimonial Image</td>
            <td>Actions</td>
          </tr>
        </thead>
        <tbody>            
          <?php $i=1; if(!empty($records)): foreach($records as $record):?>    
          <tr>
            <td><?php echo $i;?></td>
            <td><?php echo !empty($record->testimonials_name)?$record->testimonials_name:'';?></td>
            <td><?php echo !empty($record->testimonials_text)?$record->testimonials_text:'';?></td>
            <td><img style="width: 100px;" src="<?php echo !empty($record->testimonials_image)?base_url('uploads/testimonials/').$record->testimonials_image:base_url('assets/img/placeholder.png')?>"></td>
            <td>
              <a href="<?php echo !empty($record->testimonials_id)?base_url('admin/testimonials/edit/').$record->testimonials_id:'';?>"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
              <a href="<?php echo !empty($record->testimonials_id)?base_url('admin/testimonials/delete/').$record->testimonials_id:'';?>"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
            </td>
          </tr>
          <?php $i++; endforeach;?>  
          <?php else:?>
            <tr>
              <td>No Record Found</td>
            </tr>
          <?php endif;?>
        </tbody>
      </table>

    </div>
    <div class="box-footer">
      <a href="<?php echo base_url('admin')?>" class="btn btn-danger">Dashboard</a>
    </div>    
  </div>
</div>
</div>
