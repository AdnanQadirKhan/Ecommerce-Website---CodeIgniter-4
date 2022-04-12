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
                                    <img src="<?php echo base_url('public/uploads/profile/') .'/'.session('pic')?>">
                                </span>
                                <h4 class="h5 fs-16 mb-1 fw-600"><?= session('name');?></h4>
                                <div class="text-truncate opacity-60"><?= session('email');?> </a>
                                </div>
                            </div>

                            <div class="sidemnenu mb-3">
                                <ul class="aiz-side-nav-list px-2" data-toggle="aiz-side-menu">

                                    <li class="aiz-side-nav-item">
                                        <a href="<?=base_url('seller')?>" class="aiz-side-nav-link ">
                                            <i class="las la-home aiz-side-nav-icon"></i>
                                            <span class="aiz-side-nav-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="<?=base_url('seller/profile')?>"
                                            class="aiz-side-nav-link ">
                                            <i class="las la-user aiz-side-nav-icon"></i>
                                            <span class="aiz-side-nav-text">Manage Profile</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="<?=base_url('seller/shop')?>"
                                            class="aiz-side-nav-link ">
                                            <i class="las la-cog aiz-side-nav-icon"></i>
                                            <span class="aiz-side-nav-text">Shop Setting</span>
                                        </a>
                                    </li> 
                                    <li class="aiz-side-nav-item">
                                        <a href="<?=base_url('seller/wishlists'); ?>"
                                            class="aiz-side-nav-link ">
                                            <i class="la la-heart-o aiz-side-nav-icon"></i>
                                            <span class="aiz-side-nav-text">Wishlist</span>
                                        </a>
                                    </li> 
                                    <li class="aiz-side-nav-item">
                                        <a href="<?=base_url('seller/products'); ?>"
                                            class="aiz-side-nav-link ">
                                            <i class="lab la-sketch aiz-side-nav-icon"></i>
                                            <span class="aiz-side-nav-text">Products</span>
                                        </a>
                                    </li>
                                
                                    <li class="aiz-side-nav-item">
                                        <a href="<?=base_url('seller/orders'); ?>"
                                            class="aiz-side-nav-link ">
                                            <i class="las la-money-bill aiz-side-nav-icon"></i>
                                            <span class="aiz-side-nav-text">Orders</span>
                                        </a>
                                    </li>
 
                                    <!--<li class="aiz-side-nav-item">-->
                                    <!--    <a href="<?= base_url('seller/reviews')?>"-->
                                    <!--        class="aiz-side-nav-link ">-->
                                    <!--        <i class="las la-star-half-alt aiz-side-nav-icon"></i>-->
                                    <!--        <span class="aiz-side-nav-text">Product Reviews</span>-->
                                    <!--    </a>-->
                                    <!--</li>-->
 
                                </ul>
                            </div>
                            <hr>
                            

                        </div>

                        <div class="fixed-bottom d-xl-none bg-white border-top d-flex justify-content-between px-2"
                            style="box-shadow: 0 -5px 10px rgb(0 0 0 / 10%);">
                            <a class="btn btn-sm p-2 d-flex align-items-center"
                                href="<?=base_url('/logout')?>">
                                <i class="las la-sign-out-alt fs-18 mr-2"></i>
                                <span>Logout</span>
                            </a>
                            <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static"
                                data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                                <i class="las la-times la-2x"></i>
                            </button>
                        </div>
                    </div>