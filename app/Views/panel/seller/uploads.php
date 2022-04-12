<?php   
    include "includes/head.php";
    include "includes/header.php";
    include "includes/sidebar.php";
 ?>
                    <div class="aiz-user-panel">
                        <div class="aiz-titlebar text-left mt-2 mb-3">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h1 class="h3">All uploaded files</h1>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <a href="https://demo.activeitzone.com/ecommerce/seller/uploads/new"
                                        class="btn btn-primary">
                                        <span>Upload New File</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <form id="sort_uploads" action="">
                                <div class="card-header row gutters-5">
                                    <div class="col-md-3">
                                        <h5 class="mb-0 h6">All files</h5>
                                    </div>
                                    <div class="col-md-3 ml-auto mr-0">
                                        <select class="form-control form-control-xs aiz-selectpicker" name="sort"
                                            onchange="sort_uploads()">
                                            <option value="newest">Sort by newest</option>
                                            <option value="oldest">Sort by oldest</option>
                                            <option value="smallest">Sort by smallest</option>
                                            <option value="largest">Sort by largest</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control form-control-xs" name="search"
                                            placeholder="Search your files" value="">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>
                            <div class="card-body">
                                <div class="row gutters-5">
                                    <div class="col-auto w-140px w-lg-220px">
                                        <div class="aiz-file-box">
                                            <div class="dropdown-file">
                                                <a class="dropdown-link" data-toggle="dropdown">
                                                    <i class="la la-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"
                                                        onclick="detailsInfo(this)" data-id="988">
                                                        <i class="las la-info-circle mr-2"></i>
                                                        <span>Details Info</span>
                                                    </a>
                                                    <a href="../public/uploads/all/W2WntsLSz4YC5BD7ZtaAhgaW6FOyzPDWKOVsrJgp-9.jpg"
                                                        target="_blank" download="2.jpg" class="dropdown-item">
                                                        <i class="la la-download mr-2"></i>
                                                        <span>Download</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"
                                                        onclick="copyUrl(this)"
                                                        data-url="https://demo.activeitzone.com/ecommerce/public/uploads/all/W2WntsLSz4YC5BD7ZtaAhgaW6FOyzPDWKOVsrJgp.jpg">
                                                        <i class="las la-clipboard mr-2"></i>
                                                        <span>Copy Link</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item confirm-alert"
                                                        data-href="https://demo.activeitzone.com/ecommerce/seller/uploads/destroy/988"
                                                        data-target="#delete-modal">
                                                        <i class="las la-trash mr-2"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card card-file aiz-uploader-select c-default" title="2.jpg">
                                                <div class="card-file-thumb">
                                                    <img src="../public/uploads/all/W2WntsLSz4YC5BD7ZtaAhgaW6FOyzPDWKOVsrJgp-9.jpg"
                                                        class="img-fit">
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="d-flex">
                                                        <span class="text-truncate title">2</span>
                                                        <span class="ext">.jpg</span>
                                                    </h6>
                                                    <p>74.07 KB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto w-140px w-lg-220px">
                                        <div class="aiz-file-box">
                                            <div class="dropdown-file">
                                                <a class="dropdown-link" data-toggle="dropdown">
                                                    <i class="la la-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"
                                                        onclick="detailsInfo(this)" data-id="830">
                                                        <i class="las la-info-circle mr-2"></i>
                                                        <span>Details Info</span>
                                                    </a>
                                                    <a href="../public/uploads/all/plLTtcXA6knF8Qtlr1PbE7BUD7eOgHOjHDlITWsb.png"
                                                        target="_blank" download="Seller banner 6.png"
                                                        class="dropdown-item">
                                                        <i class="la la-download mr-2"></i>
                                                        <span>Download</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"
                                                        onclick="copyUrl(this)"
                                                        data-url="https://demo.activeitzone.com/ecommerce/public/uploads/all/plLTtcXA6knF8Qtlr1PbE7BUD7eOgHOjHDlITWsb.png">
                                                        <i class="las la-clipboard mr-2"></i>
                                                        <span>Copy Link</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item confirm-alert"
                                                        data-href="https://demo.activeitzone.com/ecommerce/seller/uploads/destroy/830"
                                                        data-target="#delete-modal">
                                                        <i class="las la-trash mr-2"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card card-file aiz-uploader-select c-default"
                                                title="Seller banner 6.png">
                                                <div class="card-file-thumb">
                                                    <img src="../public/uploads/all/plLTtcXA6knF8Qtlr1PbE7BUD7eOgHOjHDlITWsb.png"
                                                        class="img-fit">
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="d-flex">
                                                        <span class="text-truncate title">Seller banner 6</span>
                                                        <span class="ext">.png</span>
                                                    </h6>
                                                    <p>242.2 KB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto w-140px w-lg-220px">
                                        <div class="aiz-file-box">
                                            <div class="dropdown-file">
                                                <a class="dropdown-link" data-toggle="dropdown">
                                                    <i class="la la-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"
                                                        onclick="detailsInfo(this)" data-id="829">
                                                        <i class="las la-info-circle mr-2"></i>
                                                        <span>Details Info</span>
                                                    </a>
                                                    <a href="../public/uploads/all/1qURbgoZyNeWTR7zoVeYPmZdPdwvNmWtDP5iMwK3.png"
                                                        target="_blank" download="Seller banner 5.png"
                                                        class="dropdown-item">
                                                        <i class="la la-download mr-2"></i>
                                                        <span>Download</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"
                                                        onclick="copyUrl(this)"
                                                        data-url="https://demo.activeitzone.com/ecommerce/public/uploads/all/1qURbgoZyNeWTR7zoVeYPmZdPdwvNmWtDP5iMwK3.png">
                                                        <i class="las la-clipboard mr-2"></i>
                                                        <span>Copy Link</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item confirm-alert"
                                                        data-href="https://demo.activeitzone.com/ecommerce/seller/uploads/destroy/829"
                                                        data-target="#delete-modal">
                                                        <i class="las la-trash mr-2"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card card-file aiz-uploader-select c-default"
                                                title="Seller banner 5.png">
                                                <div class="card-file-thumb">
                                                    <img src="../public/uploads/all/1qURbgoZyNeWTR7zoVeYPmZdPdwvNmWtDP5iMwK3.png"
                                                        class="img-fit">
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="d-flex">
                                                        <span class="text-truncate title">Seller banner 5</span>
                                                        <span class="ext">.png</span>
                                                    </h6>
                                                    <p>449.63 KB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto w-140px w-lg-220px">
                                        <div class="aiz-file-box">
                                            <div class="dropdown-file">
                                                <a class="dropdown-link" data-toggle="dropdown">
                                                    <i class="la la-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"
                                                        onclick="detailsInfo(this)" data-id="222">
                                                        <i class="las la-info-circle mr-2"></i>
                                                        <span>Details Info</span>
                                                    </a>
                                                    <a href="../public/uploads/all/e0UwlfT9qvCJaXM3hQiznUHR3gU9AaiiQYXetQsd.jpg"
                                                        target="_blank" download="markand-spenser.jpg"
                                                        class="dropdown-item">
                                                        <i class="la la-download mr-2"></i>
                                                        <span>Download</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"
                                                        onclick="copyUrl(this)"
                                                        data-url="https://demo.activeitzone.com/ecommerce/public/uploads/all/e0UwlfT9qvCJaXM3hQiznUHR3gU9AaiiQYXetQsd.jpg">
                                                        <i class="las la-clipboard mr-2"></i>
                                                        <span>Copy Link</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item confirm-alert"
                                                        data-href="https://demo.activeitzone.com/ecommerce/seller/uploads/destroy/222"
                                                        data-target="#delete-modal">
                                                        <i class="las la-trash mr-2"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card card-file aiz-uploader-select c-default"
                                                title="markand-spenser.jpg">
                                                <div class="card-file-thumb">
                                                    <img src="../public/uploads/all/e0UwlfT9qvCJaXM3hQiznUHR3gU9AaiiQYXetQsd.jpg"
                                                        class="img-fit">
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="d-flex">
                                                        <span class="text-truncate title">markand-spenser</span>
                                                        <span class="ext">.jpg</span>
                                                    </h6>
                                                    <p>7.85 KB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="aiz-pagination mt-3">

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

        <section class="bg-dark py-5 text-light footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4 text-center text-md-left">
                        <div class="mt-4">
                            <a href="https://demo.activeitzone.com/ecommerce" class="d-block">
                                <img class="lazyload" src="../public/assets/img/placeholder-rect-11.jpg"
                                    data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/ikb1MZlSZBdn6Vn0o8JDFrWuVEeuGMBHV6igl9fc.png"
                                    alt="Active eCommerce CMS" height="44">
                            </a>
                            <div class="my-3">
                                <span style="color: rgb(242, 243, 248); font-family: sans", sans-serif;=""
                                    background-color:="" rgb(17,="" 23,="" 35);"="">Complete system for your eCommerce
                                    business</span>
                            </div>
                            <div class="d-inline-block d-md-block mb-4">
                                <form class="form-inline" method="POST"
                                    action="https://demo.activeitzone.com/ecommerce/subscribers">
                                    <input type="hidden" name="_token" value="hTTtByTGxKDOkn8VM6QgTmExEVvAWIOTgTjKn1NG">
                                    <div class="form-group mb-0">
                                        <input type="email" class="form-control" placeholder="Your Email Address"
                                            name="email" required="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                            <div class="w-300px mw-100 mx-auto mx-md-0">
                                <a href="#" target="_blank" class="d-inline-block mr-3 ml-0">
                                    <img src="../public/assets/img/play-11.png" class="mx-100 h-40px">
                                </a>
                                <a href="#" target="_blank" class="d-inline-block">
                                    <img src="../public/assets/img/app-11.png" class="mx-100 h-40px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                Contact Info
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="d-block opacity-30">Address:</span>
                                    <span class="d-block opacity-70">Demo</span>
                                </li>
                                <li class="mb-2">
                                    <span class="d-block opacity-30">Phone:</span>
                                    <span class="d-block opacity-70">123456789</span>
                                </li>
                                <li class="mb-2">
                                    <span class="d-block opacity-30">Email:</span>
                                    <span class="d-block opacity-70">
                                        <a href="/cdn-cgi/l/email-protection#741011191b5a110c1519041811341319151d185a171b19"
                                            class="text-reset"><span class="__cf_email__"
                                                data-cfemail="93f7f6fefcbdf6ebf2fee3fff6d3f4fef2faffbdf0fcfe">[email&#160;protected]</span></a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                Quick Links
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                        Help
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                        Support
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                        Join Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-2">
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                My Account
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset"
                                        href="https://demo.activeitzone.com/ecommerce/logout">
                                        Logout
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset"
                                        href="https://demo.activeitzone.com/ecommerce/purchase_history">
                                        Order History
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset"
                                        href="https://demo.activeitzone.com/ecommerce/wishlists">
                                        My Wishlist
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset"
                                        href="https://demo.activeitzone.com/ecommerce/track-your-order">
                                        Track Order
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-light"
                                        href="https://demo.activeitzone.com/ecommerce/affiliate">Be an affiliate
                                        partner</a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center text-md-left mt-4">
                            <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                Be a Seller
                            </h4>
                            <a href="https://demo.activeitzone.com/ecommerce/shops/create"
                                class="btn btn-primary btn-sm shadow-md">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="text-center text-md-left" current-verison="5.5.6">
                            © Active eCommerce CMS 2021
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-inline my-3 my-md-0 social colored text-center">
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="facebook"><i class="lab la-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="instagram"><i class="lab la-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="youtube"><i class="lab la-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" target="_blank" class="linkedin"><i class="lab la-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <img src="../public/uploads/all/NankP5emHOKcdCWqX6Bks1Qa63iDgoLA6WPGn7oe-11.png"
                                        height="30" class="mw-100 h-auto" style="max-height: 30px">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top"
            style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
            <div class="row align-items-center gutters-5">
                <div class="col">
                    <a href="https://demo.activeitzone.com/ecommerce" class="text-reset d-block text-center pb-2 pt-3">
                        <i class="las la-home fs-20 opacity-60 "></i>
                        <span class="d-block fs-10 fw-600 opacity-60 ">Home</span>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.activeitzone.com/ecommerce/categories"
                        class="text-reset d-block text-center pb-2 pt-3">
                        <i class="las la-list-ul fs-20 opacity-60 "></i>
                        <span class="d-block fs-10 fw-600 opacity-60 ">Categories</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="https://demo.activeitzone.com/ecommerce/cart"
                        class="text-reset d-block text-center pb-2 pt-3">
                        <span
                            class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px"
                            style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                            <i class="las la-shopping-bag la-2x text-white"></i>
                        </span>
                        <span class="d-block mt-1 fs-10 fw-600 opacity-60 ">
                            Cart
                            (<span class="cart-count">0</span>)
                        </span>
                    </a>
                </div>
                <div class="col">
                    <a href="https://demo.activeitzone.com/ecommerce/all-notifications"
                        class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-inline-block position-relative px-2">
                            <i class="las la-bell fs-20 opacity-60 "></i>
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60 ">Notifications</span>
                    </a>
                </div>
                <div class="col">
                    <a href="javascript:void(0)" class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb"
                        data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
                        <span class="d-block mx-auto">
                            <img src="../public/assets/img/avatar-place-11.png" class="rounded-circle size-20px">
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">Account</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
            <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static"
                data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
            <div class="collapse-sidebar bg-white">
                <div class="aiz-user-sidenav-wrap position-relative z-1 shadow-sm">
                    <div class="aiz-user-sidenav rounded overflow-auto c-scrollbar-light pb-5 pb-xl-0">
                        <div class="p-4 text-xl-center mb-4 border-bottom bg-primary text-white position-relative">
                            <span class="avatar avatar-md mb-3">
                                <img src="../public/uploads/all/W2WntsLSz4YC5BD7ZtaAhgaW6FOyzPDWKOVsrJgp-9.jpg"
                                    onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                            </span>
                            <h4 class="h5 fs-16 mb-1 fw-600">Mark And Spenser</h4>
                            <div class="text-truncate opacity-60"><a href="/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="0675636a6a637446637e676b766a632865696b">[email&#160;protected]</a>
                            </div>
                        </div>

                        <div class="sidemnenu mb-3">
                            <ul class="aiz-side-nav-list px-2" data-toggle="aiz-side-menu">

                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/dashboard"
                                        class="aiz-side-nav-link ">
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
                                    <a href="https://demo.activeitzone.com/ecommerce/wishlists"
                                        class="aiz-side-nav-link ">
                                        <i class="la la-heart-o aiz-side-nav-icon"></i>
                                        <span class="aiz-side-nav-text">Wishlist</span>
                                    </a>
                                </li>

                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/compare"
                                        class="aiz-side-nav-link ">
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
                                    <a href="uploads.html" class="aiz-side-nav-link ">
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
                                    <a href="https://demo.activeitzone.com/ecommerce/seller/pos"
                                        class="aiz-side-nav-link ">
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
                                    <a href="https://demo.activeitzone.com/ecommerce/profile"
                                        class="aiz-side-nav-link ">
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
            </div>
        </div>

    </div>

    <div class="aiz-cookie-alert shadow-xl">
        <div class="p-3 bg-dark rounded">
            <div class="text-white mb-3">
                <p>We use cookie for better user experience, check our policy <a
                        href="https://demo.activeitzone.com/ecommerce/privacypolicy">here</a>&nbsp;</p>
            </div>
            <button class="btn btn-primary aiz-cookie-accept">
                Ok. I Understood
            </button>
        </div>
    </div>

    <div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
        <div class="absolute-full bg-black opacity-60"></div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
            <div class="modal-content position-relative border-0 rounded-0">
                <div class="aiz-editor-data">
                    <p><img src="../public/uploads/all/dwaK3um8tkVgEsgmZN1peQb844tFRAIQ1wAS8e3z-11.png"
                            style="width: 100%;"></p>
                    <p style="text-align: center; "><br></p>
                    <h2 style="text-align: center; "><b>Subscribe to Our Newsletter</b></h2>
                    <p style="text-align: center;">Subscribe our newsletter for coupon, offer and exciting promotional
                        discount..</p>
                </div>
                <div class="pb-5 pt-4 px-5">
                    <form class="" method="POST" action="https://demo.activeitzone.com/ecommerce/subscribers">
                        <input type="hidden" name="_token" value="hTTtByTGxKDOkn8VM6QgTmExEVvAWIOTgTjKn1NG">
                        <div class="form-group mb-0">
                            <input type="email" class="form-control" placeholder="Your Email Address" name="email"
                                required="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">
                            Subscribe Now
                        </button>
                    </form>
                </div>
                <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session"
                    data-key="website-popup" data-value="removed" data-toggle="remove-parent"
                    data-parent=".website-popup">
                    <i class="la la-close fs-20"></i>
                </button>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min-14.js"></script>
    <script>
        function confirm_modal(delete_url) {
            jQuery('#confirm-delete').modal('show', { backdrop: 'static' });
            document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>

                <div class="modal-body">
                    <p>Delete confirmation message</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size"
            role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true" class="la-2x">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>

    <div id="delete-modal" class="modal fade">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">Delete Confirmation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mt-1">Are you sure to delete this file?</p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">Cancel</button>
                    <a href="" class="btn btn-primary mt-2 comfirm-link">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <div id="info-modal" class="modal fade">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h6">File Info</h5>
                    <button type="button" class="close" data-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body c-scrollbar-light position-relative" id="info-modal-content">
                    <div class="c-preloader text-center absolute-center">
                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <script src="../public/assets/js/vendors-14.js"></script>
    <script src="../public/assets/js/aiz-core-14.js"></script>



    <script type="text/javascript">
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v3.3'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="fb-root"></div>
    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution="setup_tool" page_id="">
    </div>

    <script>
    </script>

    <script>

        $(document).ready(function () {
            $('.category-nav-element').each(function (i, el) {
                $(el).on('mouseover', function () {
                    if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                        $.post('https://demo.activeitzone.com/ecommerce/category/nav-element-list', { _token: AIZ.data.csrf, id: $(el).data('id') }, function (data) {
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function () {
                    $(this).on('click', function (e) {
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('https://demo.activeitzone.com/ecommerce/language', { _token: AIZ.data.csrf, locale: locale }, function (data) {
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function () {
                    $(this).on('click', function (e) {
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('https://demo.activeitzone.com/ecommerce/currency', { _token: AIZ.data.csrf, currency_code: currency_code }, function (data) {
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function () {
            search();
        });

        $('#search').on('focus', function () {
            search();
        });

        function search() {
            var searchKey = $('#search').val();
            if (searchKey.length > 0) {
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('https://demo.activeitzone.com/ecommerce/ajax-search', { _token: AIZ.data.csrf, search: searchKey }, function (data) {
                    if (data == '0') {
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                        $('.search-preloader').addClass('d-none');

                    }
                    else {
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            }
            else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        function updateNavCart(view, count) {
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key) {
            $.post('https://demo.activeitzone.com/ecommerce/cart/removeFromCart', {
                _token: AIZ.data.csrf,
                id: key
            }, function (data) {
                updateNavCart(data.nav_cart_view, data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "Item has been removed from cart");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
            });
        }

        function addToCompare(id) {
            $.post('https://demo.activeitzone.com/ecommerce/compare/addToCompare', { _token: AIZ.data.csrf, id: id }, function (data) {
                $('#compare').html(data);
                AIZ.plugins.notify('success', "Item has been added to compare list");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
            });
        }

        function addToWishList(id) {
            $.post('https://demo.activeitzone.com/ecommerce/wishlists', { _token: AIZ.data.csrf, id: id }, function (data) {
                if (data != 0) {
                    $('#wishlist').html(data);
                    AIZ.plugins.notify('success', "Item has been added to wishlist");
                }
                else {
                    AIZ.plugins.notify('warning', "Please login first");
                }
            });
        }

        function showAddToCartModal(id) {
            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('https://demo.activeitzone.com/ecommerce/cart/show-cart-modal', { _token: AIZ.data.csrf, id: id }, function (data) {
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function () {
            getVariantPrice();
        });

        function getVariantPrice() {
            if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
                $.ajax({
                    type: "POST",
                    url: 'https://demo.activeitzone.com/ecommerce/product/variant_price',
                    data: $('#option-choice-form').serializeArray(),
                    success: function (data) {

                        $('.product-gallery-thumb .carousel-box').each(function (i) {
                            if ($(this).data('variation') && data.variation == $(this).data('variation')) {
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('#available-quantity').html(data.quantity);
                        $('.input-number').prop('max', data.max_limit);
                        if (parseInt(data.in_stock) == 0 && data.digital == 0) {
                            $('.buy-now').addClass('d-none');
                            $('.add-to-cart').addClass('d-none');
                            $('.out-of-stock').removeClass('d-none');
                        }
                        else {
                            $('.buy-now').removeClass('d-none');
                            $('.add-to-cart').removeClass('d-none');
                            $('.out-of-stock').addClass('d-none');
                        }
                    }
                });
            }
        }

        function checkAddToCartValidity() {
            var names = {};
            $('#option-choice-form input:radio').each(function () { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function () { // then count them
                count++;
            });

            if ($('#option-choice-form input:radio:checked').length == count) {
                return true;
            }

            return false;
        }

        function addToCart() {
            if (checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: 'https://demo.activeitzone.com/ecommerce/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function (data) {

                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        $('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data.modal_view);
                        AIZ.extra.plusMinus();
                        AIZ.plugins.slickCarousel();
                        updateNavCart(data.nav_cart_view, data.cart_count);
                    }
                });
            }
            else {
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }

        function buyNow() {
            if (checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: 'https://demo.activeitzone.com/ecommerce/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function (data) {
                        if (data.status == 1) {

                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view, data.cart_count);

                            window.location.replace("https://demo.activeitzone.com/ecommerce/cart");
                        }
                        else {
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                        }
                    }
                });
            }
            else {
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }

        function show_purchase_history_details(order_id) {
            $('#order-details-modal-body').html(null);

            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }

            $.post('https://demo.activeitzone.com/ecommerce/purchase_history/details', { _token: AIZ.data.csrf, order_id: order_id }, function (data) {
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
            });
        }


    </script>

    <script type="text/javascript">
        function detailsInfo(e) {
            $('#info-modal-content').html('<div class="c-preloader text-center absolute-center"><i class="las la-spinner la-spin la-3x opacity-70"></i></div>');
            var id = $(e).data('id')
            $('#info-modal').modal('show');
            $.post('https://demo.activeitzone.com/ecommerce/seller/uploads/file-info', { _token: AIZ.data.csrf, id: id }, function (data) {
                $('#info-modal-content').html(data);
                // console.log(data);
            });
        }
        function copyUrl(e) {
            var url = $(e).data('url');
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(url).select();
            try {
                document.execCommand("copy");
                AIZ.plugins.notify('success', 'Link copied to clipboard');
            } catch (err) {
                AIZ.plugins.notify('danger', 'Oops, unable to copy');
            }
            $temp.remove();
        }
        function sort_uploads(el) {
            $('#sort_uploads').submit();
        }
    </script>


</body>

</html>