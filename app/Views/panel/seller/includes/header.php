<!-- aiz-main-wrapper -->
<div class="aiz-main-wrapper d-flex flex-column">


    <!-- Top Bar -->
    <div class="top-navbar bg-white border-bottom border-soft-secondary z-1035">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col">
                    <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                        <li class="list-inline-item      mr-3">
                            <div id="google_translate_element" style="display: none;"></div>
                            <select class="selectpicker pr-4" data-width="fit" onchange="translateLanguage(this.value);">
                                <option data-content='<span class="flag-icon flag-icon-us"></span> English' value="English">English</option>
                                <option data-content='<span class="flag-icon flag-icon-de"></span> German' value="German">German</option>

                            </select>


                        </li>

                        <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">
                            <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2 opacity-60" data-toggle="dropdown" data-display="static">
                                Euro
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                <li>
                                    <a class="dropdown-item active" href="javascript:void(0)" data-currency="EUR">Euro
                                        (€)</a>
                                </li>
                                <li>
                                    <a class="dropdown-item   " href="javascript:void(0)" data-currency="Pkr">Rupee </a>
                                </li>

                                
                        </li>

                    </ul>
                    </li>
                    </ul>
                </div>

                <div class="col-5 text-right d-none d-lg-block">
                    <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                        <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                            <a href="tel:<?= $contact['phone'] ?>" class="text-reset d-inline-block opacity-60 py-2">
                                <i class="la la-phone"></i>
                                <span>Help line</span>
                                <span><?= $contact['phone'] ?></span>
                            </a>
                        </li>
                        <?php if (!session('isLoggedIn')) : ?>
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="<?= base_url('customer/login') ?>" class="text-reset d-inline-block opacity-60 py-2">Login</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= base_url('customer/registration') ?>" class="text-reset d-inline-block opacity-60 py-2">Registration</a>
                            </li>
                        <?php else : ?>
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0 dropdown">
                                <a class="dropdown-toggle no-arrow text-reset" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="">
                                        <span class="position-relative d-inline-block">
                                            <i class="las la-bell fs-18"></i>
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0">
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="mb-0">Notifications</h6>
                                    </div>
                                    <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="py-4 text-center fs-16">
                                                    No notification found
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center border-top">
                                        <a href="<?= base_url('notification') ?>" class="text-reset d-block py-2">
                                            View All Notifications
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="<?= base_url('My-Panel'); ?>" class="text-reset d-inline-block opacity-60 py-2">My Panel</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= base_url('logout') ?>" class="text-reset d-inline-block opacity-60 py-2">Logout</a>

                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Top Bar -->
    <header class=" sticky-top  z-1020 bg-white border-bottom shadow-sm">
        <div class="position-relative logo-bar-area z-1">
            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                        <a class="d-block py-20px mr-3 ml-0" href="<?= base_url() ?>">
                            <img src="<?= base_url('public/uploads/logos/' . $logo['header_logo']) ?>" alt="Active eCommerce CMS" class="mw-100 h-30px h-md-40px" height="40">
                        </a>

                    </div>
                    <div class="d-lg-none ml-auto mr-0">
                        <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                            <i class="las la-search la-flip-horizontal la-2x"></i>
                        </a>
                    </div>

                    <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                        <div class="position-relative flex-grow-1">
                            <form action="<?=base_url('search')?>" method="post" class="stop-propagation">
                                <div class="d-flex position-relative align-items-center">
                                    <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                        <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left"></i></button>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="border-0 border-lg form-control" id="search" name="keyword" placeholder="I am shopping for..." autocomplete="off">
                                        <div class="input-group-append d-none d-lg-block">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="la la-search la-flip-horizontal fs-18"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                                <div class="search-preloader absolute-top-center">
                                    <div class="dot-loader">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="search-nothing d-none p-3 text-center fs-16">

                                </div>
                                <div id="search-content" class="text-left">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-none d-lg-none ml-3 mr-0">
                        <div class="nav-search-box">
                            <a href="#" class="nav-box-link">
                                <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                            </a>
                        </div>
                    </div>



                    <div class="d-none d-lg-block ml-3 mr-0">
                        <div class="" id="wishlist">
                            <a href="<?= base_url() ?>/wishlists" class="d-flex align-items-center text-reset">
                                <i class="la la-heart-o la-2x opacity-80"></i>
                                <span class="flex-grow-1 ml-1">
                                    <!-- <span class="badge badge-primary badge-inline badge-pill">0</span> -->
                                    <span class="nav-box-text d-none d-xl-block opacity-70">Wishlist</span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                        <div class="nav-cart-box dropdown h-100" id="cart_items">
                            <a href="javascript:void(0)" class="d-flex align-items-center text-reset h-100" data-toggle="dropdown" data-display="static">
                                <i class="la la-shopping-cart la-2x opacity-80"></i>
                                <span class="flex-grow-1 ml-1">
                                    <span class="badge badge-primary badge-inline badge-pill cart-count"><?= '0'; ?></span>
                                    <span class="nav-box-text d-none d-xl-block opacity-70">Cart</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation">

                                <!-- <div class=" "> -->
                                    <div class="shopping-cart">
                                        <div class="shopping-cart-header">
                                            <div class="shopping-cart-total">
                                                <span class="lighter-text">Total:</span>
                                                <span class="main-color-text shopping-cart__total"></span>
                                            </div>
                                        </div>
                                        <!--end shopping-cart-header -->
                                        <!-- <div class="top_carted_list"></div> -->
                                        <ul class="shopping-cart-items list-unstyle top_carted_list">
                                        </ul>
                      

                                    </div>
                                    <!--end shopping-cart -->
                                <!-- </div> -->

                                 

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="bg-white border-top border-gray-200 py-1">
            <div class="container">
                <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-center">
                    <li class="list-inline-item mr-0">
                        <a href="<?= base_url('/') ?>" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Home
                        </a>
                    </li>

                    <li class="list-inline-item mr-0">
                        <a href="<?= base_url('brands') ?>" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            All Brands
                        </a>
                    </li>
                    <li class="list-inline-item mr-0">
                        <a href="<?= base_url('categories') ?>" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            All Categories
                        </a>
                    </li>
                    <li class="list-inline-item mr-0">
                        <a href="<?= base_url('sellers') ?>" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            All Sellers
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div id="order-details-modal-body">

                </div>
            </div>
        </div>
    </div>