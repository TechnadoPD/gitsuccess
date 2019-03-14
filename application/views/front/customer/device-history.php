<main>
  <div class="main2"></div>
  <!-- start content -->
  <div id="content">
    <div id="fixed-barrier"></div>
    <div class="padding-0 clearfix" data-ref="mixitup-container">
      <div class="">
        <div class="dashBoard">
          <?php $this->load->view('front/customer/side-nav');?>
          <div class="col-xs-12 col-sm-9">
            <h2 class="text-left dashBoardH4">Order History</h2>
            <div class="table-responsive">
              <table class="table customtable table-responsive table-hover">
               <thead>
                 <tr>
                  <th>S.no</th>
                  <th>Job Number</th>
                  <th>Device Make & Model</th>
                  <th>Device Status</th>
                  <th>View Status Bar</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($records)):$i=1; foreach($records as $record): ?>
                  <div class="modal fade" id="exampleModal<?php echo $record['customer_query_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="width: 943px;margin-top: 250px;" class="modal-content">
                        <div style="height: 120px;" class="modal-body">
                          <div class="containers">
                            <ul class="progressbars">
                              <?php if($record['device_repair_status'] == "Booked"):?>
                                <li class="actives"><i class="fas fa-cube"></i> Booked</li>
                                <li class=""><i class="fas fa-male"></i> Quote Ready</li>
                                <li class=""><i class="fas fa-check"></i> Approved</li>
                                <li class=""><i class="fas fa-user-clock"></i> Waiting for Parts</li>
                                <li class=""><i class="fas fa-cog"></i> Parts Received</li>
                                <li class=""><i class="fas fa-tools"></i> Waiting for Repair</li>
                                <li class=""><i class="fas fa-tools"></i> Repaired</li>
                                <li class=""><i class="fas fa-ban"></i> Not Approved</li>
                                <li class=""><i class="fas fa-clipboard-check"></i> Ready for Pick up </li>
                                <?php elseif($record['device_repair_status'] == "Quote Ready"):?>
                                  <li class="actives"><i class="fas fa-cube"></i> Booked</li>
                                  <li class="actives"><i class="fas fa-male"></i> Quote Ready</li>
                                  <li class=""><i class="fas fa-check"></i> Approved</li>
                                  <li class=""><i class="fas fa-user-clock"></i> Waiting for Parts</li>
                                  <li class=""><i class="fas fa-cog"></i> Parts Received</li>
                                  <li class=""><i class="fas fa-tools"></i> Waiting for Repair</li>
                                  <li class=""><i class="fas fa-tools"></i> Repaired</li>
                                  <li class=""><i class="fas fa-ban"></i> Not Approved</li>
                                  <li class=""><i class="fas fa-clipboard-check"></i> Ready for Pick up </li>
                                  <?php elseif($record['device_repair_status'] == "Approved"):?>
                                    <li class="actives"><i class="fas fa-cube"> </i>Booked</li>
                                    <li class="actives"><i class="fas fa-male"></i> Quote Ready</li>
                                    <li class="actives"><i class="fas fa-check"></i> Approved</li>
                                    <li class=""><i class="fas fa-user-clock"></i> Waiting for Parts</li>
                                    <li class=""><i class="fas fa-cog"></i> Parts Received</li>
                                    <li class=""><i class="fas fa-tools"></i> Waiting for Repair</li>
                                    <li class=""><i class="fas fa-tools"></i> Repaired</li>
                                    <li class=""><i class="fas fa-ban"></i> Not Approved</li>
                                    <li class=""><i class="fas fa-clipboard-check"></i> Ready for Pick up </li>
                                    <?php elseif($record['device_repair_status'] == "Waiting for Parts"):?>
                                      <li class="actives"><i class="fas fa-cube"></i> Booked</li>
                                      <li class="actives"><i class="fas fa-male"></i> Quote Ready</li>
                                      <li class="actives"><i class="fas fa-check"></i> Approved</li>
                                      <li class="actives"><i class="fas fa-user-clock"></i> Waiting for Parts</li>
                                      <li class=""><i class="fas fa-cog"></i> Parts Received</li>
                                      <li class=""><i class="fas fa-tools"></i> Waiting for Repair</li>
                                      <li class=""><i class="fas fa-tools"></i> Repaired</li>
                                      <li class=""><i class="fas fa-ban"></i> Not Approved</li>
                                      <li class=""><i class="fas fa-clipboard-check"></i> Ready for Pick up </li>
                                      <?php elseif($record['device_repair_status'] == "Parts Received"):?>
                                        <li class="actives"><i class="fas fa-cube"></i> Booked</li>
                                        <li class="actives"><i class="fas fa-male"></i> Quote Ready</li>
                                        <li class="actives"><i class="fas fa-check"></i> Approved</li>
                                        <li class="actives"><i class="fas fa-user-clock"></i> Waiting for Parts</li>
                                        <li class="actives"><i class="fas fa-cog"></i> Parts Received</li>
                                        <li class=""><i class="fas fa-tools"></i> Waiting for Repair</li>
                                        <li class=""><i class="fas fa-tools"></i> Repaired</li>
                                        <li class=""><i class="fas fa-ban"></i> Not Approved</li>
                                        <li class=""><i class="fas fa-clipboard-check"></i> Ready for Pick up </li>
                                        <?php elseif($record['device_repair_status'] == "Waiting for Repair"):?>
                                          <li class="actives"><i class="fas fa-cube"></i> Booked</li>
                                          <li class="actives"><i class="fas fa-male"></i> Quote Ready</li>
                                          <li class="actives"><i class="fas fa-check"></i> Approved</li>
                                          <li class="actives"><i class="fas fa-user-clock"></i> Waiting for Parts</li>
                                          <li class="actives"><i class="fas fa-cog"></i> Parts Received</li>
                                          <li class="actives"><i class="fas fa-tools"></i> Waiting for Repair</li>
                                          <li class=""><i class="fas fa-tools"></i> Repaired</li>
                                          <li class=""><i class="fas fa-ban"></i> Not Approved</li>
                                          <li class=""><i class="fas fa-clipboard-check"></i> Ready for Pick up </li>
                                          <?php elseif($record['device_repair_status'] == "Repaired"):?>
                                            <li class="actives"><i class="fas fa-cube"></i> Booked</li>
                                            <li class="actives"><i class="fas fa-male"></i> Quote Ready</li>
                                            <li class="actives"><i class="fas fa-check"></i> Approved</li>
                                            <li class="actives"><i class="fas fa-user-clock"></i> Waiting for Parts</li>
                                            <li class="actives"><i class="fas fa-cog"></i> Parts Received</li>
                                            <li class="actives"><i class="fas fa-tools"></i> Waiting for Repair</li>
                                            <li class="actives"><i class="fas fa-tools"></i>R epaired</li>
                                            <li class=""><i class="fas fa-ban"></i> Not Approved</li>
                                            <li class=""><i class="fas fa-clipboard-check"></i> Ready for Pick up </li>
                                            <?php elseif($record['device_repair_status'] == "Not Approved"):?>
                                              <li class="actives"><i class="fas fa-cube"></i> Booked</li>
                                              <li class="actives"><i class="fas fa-male"></i> Quote Ready</li>
                                              <li class="actives"><i class="fas fa-check"></i> Approved</li>
                                              <li class="actives"><i class="fas fa-user-clock"></i> Waiting for Parts</li>
                                              <li class="actives"><i class="fas fa-cog"></i> Parts Received</li>
                                              <li class="actives"><i class="fas fa-tools"></i> Waiting for Repair</li>
                                              <li class="actives"><i class="fas fa-tools"></i> Repaired</li>
                                              <li class="actives"><i class="fas fa-ban"></i> Not Approved</li>
                                              <li class=""><i class="fas fa-clipboard-check"></i> Ready for Pick up </li>
                                              <?php elseif($record['device_repair_status'] == "Ready for Pick up"):?>
                                                <li class="actives"><i class="fas fa-cube"></i> Booked</li>
                                                <li class="actives"><i class="fas fa-male"></i> Quote Ready</li>
                                                <li class="actives"><i class="fas fa-check"></i> Approved</li>
                                                <li class="actives"><i class="fas fa-user-clock"></i> Waiting for Parts</li>
                                                <li class="actives"><i class="fas fa-cog"></i> Parts Received</li>
                                                <li class="actives"><i class="fas fa-tools"></i> Waiting for Repair</li>
                                                <li class="actives"><i class="fas fa-tools"></i> Repaired</li>
                                                <li class="actives"><i class="fas fa-ban"></i> Not Approved</li>
                                                <li class="actives"><i class="fas fa-clipboard-check"></i> Ready for Pick up </li>
                                              <?php endif; ?>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <tr style="background:<?php echo ($record['device_repair_status'] == "Ready for Pick up")?"#d0ecd0":(($record['device_repair_status'] == "Not Approved")?"#fbb9b9":(($record['device_repair_status'] == "Waiting for Parts")?"#ece0d0":(($record['device_repair_status'] == "Booked")?"#eadae1":(($record['device_repair_status'] == "Quote Ready")?"#efbc96":(($record['device_repair_status'] == "Approved")?"#b7cde4":(($record['device_repair_status'] == "Parts Received")?"#f4cafb":(($record['device_repair_status'] == "Repaired")?"#acb7f3":(($record['device_repair_status'] == "Waiting for Repair")?"#8ecfe8":""))))))))?>;">
                                    <td><?php echo $i++?></td>
                                    <td><?php echo $record['job_number'];?></td>
                                    <td><?php echo $record['device_make_model'];?></td>
                                    <td>
                                      <button class="btn btn-primary"><?php echo $record['device_repair_status'];?> </button>
                                    </td>
                                    <td>
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $record['customer_query_id'] ?>">
                                        Status Bar
                                      </button>
                                    </td>
                                  </tr>
                                <?php endforeach; endif; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div> 
                  <div class="clearfix"></div>
                </div>
              </main>

