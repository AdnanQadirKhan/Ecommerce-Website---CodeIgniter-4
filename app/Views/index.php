<?php
include 'includes/head.php';
include 'includes/header.php';
?>


<!-- ----------------------  Home Banner --------------------- -->

<div class="home-banner-area mb-4 pt-3">
    <div class="container">
        <div class="row gutters-10 position-relative">
            <div class="col-lg-3 position-static d-none d-lg-block">
                <div class="aiz-category-menu bg-white rounded  shadow-sm">
                    <div
                        class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
                        <span class="fw-600 fs-16 mr-3">Categories</span>
                        <a href="<?= base_url('categories') ?>" class="text-reset">
                            <span class="d-none d-lg-inline-block">See All ></span>
                        </a>
                    </div>
                    <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
                        <?php foreach ($categories as $cat) : ?>
                        <li class="category-nav-element" data-id="1">
                            <a href="<?= base_url('category/products/' . $cat['cat_id']) ?>"
                                class="text-truncate text-reset py-2 px-3 d-block">
                                <img class="cat-image lazyload mr-2 opacity-60"
                                    src="<?= base_url('public/uploads/') ?>/placeholder-rect.jpg"
                                    data-src="<?= base_url('public/uploads/banners/' . $cat['cat_pic']) ?>" width="16"
                                    alt="<?= $cat['cat_name'] ?>"
                                    onerror="this.onerror=null;this.src='<?= base_url('public/uploads/') ?>placeholder-rect.jpg';">
                                <span class="cat-name"><?= $cat['cat_name'] ?></span>
                            </a>

                        </li>
                        <?php endforeach;  ?>
                    </ul>
                </div>
            </div>


            <div class=" col-lg-9 ">
                <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true"
                    data-autoplay="true">
                    <?php foreach ($banners as $b) : ?>
                    <div class="carousel-box">
                        <a href="<?= base_url('category/products/' . $b['cat_id']) ?>">
                            <img class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden"
                                src="<?= base_url('public/uploads/banners/' . $b['cat_pic']) ?>"
                                alt="<?= $b['sub_cat_name'] ?>" height="315"
                                onerror="this.onerror=null;this.src='<?= base_url('public/uploads/banners/') ?>/placeholder-rect.jpg';">
                        </a>
                    </div>
                    <?php endforeach; ?>

                </div>

            </div>



        </div>
    </div>
</div>
<!-- ---------- x ------------  Home Banner ---------- x ----------- -->

<!-- ----------------------  All Categories--------------------- -->
<section class="mb-4">
    <div class="container">
        <ul class="list-unstyled mb-0 row gutters-5">
            <?php foreach ($categories as $cat) : ?>
            <li class="minw-0 col-4 col-md mt-3">
                <a href="<?= base_url('category/products/' . $cat['cat_id']) ?>"
                    class="d-block rounded bg-white p-2 text-reset shadow-sm">
                    <img src="<?= base_url('public/uploads/') ?>/placeholder-rect.jpg"
                        data-src=" <?= base_url('public/uploads/banners/' . $cat['cat_pic']) ?>"
                        alt="<?= $cat['cat_name'] ?>" class="lazyload img-fit" height="78"
                        onerror="this.onerror=null;this.src='<?= base_url('public/uploads/') ?>/placeholder-rect.jpg';">
                    <div class="text-truncate fs-12 fw-600 mt-2 opacity-70"><?= $cat['cat_name'] ?></div>
                </a>
            </li>

            <?php endforeach; ?>
        </ul>
    </div>
</section>
<!-- ---------- x ------------  All Categories------ x --------------- -->
<!-- ----------------------  New Products --------------------- -->
<section class="mb-4">
    <div class="container">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">New Products</span>
                </h3>
            </div>
            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"
                data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <?php foreach ($recents as $r) : ?>
                <div class="carousel-box">
                    <div
                        class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block" tabindex="0">
                                <img class="img-fit mx-auto h-140px h-md-210px ls-is-cached lazyloaded"
                                    src="<?= base_url('public/uploads/products/' . $r['prod_img']) ?>"
                                    data-src="<?= base_url('public/uploads/products/' . $r['prod_img']) ?>"
                                    alt="<?= $r['prod_name'] ?>"
                                    onerror="this.onerror=null;this.src='<?= base_url() ?>/public/uploads/placeholder-rect.jpg';">
                            </a>

                            <div class="absolute-top-right aiz-p-hov-icon">
                                <a href="javascript:void(0)" onclick="addToWishList(<?= $r['prod_id'] ?>)"
                                    data-toggle="tooltip" data-title="Add to wishlist" data-placement="left"
                                    tabindex="0">
                                    <i class="la la-heart-o"></i>
                                </a>

                                <a href="javascript:void(0)" onclick="showAddToCartModal(<?= $r['prod_id'] ?>,event)"
                                    data-toggle="tooltip" data-title="Add to cart" data-placement="left" tabindex="0">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-md-3 p-2 text-left">
                            <div class="fs-15">
                                <span class="fw-700 text-primary"><?= $r['new_price'] ?></span>
                            </div>
                            <div class="rating rating-sm mt-1">
                                <i class="las la-star active"></i><i class="las la-star active"></i><i
                                    class="las la-star active"></i><i class="las la-star active"></i><i
                                    class="las la-star active"></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block text-reset"
                                    tabindex="0"><?= $r['prod_name'] ?></a>
                            </h3>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>


            </div>
        </div>
    </div>
</section>
<!-- ---------x------------  New Products ---------x----------- -->


<!-- -----------------  Computer Categoty Banners Products ------------- -->

<div class="mb-4">
    <div class="container">
        <div class="row gutters-10 ">
            <?php $count = 1;
            foreach ($computerBanner as $cp) : if ($count >= 1 && $count <= 3) { ?>

            <div class="col-xl col-md-6">
                <div class="mb-3 mb-lg-0">
                    <a href="<?= base_url('subcategory/products/' . $cp['sub_cat_id']) ?>" class="d-block text-reset">
                        <img src="<?= base_url('public/uploads/banners/') . '/' . $cp['cat_pic'] ?>"
                            data-src="<?= base_url('public/uploads/banners/') . '/' . $cp['cat_pic'] ?>"
                            alt="<?= $cp['sub_cat_name'] ?>" class="img-fluid lazyload w-100">
                    </a>
                </div>
            </div>
            <?php }
                $count++;
            endforeach; ?>

        </div>
    </div>
</div>
<!-- ----------------------  Computer Categoty Products --------------------- -->
<section class="mb-4">
    <div class="container">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Computer &
                        Accessories</span>
                </h3>
                <a href="<?= base_url('category/products/1')?>"
                    class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">View More</a>

            </div>
            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"
                data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <?php foreach ($computer as $r) : ?>
                <div class="carousel-box">
                    <div
                        class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block" tabindex="0">
                                <img class="img-fit mx-auto h-140px h-md-210px ls-is-cached lazyloaded"
                                    src="<?= base_url('public/uploads/products/' . $r['prod_img']) ?>"
                                    data-src="<?= base_url('public/uploads/products/' . $r['prod_img']) ?>"
                                    alt="<?= $r['prod_name'] ?>"
                                    onerror="this.onerror=null;this.src='<?= base_url() ?>/public/uploads/placeholder-rect.jpg';">
                            </a>

                            <div class="absolute-top-right aiz-p-hov-icon">
                                <a href="javascript:void(0)" onclick="addToWishList(<?= $r['prod_id'] ?>)"
                                    data-toggle="tooltip" data-title="Add to wishlist" data-placement="left"
                                    tabindex="0">
                                    <i class="la la-heart-o"></i>
                                </a>

                                <a href="javascript:void(0)" onclick="showAddToCartModal(<?= $r['prod_id'] ?>,event)"
                                    data-toggle="tooltip" data-title="Add to cart" data-placement="left" tabindex="0">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>

                        </div>
                        <div class="p-md-3 p-2 text-left">
                            <div class="fs-15">
                                <span class="fw-700 text-primary"><?= $r['new_price'] ?></span>
                            </div>
                            <div class="rating rating-sm mt-1">
                                <i class="las la-star active"></i><i class="las la-star active"></i><i
                                    class="las la-star active"></i><i class="las la-star active"></i><i
                                    class="las la-star active"></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block text-reset"
                                    tabindex="0"><?= $r['prod_name'] ?></a>
                            </h3>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>


            </div>
        </div>
    </div>
</section>

<!-- ---------x------------  Computer Category Products ---------x----------- -->

<!-- -----------------  Women Clothing & Fashion Categoty Banners Products ------------- -->

<div class="mb-4">
    <div class="container">
        <div class="row gutters-10 ">
            <?php $count = 1;
            foreach ($computerBanner5 as $cp) : if ($count >= 1 && $count <= 3) { ?>

            <div class="col-xl col-md-6">
                <div class="mb-3 mb-lg-0">
                    <a href="<?= base_url('subcategory/products/' . $cp['sub_cat_id']) ?>" class="d-block text-reset">
                        <img src="<?= base_url('public/uploads/banners/') . '/' . $cp['cat_pic'] ?>"
                            data-src="<?= base_url('public/uploads/banners/') . '/' . $cp['cat_pic'] ?>"
                            alt="<?= $cp['sub_cat_name'] ?>" class="img-fluid lazyload w-100">
                    </a>
                </div>
            </div>
            <?php }
                $count++;
            endforeach; ?>

        </div>
    </div>
</div>
<!-- ----------------------   Women Clothing & Fashion Category Products --------------------- -->
<section class="mb-4">
    <div class="container">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h6 fw-700 mb-0">
                    <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Women Clothing &
                        Fashion</span>
                </h3>
                <a href="<?= base_url('category/products/5') ?>"
                    class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">View More</a>

            </div>
            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"
                data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <?php foreach ($fashion as $r) : ?>
                <div class="carousel-box">
                    <div
                        class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block" tabindex="0">
                                <img class="img-fit mx-auto h-140px h-md-210px ls-is-cached lazyloaded"
                                    src="<?= base_url('public/uploads/products/' . $r['prod_img']) ?>"
                                    data-src="<?= base_url('public/uploads/products/' . $r['prod_img']) ?>"
                                    alt="<?= $r['prod_name'] ?>"
                                    onerror="this.onerror=null;this.src='<?= base_url() ?>/public/uploads/placeholder-rect.jpg';">
                            </a>

                            <div class="absolute-top-right aiz-p-hov-icon">
                                <a href="javascript:void(0)" onclick="addToWishList(<?= $r['prod_id'] ?>)"
                                    data-toggle="tooltip" data-title="Add to wishlist" data-placement="left"
                                    tabindex="0">
                                    <i class="la la-heart-o"></i>
                                </a>

                                <a href="javascript:void(0)" onclick="showAddToCartModal(<?= $r['prod_id'] ?>,event)"
                                    data-toggle="tooltip" data-title="Add to cart" data-placement="left" tabindex="0">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-md-3 p-2 text-left">
                            <div class="fs-15">
                                <span class="fw-700 text-primary"><?= $r['new_price'] ?></span>
                            </div>
                            <div class="rating rating-sm mt-1">
                                <i class="las la-star active"></i><i class="las la-star active"></i><i
                                    class="las la-star active"></i><i class="las la-star active"></i><i
                                    class="las la-star active"></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block text-reset"
                                    tabindex="0"><?= $r['prod_name'] ?></a>
                            </h3>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>


            </div>
        </div>
    </div>
</section>
<!-- ---------x------------  Women Clothing & Fashion Category Products ---------x----------- -->

<!-- -----------------  Women Clothing & Fashion Categoty Banners Products ------------- -->

<div class="mb-4">
    <div class="container">
        <div class="row gutters-10 ">
            <?php $count = 1;
            foreach ($computerBanner4 as $cp) : if ($count >= 1 && $count <= 3) { ?>

            <div class="col-xl col-md-6">
                <div class="mb-3 mb-lg-0">
                    <a href="<?= base_url('subcategory/products/' . $cp['sub_cat_id']) ?>" class="d-block text-reset">
                        <img src="<?= base_url('public/uploads/banners/') . '/' . $cp['cat_pic'] ?>"
                            data-src="<?= base_url('public/uploads/banners/') . '/' . $cp['cat_pic'] ?>"
                            alt="<?= $cp['sub_cat_name'] ?>" class="img-fluid lazyload w-100">
                    </a>
                </div>
            </div>
            <?php }
                $count++;
            endforeach; ?>

        </div>
    </div>
</div>
<!-- ----------------------   men Clothing & Fashion Category Products --------------------- -->
<section class="mb-4">
    <div class="container">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Men Clothing &
                        Fashion</span>
                </h3>
                <a href="<?= base_url('category/products/6') ?>"
                    class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">View More</a>

            </div>
            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"
                data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <?php foreach ($men as $r) : ?>
                <div class="carousel-box">
                    <div
                        class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block" tabindex="0">
                                <img class="img-fit mx-auto h-140px h-md-210px ls-is-cached lazyloaded"
                                    src="<?= base_url('public/uploads/products/' . $r['prod_img']) ?>"
                                    data-src="<?= base_url('public/uploads/products/' . $r['prod_img']) ?>"
                                    alt="<?= $r['prod_name'] ?>"
                                    onerror="this.onerror=null;this.src='<?= base_url() ?>/public/uploads/placeholder-rect.jpg';">
                            </a>

                            <div class="absolute-top-right aiz-p-hov-icon">
                                <a href="javascript:void(0)" onclick="addToWishList(<?= $r['prod_id'] ?>)"
                                    data-toggle="tooltip" data-title="Add to wishlist" data-placement="left"
                                    tabindex="0">
                                    <i class="la la-heart-o"></i>
                                </a>

                                <a href="javascript:void(0)" onclick="showAddToCartModal(<?= $r['prod_id'] ?>,event)"
                                    data-toggle="tooltip" data-title="Add to cart" data-placement="left" tabindex="0">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-md-3 p-2 text-left">
                            <div class="fs-15">
                                <span class="fw-700 text-primary"><?= $r['new_price'] ?></span>
                            </div>
                            <div class="rating rating-sm mt-1">
                                <i class="las la-star active"></i><i class="las la-star active"></i><i
                                    class="las la-star active"></i><i class="las la-star active"></i><i
                                    class="las la-star active"></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block text-reset"
                                    tabindex="0"><?= $r['prod_name'] ?></a>
                            </h3>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>


            </div>
        </div>
    </div>
</section>
<!-- ---------x------------  men Clothing & Fashion Category Products ---------x----------- -->


<!-- -----------------  Cellphones & Tabs Categoty Banners Products ------------- -->

<div class="mb-4">
    <div class="container">
        <div class="row gutters-10 ">
            <?php $count = 1;
            foreach ($computerBanner3 as $cp) : if ($count >= 1 && $count <= 3) { ?>

            <div class="col-xl col-md-6">
                <div class="mb-3 mb-lg-0">
                    <a href="<?= base_url('subcategory/products/' . $cp['sub_cat_id']) ?>" class="d-block text-reset">
                        <img src="<?= base_url('public/uploads/banners/') . '/' . $cp['cat_pic'] ?>"
                            data-src="<?= base_url('public/uploads/banners/') . '/' . $cp['cat_pic'] ?>"
                            alt="<?= $cp['sub_cat_name'] ?>" class="img-fluid lazyload w-100">
                    </a>
                </div>
            </div>
            <?php }
                $count++;
            endforeach; ?>

        </div>
    </div>
</div>
<!-- ----------------------   Cellphones & Tabs Category Products --------------------- -->
<section class="mb-4">
    <div class="container">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Cellphones &
                        Tabs</span>
                </h3>
                <a href="<?= base_url('category/products/3') ?>"
                    class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">View More</a>

            </div>
            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"
                data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <?php foreach ($phone as $r) : ?>
                <div class="carousel-box">
                    <div
                        class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                        <div class="position-relative">
                            <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block" tabindex="0">
                                

                                    <img class="img-fit mx-auto h-140px h-md-210px ls-is-cached lazyloaded" src="<?=base_url('public/uploads/products/'.$r['prod_img'])?>" data-src="<?=base_url('public/uploads/products/'.$r['prod_img'])?>" onerror="this.onerror=null;this.src='<?=base_url()?>/public/uploads/placeholder-rect.jpg';">
                                </a>

                            <div class="absolute-top-right aiz-p-hov-icon">
                                <a href="javascript:void(0)" onclick="addToWishList(<?= $r['prod_id'] ?>)"
                                    data-toggle="tooltip" data-title="Add to wishlist" data-placement="left"
                                    tabindex="0">
                                    <i class="la la-heart-o"></i>
                                </a>

                                <a href="javascript:void(0)" onclick="showAddToCartModal(<?= $r['prod_id'] ?>,event)"
                                    data-toggle="tooltip" data-title="Add to cart" data-placement="left" tabindex="0">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-md-3 p-2 text-left">
                            <div class="fs-15">
                                <span class="fw-700 text-primary"><?= $r['new_price'] ?></span>
                            </div>

                            <div class="rating rating-sm mt-1">
                                <i class="las la-star active"></i><i class="las la-star active"></i><i
                                    class="las la-star active"></i><i class="las la-star active"></i><i
                                    class="las la-star active"></i>
                            </div>
                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block text-reset"
                                    tabindex="0"><?= $r['prod_name'] ?></a>
                            </h3>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>


            </div>
        </div>
    </div>
</section>
<!-- ---------x------------  Cellphones & Tabs Category Products ---------x----------- -->

<?php
include 'includes/footer.php';

?>