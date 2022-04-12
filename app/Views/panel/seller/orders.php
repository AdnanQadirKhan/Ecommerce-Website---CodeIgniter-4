<?php
include 'includes/head.php';
include 'includes/header.php';
include 'includes/sidebar.php';

?>

<div class="aiz-user-panel">

    <div class="card">
        <form id="sort_orders" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">Orders</h5>
                </div>
                <!--<div class="col-md-3 ml-auto">-->
                <!--    <select class="form-control aiz-selectpicker" data-placeholder="Filter by Payment Status" name="payment_status" onchange="sort_orders()">-->
                <!--        <option value="">Filter by Payment Status</option>-->
                <!--        <option value="paid">Paid</option>-->
                <!--        <option value="unpaid">Unpaid</option>-->
                <!--    </select>-->
                <!--</div>-->

                <!--<div class="col-md-3 ml-auto">-->
                <!--    <select class="form-control aiz-selectpicker" data-placeholder="Filter by Payment Status" name="delivery_status" onchange="sort_orders()">-->
                <!--        <option value="">Filter by Deliver Status</option>-->
                <!--        <option value="pending">Pending</option>-->
                <!--        <option value="confirmed">Confirmed</option>-->
                <!--        <option value="on_delivery">On delivery</option>-->
                <!--        <option value="delivered">Delivered</option>-->
                <!--    </select>-->
                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <div class="from-group mb-0">-->
                <!--        <input type="text" class="form-control" id="search" name="search" placeholder="Type Order code &amp; hit Enter">-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </form>

        <div class="card-body p-3">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order Code:</th>
                        <th data-breakpoints="lg">Num. of Products</th>
                        <th data-breakpoints="lg">Customer</th>
                        <th data-breakpoints="md">Amount</th>
                        <th data-breakpoints="lg">Delivery Status</th>
                        <th data-breakpoints="lg">Order Placed Date</th>
                        <th>Payment Status</th>
                        <th class="text-right">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; foreach ($orders as $order) : ?>
                        <tr>
                            <td>
                                <?= $count++; ?>
                            </td>
                            <td>
                                <a href="#">#<?= $order['order_id'] ?></a>
                            </td>
                            <td>
                            <?= $order['num_of_products']; ?>
                            </td>
                            <td>
                                <?= $order['cust_name'] ?>
                            </td>
                            <td>
                                <?= $order['order_total'] ?>
                            </td>
                            <td> 
                                
                                <span class="badge badge-inline badge-primary"><?=$order['payment_status']?></span>
                               
                            </td>
                            <td><?= $order['created_at'] ?></td>

                            <td>
                                 
                                <span class="badge badge-inline badge-primary"><?=$order['delivery_status']?></span>
                                
                            </td>
                            <td class="text-right">
                                <a href="<?php echo base_url('seller/order-details/'.$order['order_id']); ?>" class="btn btn-soft-info btn-icon btn-circle btn-sm" title="Order Details">
                                    <i class="las la-eye"></i>
                                </a>
                                <a href="#" class="btn btn-soft-warning btn-icon btn-circle btn-sm" title="Download Invoice">
                                    <i class="las la-download"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <div class="aiz-pagination">

            </div>
        </div>
    </div>

</div>
</div>
</div>
</section>


<?php
include 'includes/footer.php';

?>