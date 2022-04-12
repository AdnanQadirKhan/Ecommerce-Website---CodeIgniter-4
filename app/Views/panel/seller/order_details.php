<?php
include "includes/head.php";
include "includes/header.php";
include "includes/sidebar.php";
?>
<div class="aiz-user-panel">
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">Manage Profile</h1>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h1 class="h2 fs-16 mb-0">Order Details</h1>
        </div>
        <div class="card-body">
            <div class="row gutters-5 mb-4">
 
<form action="<?=base_url('seller/update-details')?>" class="row" method="post">
<div class="col text-center text-md-left"></div>
<input type="hidden" name="order_id" value="<?=$order['order_id']?>">

                <div class="col-md-2 ml-auto">
                    <label for="update_payment_status">Payment Status</label>
                    <select class="form-control aiz-selectpicker" data-minimum-results-for-search="Infinity" name="payment_status" id="update_payment_status">
                         
                            <option  value="<?=$order['payment_status']?> selected"><?=$order['payment_status']?></option>
                            
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
                        
                    </select>
                </div>
                <div class="col-md-3 ml-auto">
                    <label for="update_delivery_status">Delivery Status</label>
                    <select class="form-control aiz-selectpicker" name="delivery_status" data-minimum-results-for-search="Infinity" id="update_delivery_status">
                        <option value="<?=$order['delivery_status']?>" selected><?=$order['delivery_status']?></option>
                        <option value="pending" >Pending</option>
                        <option value="confirmed">Confirmed</option>
                        <option value="picked_up">Picked Up</option>
                        <option value="on_the_way">On The Way</option>
                        <option value="delivered">Delivered</option>
                        <option value="cancelled">Cancel</option>
                    </select>
                </div>
                <div class="col-md-3 ml-auto">
                    <label for="update_tracking_code">Tracking Code (optional)</label>
                    <input type="text" class="form-control" id="update_tracking_code" name="tracking_code" value="<?=$order['tracking_code']?>" />
                </div>
                <div class="col-md-2 ml-auto">
                    <button type="submit" class="btn btn-primary mt-4">Update</button>
                </div>
                </form>
            </div>
            <div class="mb-3">
                 
            </div>
            <div class="row gutters-5 mt-4 pt-4">
                <div class="col text-center text-md-left">
                    <address>
                        <strong class="text-main"><?=$customer['cust_name']?></strong><br />
                        
                        <?=$customer['cust_phone']?><br />
                        <?=$order['order_addr']?>
                    </address>
                </div>
                <div class="col-md-4 ml-auto">
                    <table>
                        <tbody>
                            <tr>
                                <td class="text-main text-bold">Order #</td>
                                <td class="text-right text-info text-bold">
                                <?=$order['order_id']?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-main text-bold">Order status</td>
                                <td class="text-right">
                                    <span class="badge badge-inline badge-info"><?=$order['delivery_status']?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-main text-bold">Order date</td>
                                <td class="text-right"><?=$order['created_at']?></td>
                            </tr>
                            <tr>
                                <td class="text-main text-bold">Total amount</td>
                                <td class="text-right"><?=$order['order_total']?></td>
                            </tr>
                            <tr>
                                <td class="text-main text-bold">Payment method</td>
                                <td class="text-right">Cash On Delivery</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="new-section-sm bord-no" />
            <div class="row">
                <div class="col-lg-12 table-responsive">
                    <table class="table table-bordered aiz-table invoice-summary">
                        <thead>
                            <tr class="bg-trans-dark">
                                <th data-breakpoints="lg" class="min-col">#</th>
                                <th width="10%">Photo</th>
                                <th class="text-uppercase">Description</th>
                                <th data-breakpoints="lg" class="text-uppercase">
                                    Delivery Type
                                </th>
                                <th data-breakpoints="lg" class="min-col text-center text-uppercase">
                                    Qty
                                </th>
                                <th data-breakpoints="lg" class="min-col text-center text-uppercase">
                                    Price
                                </th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; if(!empty($details)): foreach($details as $d): ?>
                            <tr>
                                <td><?= $count++; ?></td>
                                <td>
                                    <a href="<?= base_url('product/' . $d['prod_id']) ?>" target="_blank"><img height="50" src="<?= base_url('public/uploads/products/' . $d['prod_img']) ?>" /></a>
                                </td>
                                <td>
                                    <strong><a href="<?= base_url('product/' . $d['prod_id']) ?>"><?= $d['prod_name'] ?></a></strong><br>
                                    <small><?= $d['prod_description'] ?></small>
                                     
                                </td>
                                <td>Cash on Delivery</td>
                                <td ><?= $d['qty'] ?></td>
                                <td ><?= $d['new_price'] ?></td> 
                            </tr>
                            <?php  endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfix float-right">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <strong class="text-muted">Sub Total :</strong>
                            </td>
                            <td>Rs:<?=$order['order_total']?></td>
                        </tr>
                        <tr>
                            <td>
                                <strong class="text-muted">Tax :</strong>
                            </td>
                            <td>Rs:0.000</td>
                        </tr>
                        <tr>
                            <td>
                                <strong class="text-muted">Shipping :</strong>
                            </td>
                            <td>No included in this bill</td>
                        </tr>
                        
                        <tr>
                            <td>
                                <strong class="text-muted">Total :</strong>
                            </td>
                            <td class="text-muted h5">Rs:<?=$order['order_total']?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right no-print">
                    <a href="#" type="button" class="btn btn-icon btn-light"><i class="las la-print"></i></a>
                </div>
            </div>
        </div>
    </div>



    <!-- .aiz-main-content -->
</div>
</div>
</section>


<?php include 'includes/footer.php'; ?>