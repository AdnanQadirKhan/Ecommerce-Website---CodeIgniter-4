<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="app-url" content="ci4/">
    <meta name="file-base-url" content="ci4/public/">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="description" content="eCommerce shop for multi vendors" />
    <meta name="keywords" content="ecommerce, multivendor">
    <meta name="author" content="Adnan Qadir, Adnan Dani">


    <!-- Favicon -->
    <link rel="icon" href="#">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/vendors.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/aiz-core.css">

    <link href="<?= base_url() ?>/public/assets/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- <script> -->
    
   
    <style>
        .aiz-main-wrapper.d-flex.flex-column {
            margin-top: -9px !important;
        }

        .shopping-cart .shopping-cart-items img {
            float: left;
            margin-right: 12px;
            width: 70px;
            height: 70px;
        }
    </style>

</head>

<body>
    <section class="py-4">
        <div class="container text-left">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="text-center py-4 mb-4">
                        <i class="la la-check-circle la-3x text-success mb-3"></i>
                        <h1 class="h3 mb-3 fw-600">Thank You for Your Order!</h1>
                        <p class="opacity-70 font-italic">A copy or your order summary has been sent to <a href="/cdn-cgi/l/email-protection" class="__cf_email__" ></a></p>
                    </div>
                    <div class="mb-4 bg-white p-4 rounded shadow-sm">
                        <h5 class="fw-600 mb-3 fs-17 pb-2">Order Summary</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table">
                                    <tr>
                                        <td class="w-50 fw-600">Order date:</td>
                                        <td>06-04-2022 13:16 PM</td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">Name:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">Email:</td>
                                        <td><a href="#" class="__cf_email__" ></a></td>
                                    </tr>
                                    <tr>
                                  
                                        <td class="w-50 fw-600">Shipping address:</td>
                                        <td></td>
                                    </tr>
                                
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table">
                                    <?php foreach($cart_items as $o) :?>
                                    <tr>
                                        <td class="w-50 fw-600">Order status:</td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">Total order amount:</td>
                                        <td><?= $o['price'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">Shipping:</td>
                                        <td>Flat shipping rate</td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600">Payment method:</td>
                                        <td>Cash On Delivery</td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--<div class="card shadow-sm border-0 rounded">-->
                    <!--    <div class="card-body">-->
                    <!--        <div class="text-center py-4 mb-4">-->
                    <!--            <h2 class="h5">Order Code: <span class="fw-700 text-primary"></span></h2>-->
                    <!--        </div>-->
                    <!--        <div>-->
                    <!--            <h5 class="fw-600 mb-3 fs-17 pb-2">Order Details</h5>-->
                    <!--            <div>-->
                    <!--                <table class="table table-responsive-md">-->
                    <!--                    <thead>-->
                    <!--                        <tr>-->
                    <!--                            <th>#</th>-->
                    <!--                            <th width="30%">Product</th>-->
                    <!--                            <th>Variation</th>-->
                    <!--                            <th>Quantity</th>-->
                    <!--                            <th>Delivery Type</th>-->
                    <!--                            <th class="text-right">Price</th>-->
                    <!--                        </tr>-->
                    <!--                    </thead>-->
                    <!--                    <tbody>-->
                    <!--                        
                    <!--                        <tr>-->
                    <!--                            <td>1</td>-->
                    <!--                            <td>-->
                    <!--                                <a href="#" target="_blank" class="text-reset">-->
                    <!--                                    Adidas Women&#039;s Cotton Jogger Set-->
                    <!--                                </a>-->
                    <!--                            </td>-->
                    <!--                            <td>-->

                    <!--                            </td>-->
                    <!--                            <td>-->
                    <!--                                2-->
                    <!--                            </td>-->
                    <!--                            <td>-->
                    <!--                                Home Delivery-->
                    <!--                            </td>-->
                    <!--                            <td class="text-right">80RM</td>-->
                    <!--                        </tr>-->
                    <!--                        
                    <!--                    </tbody>-->
                    <!--                </table>-->
                    <!--            </div>-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-xl-5 col-md-6 ml-auto mr-0">-->
                    <!--                    <table class="table ">-->
                    <!--                        <tbody>-->
                    <!--                            <tr>-->
                    <!--                                <th>Subtotal</th>-->
                    <!--                                <td class="text-right">-->
                    <!--                                    <span class="fw-600">100RM</span>-->
                    <!--                                </td>-->
                    <!--                            </tr>-->
                    <!--                            <tr>-->
                    <!--                                <th>Shipping</th>-->
                    <!--                                <td class="text-right">-->
                    <!--                                    <span class="font-italic">0RM</span>-->
                    <!--                                </td>-->
                    <!--                            </tr>-->
                    <!--                            <tr>-->
                    <!--                                <th>Tax</th>-->
                    <!--                                <td class="text-right">-->
                    <!--                                    <span class="font-italic">0RM</span>-->
                    <!--                                </td>-->
                    <!--                            </tr>-->
                    <!--                            <tr>-->
                    <!--                                <th>Coupon Discount</th>-->
                    <!--                                <td class="text-right">-->
                    <!--                                    <span class="font-italic">0RM</span>-->
                    <!--                                </td>-->
                    <!--                            </tr>-->
                    <!--                            <tr>-->
                    <!--                                <th><span class="fw-600">Total</span></th>-->
                    <!--                                <td class="text-right">-->
                    <!--                                    <strong><span>100RM</span></strong>-->
                    <!--                                </td>-->
                    <!--                            </tr>-->
                    <!--                        </tbody>-->
                    <!--                    </table>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>

 
    

    </div>
 

    </div>






    <!-- SCRIPTS -->
    <script src="<?= base_url('public/assets/js/vendors.js') ?>"></script>
    <script src="<?= base_url('public/assets/js/aiz-core.js') ?>"></script>

 
  
  
   
</body>

</html>