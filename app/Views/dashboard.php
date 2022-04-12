<?php 
    include 'includes/head.php';
    include 'includes/header.php';
 ?>
<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div id="order-details-modal-body">

            </div>
        </div>
    </div>
</div>


<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            <div class="aiz-user-sidenav-wrap position-relative z-1 shadow-sm">
                <div class="aiz-user-sidenav rounded overflow-auto c-scrollbar-light pb-5 pb-xl-0">
                    <div class="p-4 text-xl-center mb-4 border-bottom bg-primary text-white position-relative">
                        <span class="avatar avatar-md mb-3">
                            <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/W2WntsLSz4YC5BD7ZtaAhgaW6FOyzPDWKOVsrJgp.jpg"
                                onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                        </span>
                        <h4 class="h5 fs-16 mb-1 fw-600">Mark And Spenser</h4>
                        <div class="text-truncate opacity-60"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="0c7f696060697e4c69746d617c6069226f6361">[email&#160;protected]</a>
                        </div>
                    </div>

                    <div class="sidemnenu mb-3">
                        <ul class="aiz-side-nav-list px-2" data-toggle="aiz-side-menu">

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/dashboard"
                                    class="aiz-side-nav-link active">
                                    <i class="las la-home aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Dashboard</span>
                                </a>
                            </li>


                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/purchase_history"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-file-alt aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Purchase History</span>
                                    <span class="badge badge-inline badge-success">new</span> </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/digital_purchase_history"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-download aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Downloads</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/sent-refund-request"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-backward aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Sent Refund Request</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/wishlists" class="aiz-side-nav-link ">
                                    <i class="la la-heart-o aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Wishlist</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/compare" class="aiz-side-nav-link ">
                                    <i class="la la-refresh aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Compare</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/seller/products"
                                    class="aiz-side-nav-link ">
                                    <i class="lab la-sketch aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Products</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/product-bulk-upload/index"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-upload aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Product Bulk Upload</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/seller/digitalproducts"
                                    class="aiz-side-nav-link ">
                                    <i class="lab la-sketch aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Digital Products</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/seller/uploads"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-folder-open aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Uploaded Files</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/seller/coupons"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-bullhorn aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Coupon</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/customer_products"
                                    class="aiz-side-nav-link ">
                                    <i class="lab la-sketch aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Classified Products</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="javascript:void(0);" class="aiz-side-nav-link">
                                    <i class="las la-gavel aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Auction</span>
                                    <span class="aiz-side-nav-arrow"></span>
                                </a>
                                <ul class="aiz-side-nav-list level-2">
                                    <li class="aiz-side-nav-item">
                                        <a href="https://demo.activeitzone.com/ecommerce/auction_product_bids"
                                            class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">Bidded Products</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="https://demo.activeitzone.com/ecommerce/auction/purchase_history"
                                            class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">Purchase History</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/seller/pos" class="aiz-side-nav-link ">
                                    <i class="las la-fax aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">POS Manager</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/orders" class="aiz-side-nav-link ">
                                    <i class="las la-money-bill aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Orders</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/refund-request"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-backward aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Received Refund Request</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/seller/reviews"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-star-half-alt aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Product Reviews</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/shops" class="aiz-side-nav-link ">
                                    <i class="las la-cog aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Shop Setting</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/seller/payments"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-history aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Payment History</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/withdraw_requests"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-money-bill-wave-alt aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Money Withdraw</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/commission-log"
                                    class="aiz-side-nav-link">
                                    <i class="las la-file-alt aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Commission History</span>
                                </a>
                            </li>


                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/conversations"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-comment aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Conversations</span>
                                </a>
                            </li>


                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/wallet" class="aiz-side-nav-link ">
                                    <i class="las la-dollar-sign aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">My Wallet</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/earning-points"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-dollar-sign aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Earning Points</span>
                                </a>
                            </li>



                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/support_ticket"
                                    class="aiz-side-nav-link ">
                                    <i class="las la-atom aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Support Ticket</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/profile" class="aiz-side-nav-link ">
                                    <i class="las la-user aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Manage Profile</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <hr>
                    <h4 class="h5 fw-600 text-center">Sold Amount</h4>
                    <div class="widget-balance pb-3 pt-1">
                        <div class="text-center">
                            <div class="heading-4 strong-700 mb-4">
                                <small class="d-block fs-12 mb-2">Your sold amount (current month)</small>
                                <span class="btn btn-primary fw-600 fs-18">$0.000</span>
                            </div>
                            <table class="table table-borderless">
                                <tr>
                                    <td class="p-1" width="60%">
                                        Total Sold:
                                    </td>
                                    <td class="p-1 fw-600" width="40%">
                                        $60.000
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" width="60%">
                                        Last Month Sold:
                                    </td>
                                    <td class="p-1 fw-600" width="40%">
                                        $0.000
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="fixed-bottom d-xl-none bg-white border-top d-flex justify-content-between px-2"
                    style="box-shadow: 0 -5px 10px rgb(0 0 0 / 10%);">
                    <a class="btn btn-sm p-2 d-flex align-items-center"
                        href="https://demo.activeitzone.com/ecommerce/logout">
                        <i class="las la-sign-out-alt fs-18 mr-2"></i>
                        <span>Logout</span>
                    </a>
                    <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static"
                        data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                        <i class="las la-times la-2x"></i>
                    </button>
                </div>
            </div>
            <div class="aiz-user-panel">
                <div class="aiz-titlebar mt-2 mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="h3">Dashboard</h1>
                        </div>
                    </div>
                </div>

                <div class="row gutters-10">
                    <div class="col-md-3">
                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="h3 fw-700">
                                    12
                                </div>
                                <div class="opacity-50">Products</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                    d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bg-grad-1 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="h3 fw-700">
                                    1
                                </div>
                                <div class="opacity-50">Total sale</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                    d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bg-grad-2 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="h3 fw-700">$60.000</div>
                                <div class="opacity-50">Total earnings</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                    d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="h3 fw-700">
                                    1
                                </div>
                                <div class="opacity-50">Successful orders</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                    d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Orders</h5>
                            </div>
                            <div class="card-body">
                                <table class="table aiz-table mb-0">
                                    <tr>
                                        <td>Total orders:</td>
                                        <td>1</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Pending orders:</td>
                                        <td>0</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Cancelled orders:</td>
                                        <td>0</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Successful orders:</td>
                                        <td>1</strong></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card p-5 text-center">
                            <div class="mb-3">
                                <img loading="lazy"
                                    src="https://demo.activeitzone.com/ecommerce/public/assets/img/verified.png" alt=""
                                    width="130">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">Products</h6>
                            </div>
                            <div class="card-body">
                                <table class="table aiz-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Product</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Men Clothing &amp; Fashion</td>
                                            <td>12</td>
                                        </tr>
                                </table>
                                <br>
                                <div class="text-center">
                                    <a href="https://demo.activeitzone.com/ecommerce/seller/product/upload"
                                        class="btn btn-primary d-inline-block">Add New product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">Purchased Package</h6>
                            </div>
                            <div class="card-body text-center">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/4dyPf8pxtHvlOrNZbwIUVlhnfwRNvyCcHiC1AlVW.jpg"
                                    class="img-fluid mb-4 h-110px">
                                <p class="mb-1 text-muted">Product Upload Limit: 500 times</p>
                                <p class="text-muted mb-4">Package Expires at: 2021-03-02</p>
                                <h6 class="fw-600 mb-3 text-primary">Current Package: Platinum</h6>
                                <div class="text-center">
                                    <a href="https://demo.activeitzone.com/ecommerce/seller-packages"
                                        class="btn btn-soft-primary">Upgrade Package</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4 p-4 text-center">
                            <div class="h5 fw-600">Shop</div>
                            <p>Manage &amp; organize your shop</p>
                            <a href="https://demo.activeitzone.com/ecommerce/shops" class="btn btn-soft-primary">Go to
                                setting</a>
                        </div>
                        <div class="card mb-4 p-4 text-center">
                            <div class="h5 fw-600">Payment</div>
                            <p>Configure your payment method</p>
                            <a href="https://demo.activeitzone.com/ecommerce/profile"
                                class="btn btn-soft-primary">Configure Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="bg-white border-top mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block"
                    href="https://demo.activeitzone.com/ecommerce/terms">
                    <i class="la la-file-text la-3x text-primary mb-2"></i>
                    <h4 class="h6">Terms &amp; conditions</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block"
                    href="https://demo.activeitzone.com/ecommerce/return-policy">
                    <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                    <h4 class="h6">Return Policy</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block"
                    href="https://demo.activeitzone.com/ecommerce/support-policy">
                    <i class="la la-support la-3x text-primary mb-2"></i>
                    <h4 class="h6">Support Policy</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left border-right text-center p-4 d-block"
                    href="https://demo.activeitzone.com/ecommerce/privacy-policy">
                    <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                    <h4 class="h6">Privacy Policy</h4>
                </a>
            </div>
        </div>
    </div>
</section>
<?php 
    include 'includes/footer.php';
 ?>