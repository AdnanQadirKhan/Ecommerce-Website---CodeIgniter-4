<?php
include 'includes/head.php';
include 'includes/sidebar.php';
include 'includes/header.php';

?> 
        <div class="aiz-main-content">
          <div class="px-15px px-lg-25px">
            <div class="card">
              <form class="" action="" id=" " method="GET">
                <div class="card-header row gutters-5">
                  <div class="col">
                    <h5 class="mb-md-0 h6">All Orders</h5>
                  </div>
 

                 
                </div>

                <div class="card-body">
                  <table class="table aiz-table mb-0">
                  <?php if(session()->get('msg')) :  ?>
                                                <div class="alert text-center alert-success"><?= session()->get('msg');?></div>
                                            <?php endif;  ?>
                    <thead>
                      <tr>
                        
                        <th>Order Id:</th>
                        <th data-breakpoints="md">Num. of Products</th>
                        <th data-breakpoints="md">Seller</th> 
                        <th data-breakpoints="md">Amount</th>
                        <th data-breakpoints="md">Delivery Status</th> 
                        <th class="text-right" width="15%">Options</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orders as $order) :?>

                      <tr> 
                        <td><?=$order['order_id'];?></td>
                        <td><?=$order['num_of_products'];?></td>
                        <td><?=$order['seller_name'];?></td> 
                        <td><?=$order['order_total'];?></td>
                        <td>
                        <?php if($order['delivery_status'] == 'pending'): ?>
                          <span class="badge badge-inline badge-danger"><?=$order['delivery_status'];?></span>
                        <?php else:?>
                        <span class="badge badge-inline badge-success"><?=$order['delivery_status'];?></span>

                        <?php endif;?>


                        </td>
                          
                        <td class="text-right">
                          <a
                            class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                            href="<?php echo base_url('admin/order-details/'.$order['order_id']); ?>"
                            title="View"
                          >
                            <i class="las la-eye"></i>
                          </a>
                          <a
                            class="btn btn-soft-info btn-icon btn-circle btn-sm"
                            href=""
                            title="Download Invoice"
                          >
                            <i class="las la-download"></i>
                          </a>
                          <a
                            href="<?php echo base_url('admin/delete-order/'.$order['order_id']); ?>"
                            class="btn btn-soft-danger btn-icon btn-circle btn-sm"
                            data-href=""
                            title="Delete"
                          >
                            <i class="las la-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <?php endforeach;?>
                      
                    </tbody>
                  </table>

                  <div class="aiz-pagination">
                    <nav>
                      
                    </nav>
                  </div>
                </div>
              </form>
            </div>
          </div>
<?php
include 'includes/footer.php';
?>