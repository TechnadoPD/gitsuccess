<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        <?php echo !empty($title)?$title:'Title';?>
      </h1>
      <h3 class="box-title" style="display:inline-block;">List</h3>
    </div>
    <hr style="border-top: 1px solid #504444;">
    <div class="col-md-12">  
      <div class="box-body"> 
       <table id="table_id" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Heading</th>
            <th>Text</th>
            <th>Button Text</th>
            <th>Button Link</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>            
         <?php $i=1; if(!empty($records)): foreach($records as $record):?>    
         <tr>
          <td><?php echo $i;?></td>
          <td><?php echo !empty($record->work_heading)?$record->work_heading:'';?></td>
          <td><?php echo !empty($record->work_descripition  )?$record->work_descripition  :'';?></td>
          <td><?php echo !empty($record->work_button_text  )?$record->work_button_text  :'';?></td>
          <td><?php echo !empty($record->work_button_link  )?$record->work_button_link  :'';?></td>
          <td><img style="width: 100px;" src="<?php echo !empty($record->work_image)?base_url('uploads/work/').$record->work_image:base_url('assets/img/placeholder.png')?>"></i></td>
          <td>
            <a href="<?php echo !empty($record->work_id)?base_url('admin/work/edit/').$record->work_id:'';?>"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
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