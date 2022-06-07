<?php 
    include 'includes/head.php';
    include 'includes/header.php';
 ?>
<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div id="order-details-modal-body">

            </div>
        </div>
    </div>
</div>


<section class="pt-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="row aiz-steps arrow-divider">
                    <div class="col done">
                        <div class="text-center text-success">
                            <i class="la-3x mb-2 las la-shopping-cart"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block">1. My Cart</h3>
                        </div>
                    </div>
                    <div class="col done">
                        <div class="text-center text-success">
                            <i class="la-3x mb-2 las la-map"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block">2. Shipping info</h3>
                        </div>
                    </div>
                    
                    
                    <div class="col active">
                        <div class="text-center text-primary">
                            <i class="la-3x mb-2 las la-check-circle"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block">3. Confirmation</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-4">
    <div class="container text-left">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="text-center py-4 mb-4">
                    <i class="la la-check-circle la-3x text-success mb-3"></i>
                    <h1 class="h3 mb-3 fw-600">Thank You for Your Order!</h1>
                    <p class="opacity-70 font-italic">A copy or your order summary has been sent to <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e2d3b3d3a21232b3c0e2b362f233e222b602d2123">[email&#160;protected]</a></p>
                </div>
                <div class="mb-4 bg-white p-4 rounded shadow-sm">
                    <h5 class="fw-600 mb-3 fs-17 pb-2">Order Summary</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <td class="w-50 fw-600">Order date:</td>
                                    <td>03-05-2022 08:01 AM</td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Name:</td>
                                    <td>Paul K. Jensen</td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Email:</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="04677177706b69617644617c65697468612a676b69">[email&#160;protected]</a></td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Shipping address:</td>
                                    <td>3947 West Side Avenue
                                        Hackensack, NJ 07601, College, United States</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <td class="w-50 fw-600">Order status:</td>
                                    <td>Pending</td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Total order amount:</td>
                                    <td>$32.000</td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Shipping:</td>
                                    <td>Flat shipping rate</td>
                                </tr>
                                <tr>
                                    <td class="w-50 fw-600">Payment method:</td>
                                    <td>Cash On Delivery</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 rounded">
                    <div class="card-body">
                        <div class="text-center py-4 mb-4">
                            <h2 class="h5">Order Code: <span class="fw-700 text-primary">20220503-08010273</span></h2>
                        </div>
                        <div>
                            <h5 class="fw-600 mb-3 fs-17 pb-2">Order Details</h5>
                            <div>
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="30%">Product</th>
                                            <th>Variation</th>
                                            <th>Quantity</th>
                                            <th>Delivery Type</th>
                                            <th class="text-right">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <a href="https://demo.activeitzone.com/ecommerce/product/adidas-womens-cotton-jogger-set-ihfxn" target="_blank" class="text-reset">
                                                    Adidas Women&#039;s Parma 16 Shorts
                                                </a>
                                            </td>
                                            <td>
                                                Black
                                            </td>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Home Delivery
                                            </td>
                                            <td class="text-right">$32.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-xl-5 col-md-6 ml-auto mr-0">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td class="text-right">
                                                    <span class="fw-600">$32.000</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                <td class="text-right">
                                                    <span class="font-italic">$0.000</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Tax</th>
                                                <td class="text-right">
                                                    <span class="font-italic">$0.000</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Coupon Discount</th>
                                                <td class="text-right">
                                                    <span class="font-italic">$0.000</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><span class="fw-600">Total</span></th>
                                                <td class="text-right">
                                                    <strong><span>$32.000</span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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



        