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
          <th>Email</th>
		  <th>Actions</th>
        </tr>
      </thead>
      <tbody>            
        <?php $i=1; if(!empty($records)): foreach($records as $record):?>    
        <tr>
          <td><?php echo $i;?></td>
          <td><?php echo !empty($record->newsletter_email)?$record->newsletter_email:'';?></td>
		  <td><a href="<?php echo !empty($record->newsletter_id)?base_url('admin/newsletter/delete/').$record->newsletter_id:'';?>"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a></td>
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