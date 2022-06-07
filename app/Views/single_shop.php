<?php
include 'includes/head.php';
include 'includes/header.php';


?>
        <section class="pt-5 mb-4 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="d-flex justify-content-center">
                             
                                <img class="img-fit mx-auto h-140px h-md-210px ls-is-cached lazyloaded"
                                    src="<?=base_url('public/uploads/logos/'.$shop['shop_logo'])?>"
                                    data-src="<?=base_url('public/uploads/logos/'.$shop['shop_logo'])?>"
                                    alt="<?=$shop['shop_name']?>"
                                    onerror="this.onerror=null;this.src='<?= base_url() ?>/public/uploads/placeholder-rect.jpg';">
                           
                            <div class="pl-4 text-left">
                                <h1 class="fw-600 h4 mb-0"><?=$shop['shop_name']?>
                                    <span class="ml-2"><i class="fa fa-check-circle" style="color:green"></i></span>
                                </h1>
                                <div class="rating rating-sm mb-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i
                                        class='las la-star active'></i><i class='las la-star active'></i>
                                </div>
                                <div class="location opacity-60"><?=$shop['address']?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom mt-5"></div>
                <div class="row align-items-center">
                     
                    <div class="col-lg-6 order-1 order-lg-0">
                        <ul class="text-center text-lg-right mt-4 mt-lg-0 social colored list-inline mb-0">
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="container">
                <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true"
                    data-autoplay="true">
                    <div class="carousel-box">
                        <img class="d-block w-100 lazyload rounded h-200px h-lg-380px img-fit"
                            src=" <?=base_url('public/uploads/banners/'.$shop['shop_banner'])?>"
                            alt="0 offer">
                    </div>
                    <!-- <div class="carousel-box">
                        <img class="d-block w-100 lazyload rounded h-200px h-lg-380px img-fit"
                            src=" <?=base_url('public/uploads/banners/'.$shop['shop_banner2'])?>"
                            alt="1 offer">
                    </div> -->
                </div>
            </div>
        </section>
        <section class="mb-4">
            <div class="container">
                <div class="text-center mb-4">
                    <h3 class="h3 fw-600 border-bottom">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">All 
                            Products</span>
                    </h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="aiz-carousel gutters-10" data-items="6" data-xl-items="5" data-lg-items="4"
                            data-md-items="3" data-sm-items="2" data-xs-items="2" data-autoplay='true'
                            data-infinute="true" data-dots="true">
                            <?php 
                            if(!empty($products)){
                            foreach($products as $prod):?>
                            <div class="carousel-box">
                                <div
                                    class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                    <div class="position-relative">
                                    <a href="<?= base_url('product/' . $prod['prod_id']) ?>"
                                            class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="<?= base_url('public/uploads/products/' . $prod['prod_img']) ?>"
                                                alt="<?=$prod['prod_name']?>"
                                                onerror="this.onerror=null;this.src='<?=base_url('public/')?>/placeholder-rect.jpg';">
                                        </a>
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" onclick="addToWishList(<?=$prod['prod_id']?>)"
                                                data-toggle="tooltip" data-title="Add to wishlist"
                                                data-placement="left">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                             
                                            <a href="javascript:void(0)" onclick="showAddToCartModal(<?=$prod['prod_id']?>)"
                                                data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                                <i class="las la-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary"><?=$prod['new_price']?></span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star active'></i><i class='las la-star active'></i><i
                                                class='las la-star active'></i><i class='las la-star active'></i><i
                                                class='las la-star active'></i>
                                        </div>
                                        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                            <a href="<?= base_url('product/' . $prod['prod_id']) ?>"
                                                class="d-block text-reset"><?=$prod['prod_name']?></a>
                                        </h3> 
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; }else{?>
                    <div class="col mb-3">
                        <h4>Product not found.</h4>
                    </div>
                    <?php }?>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-4">
            <div class="container">
                <div class="mb-4">
                    <h3 class="h3 fw-600 border-bottom">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">
                            All Products
                        </span>
                    </h3>
                </div>
                <div class="row gutters-5 row-cols-xxl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">

                <?php 
                if(!empty($products)){
                foreach($products as $prod):?>
                    <div class="col mb-3">
                        <div
                            class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <!-- <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;41%</span></span> -->
                            <div class="position-relative">
                                <a href="<?= base_url('product/' . $prod['prod_id']) ?>"
                                    class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                        src="<?= base_url('public/uploads/products/' . $prod['prod_img']) ?>"
                                        alt="<?=$prod['prod_name']?>"
                                        onerror="this.onerror=null;this.src='<?=base_url('public/')?>/placeholder-rect.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(<?=$prod['prod_id']?>)" data-toggle="tooltip"
                                        data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a> 
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(<?=$prod['prod_id']?>)" data-toggle="tooltip"
                                        data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1"><?=$prod['old_price']?></del>
                                    <span class="fw-700 text-primary"><?=$prod['new_price']?></span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i
                                        class='las la-star active'></i><i class='las la-star active'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="<?= base_url('product/' . $prod['prod_id']) ?>"
                                        class="d-block text-reset"><?=$prod['prod_name']?></a>
                                </h3> 
                            </div>
                        </div>
                    </div>
                <?php endforeach; }else{?>
                    <div class="col mb-3">
                        <h4>Product not found.</h4>
                    </div>
                    <?php }?>
                </div>
                <div class="aiz-pagination aiz-pagination-center mb-4">

                </div>
            </div>
        </section>


 
<?php
include 'includes/footer.php';

?>