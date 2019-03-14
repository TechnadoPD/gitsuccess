<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">List</h3>
    </div>
    <a class="btn btn-info" href="<?php echo site_url('admin/gallery/add');?>">Add New</a>
    <hr style="border-top: 1px solid #504444;">
    <div class="col-md-12">  
      <div class="box-body"> 
       <table id="table_id" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Gallery Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>            
          <?php $i=1; if(!empty($records)): foreach($records as $record):?>    
          <tr>
            <td><?php echo $i;?></td>
            <td><img style="max-width: 100px;" src="<?php echo !empty($record->gallery_image)?base_url('uploads/gallery/').$record->gallery_image:base_url('assets/img/user.png')?>"></td>
            <td>
              <a href="<?php echo !empty($record->gallery_id)?base_url('admin/gallery/edit/').$record->gallery_id:'';?>"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></i></span></a>
              <a href="<?php echo !empty($record->gallery_id)?base_url('admin/gallery/delete/').$record->gallery_id:'';?>"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
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
