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
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>            
        <?php $i=1; if(!empty($records)): foreach($records as $record):?>    
        <tr style="background: <?php echo !empty($record->contact_us_viewstatus == "unread")? '#b7d6b5':'';?>">
          <td><?php echo $i;?></td>
          <td><?php echo !empty($record->contact_us_name)?$record->contact_us_name:'';?></td>
          <td><?php echo !empty($record->contact_us_email)?$record->contact_us_email:'';?></td>
          <td><?php echo !empty($record->contact_us_text)?$record->contact_us_text:'';?></td>
          
          <td><a href="<?php echo !empty($record->contact_us_id)?base_url('admin/contact_us/delete/').$record->contact_us_id:'';?>"><span class="delete_icon"><i class="fa fa-check" aria-hidden="true"></i></span></a></td>
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