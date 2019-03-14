<main>
  <div class="main2"></div>

  <div id="content">
    <div id="fixed-barrier"></div>
    <div class="container">
      <div class="dashBoard">
        <?php if(!empty($records)): foreach($records as $record): ?>
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Invoice</h1>
                </div>
              </div>
            </div>
          </section>

          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="invoice p-3 mb-3">
                    <div class="row">
                      <div class="col-12">
                        <h4>
                          <b class="float-right">Order Date : <?php echo $record->orders_created_date; ?></b>
                        </h4>
                      </div>
                      <hr></hr>
                    </div>
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">
                        From
                        <address>
                          <strong><?php echo $this->settings_site_title;?></strong><br>
                          <?php echo $this->address;?><br>
                          Phone: <?php echo $this->phone_no;?><br>
                          Email: <?php echo $this->settings_email;?>
                        </address>
                      </div>
                      <div class="col-sm-4 invoice-col">
                        To
                        <address>
                          <strong><?php echo $record->customer_fname;?>&nbsp;<?php echo $record->customer_lname;?></strong><br>
                          <?php echo $record->billing_street;?><br>
                          <?php echo $record->billing_city;?> &nbsp;<?php echo $record->billing_state;?>&nbsp;,<?php echo $record->billing_country;?><br>
                          Phone: <?php echo $record->customer_phone;?><br>
                          Email: <?php echo $record->customer_email;?>
                        </address>
                      </div>
                      <div class="col-sm-4 invoice-col">
                        <b>Invoice #<?php echo $record->orders_no;?></b><br>
                        <br>
                        <b>Order ID:</b> #00<?php echo $record->orders_id;?><br>
                        <b>Payment Status:</b> <?php echo $record->orders_type;?><br>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12 table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>S.No</th>
                              <th>Product</th>
                              <th>Serial #</th>
                              <th>Quantity</th>
                              <th>Specifications</th>
                              <th>Price Per Product</th>
                              <th>Subtotal</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $x = 1; $items = get_list('order_items',array('orders_id'=>$record->orders_id));?>
                            <?php if(isset($items)): foreach($items as $row):?>
                              <tr>
                                <td><?php echo $x++; ?></td>
                                <td><?php echo $row->product_name;?></td>
                                <td><?php echo $row->orders_no;?></td>
                                <td><?php echo $row->product_qty;?></td>
                                <td>
                                  <?php !empty($records)? $varients = unserialize($row->variant):'';?>
                                  <?php if($varients): foreach($varients[0] as $key => $val):?>
                                    <p><?php echo $key;?>: <?php echo get_name_by_id('variant',$val);?></p>
                                  <?php endforeach; endif;?>
                                </td>
                                <td><?php echo $row->product_price;?></td>
                                <td><?php echo $row->order_items_total_amt;?></td>
                              </tr>
                            <?php endforeach; endif; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="row">
                      <?php $money = $this->general->sum_money('order_items_total_amt',array('orders_id'=>$record->orders_id));?>
                      <?php $discount_money = $this->general->sum_money_order('orders_diss_amt',array('orders_id'=>$record->orders_id));?>
                      <div class="col-6">
                        <div class="table-responsive">
                          <table class="table">
                            <tr>
                              <th style="width:50%">Subtotal:</th>
                              <td><?php echo $this->currency.$money[0]->order_items_total_amt;?></td>
                            </tr>
                            <tr>
                              <th style="width:50%">After Coupon Discount:</th>
                              <td><?php echo $this->currency.$discount_money[0]->orders_diss_amt;?></td>
                            </tr>
                            <tr>
                              <th>Total:</th>
                              <td>
                                <?php 
                                if($discount_money[0]->orders_diss_amt > 0)
                                {
                                  echo $this->currency.$discount_money[0]->orders_diss_amt;
                                }
                                else
                                {
                                  echo $this->currency.$money[0]->order_items_total_amt; 
                                }
                                ?>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="row no-print">
                      <div class="col-12">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php endforeach; endif; ?>

      </div>
    </div> 
    <div class="clearfix"></div>
  </div>
</main>
