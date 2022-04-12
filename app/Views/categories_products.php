<?php
include 'includes/head.php';
include 'includes/header.php';

?>
 

        <section class="mb-4 pt-3">
            <div class="container sm-px-0">
                <form class="" id="search-form" action="" method="GET">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl sidebar-right z-1035">
                                <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                                    data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                                <div class="collapse-sidebar c-scrollbar-light text-left">
                                    <div
                                        class="d-flex d-xl-none justify-content-between align-items-center pl-3 border-bottom">
                                        <h3 class="h6 mb-0 fw-600">Filters</h3>
                                        <button type="button" class="btn btn-sm p-2 filter-sidebar-thumb"
                                            data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                            <i class="las la-times la-2x"></i>
                                        </button>
                                    </div>
                                    <div class="bg-white shadow-sm rounded mb-3">
                                        <div class="fs-15 fw-600 p-3 border-bottom">
                                            Categories
                                        </div>
                                        <div class="p-3">
                                            <ul class="list-unstyled">
                                                <li class="mb-2">
                                                    <a class="text-reset fs-14 fw-600"
                                                        href="<?= base_url('categories') ?>">
                                                        <i class="las la-angle-left"></i>
                                                        All Categories
                                                    </a>
                                                </li>
                                                <li class="mb-2">
                                                    <a class="text-reset fs-14 fw-600"
                                                        href="<?=base_url('category/products/'.$category['cat_id'])?>">
                                                        <i class="las la-angle-left"></i>
                                                        <?=$category['cat_name']?>
                                                    </a>
                                                </li>
                                                <?php if($category['have_sub_cat']){
                                                    foreach($sub_cat as $sb){
                                                    ?>
                                                <li class="mb-2">
                                                    <a class="text-reset fs-14 fw-600"
                                                        href="<?=base_url('subcategory/products/'.$sb['sub_cat_id'])?>">
                                                        <i class="pl-3"></i>
                                                        <?=$sb['sub_cat_name']?>
                                                    </a>
                                                </li>
                                                <?php } }?>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="bg-white shadow-sm rounded mb-3">
                                        <div class="fs-15 fw-600 p-3 border-bottom">
                                            Price range
                                        </div>
                                        <div class="p-3">
                                            <div class="aiz-range-slider">
                                                <div id="input-slider-range" data-range-value-min=" 5 "
                                                    data-range-value-max=" 25000 "></div>

                                                <div class="row mt-2">
                                                    <div class="col-6">
                                                        <span
                                                            class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                                            data-range-value-low="25"
                                                            id="input-slider-range-value-low"></span>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <span
                                                            class="range-slider-value value-high fs-14 fw-600 opacity-70"
                                                            data-range-value-high="150"
                                                            id="input-slider-range-value-high"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

 

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">

                            <ul class="breadcrumb bg-transparent p-0">
                                <li class="breadcrumb-item opacity-50">
                                    <a class="text-reset" href="<?=base_url()?>">Home</a>
                                </li>
                                <li class="breadcrumb-item opacity-50">
                                    <a class="text-reset" href="<?=base_url('categories')?>">All Categories</a>
                                </li>
                                <li class="text-dark fw-600 breadcrumb-item">
                                    <a class="text-reset"
                                        href="<?=base_url('category/products/'.$category['cat_id'])?>"><?=$category['cat_name']?> </a>
                                </li>
                            </ul>

                            <div class="text-left">
                                <div class="row gutters-5 flex-wrap align-items-center">
                                    <div class="col-lg col-10">
                                        <h1 class="h6 fw-600 text-body">
                                        <?=$category['cat_name']?> Products
                                        </h1>
                                        <input type="hidden" name="keyword" value="">
                                    </div>
                                    <div class="col-2 col-lg-auto d-xl-none mb-lg-3 text-right">
                                        <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle"
                                            data-target=".aiz-filter-sidebar">
                                            <i class="la la-filter la-2x"></i>
                                        </button>
                                    </div>
                                    <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                                        <label class="mb-0 opacity-50">Brands</label>
                                        <select class="form-control form-control-sm aiz-selectpicker"
                                            data-live-search="true" name="brand" onchange="filter()">
                                            <option value="">All Brands</option>
                                            <?php foreach($b as $brand):?>
                                            <option value="<?=$brand['brand_id']?>"><?=$brand['brand_name']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <!-- <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                                        <label class="mb-0 opacity-50">Sort By</label>
                                        <select class="form-control form-control-sm aiz-selectpicker" name="sort_by"
                                            onchange="filter()">
                                            <option value="newest">Newest</option>
                                            <option value="oldest">Oldest</option>
                                            <option value="price-asc">Price low to high</option>
                                            <option value="price-desc">Price high to low</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                            <!-- <input type="hidden" name="min_price" value=""> -->
                            <!-- <input type="hidden" name="max_price" value=""> -->
                            <div
                                class="row gutters-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-2">
                                <?php
                        if (!empty($products)) {
                            foreach ($products as $r) : ?>
                                <div class="col">
                                    <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                        <div class="position-relative">
                                            <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block" tabindex="0">
                                                <img class="img-fit mx-auto h-140px h-md-210px ls-is-cached lazyloaded" src="<?= base_url('public/uploads/products/' . $r['prod_img']) ?>" data-src="<?= base_url('public/uploads/products/' . $r['prod_img']) ?>" alt="<?= $r['prod_name'] ?>" onerror="this.onerror=null;this.src='<?= base_url() ?>/public/uploads/placeholder-rect.jpg';">
                                            </a>

                                            <div class="absolute-top-right aiz-p-hov-icon">
                                                <a href="javascript:void(0)" onclick="addToWishList(<?= $r['prod_id'] ?>)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="0">
                                                    <i class="la la-heart-o"></i>
                                                </a>

                                                <a href="javascript:void(0)" onclick="showAddToCartModal(<?= $r['prod_id'] ?>,event)" data-toggle="tooltip" data-title="Add to cart" data-placement="left" tabindex="0">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p-md-3 p-2 text-left">
                                            <div class="fs-15">
                                                <span class="fw-700 text-primary"><?= $r['new_price'] ?></span>
                                            </div>
                                            <div class="rating rating-sm mt-1">
                                                <i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i>
                                            </div>
                                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                                <a href="<?= base_url('product/' . $r['prod_id']) ?>" class="d-block text-reset" tabindex="0"><?= $r['prod_name'] ?></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                        } else { ?>
                            <h4 class="p-3 ml-3">No result found!</h4>
                        <?php } ?>
                            </div>
                            <div class="aiz-pagination aiz-pagination-center mt-4">
                                <nav>
                                   
                                </nav>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>


     
<?php
include 'includes/footer.php';

?>