<?php
include 'includes/head.php';
include 'includes/header.php';
?>
<section class="mb-4 pt-3">
    <div class="container">
        <div class="bg-white shadow-sm rounded p-3">
            <div class="row">
                <div class="col-xl-5 col-lg-6 mb-4">
                    <div class="sticky-top z-3 row gutters-10">
                        <div class="col order-1 order-md-2">
                            <div class="aiz-carousel product-gallery" data-nav-for='.product-gallery-thumb' data-fade='true' data-auto-height='true'>
                            <?php foreach($images as $img): ?>
                                <div class="carousel-box img-zoom rounded">
                                    <img class="img-fluid lazyload" src="<?=base_url('public/uploads/products/'.$img['img_name'])?>" data-src="<?=base_url('public/uploads/products/'.$img['img_name'])?>" onerror="this.onerror=null;this.src='<?=base_url()?>/public/uploads/placeholder-rect.jpg';">
                                </div>
                                
                                <?php endforeach; ?>

                            </div>
                        </div>
                        <div class="col-12 col-md-auto w-md-80px order-2 order-md-1 mt-3 mt-md-0">
                            <div class="aiz-carousel product-gallery-thumb" data-items='5' data-nav-for='.product-gallery' data-vertical='true' data-vertical-sm='false' data-focus-select='true' data-arrows='true'>
                                <?php foreach($images as $img): ?>

                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto" src="<?=base_url('public/uploads/products/'.$img['img_name'])?>" data-src="<?=base_url('public/uploads/products/'.$img['img_name'])?>" onerror="this.onerror=null;this.src='<?=base_url()?>/public/uploads/placeholder-rect.jpg';">
                                </div>

                                 <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6">
                    <div class="text-left">
                        <h1 class="mb-2 fs-20 fw-600">
                        <?=$product['prod_name']?>
                        </h1>

                        <div class="row align-items-center">
                            <div class="col-12">
                                <span class="rating">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                                </span>
                                <!-- <span class="ml-1 opacity-50">(1 reviews)</span> -->
                            </div>
                        </div>

                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <small class="mr-2 opacity-50">Sold by: </small><br>
                                <?=$seller['seller_name']?>
                            </div>
                            <!-- <div class="col-auto">
                                <button class="btn btn-sm btn-soft-primary" onclick="show_chat_modal()">Message Seller</button>
                            </div> -->
                            <?php if(!empty($brand['brand_id'])){ ?>
                            <div class="col-auto">
                                <a href="<?=base_url('brands/products/'.$brand['brand_id'])?>">
                                    <img src="<?=base_url('public/uploads/brands/'.$brand['brand_pic'])?>" alt="<?=$brand['brand_name']?>" height="30">
                                </a>
                            </div>
                            <?php } else{?>
                             <div class="col-auto">
                                
                            </div>
                            <?php } ?>
                        </div>

                        <hr>

                        <div class="row no-gutters mt-3">
                            <div class="col-sm-2">
                                <div class="opacity-50 my-2">Price:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="fs-20 opacity-60">
                                    <del>
                                    <?=$product['old_price']?> 
                                    </del>
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters my-2">
                            <div class="col-sm-2">
                                <div class="opacity-50">Discount Price:</div>
                            </div>
                            <div class="col-sm-10">
                                <div class="">
                                    <strong class="h2 fw-600 text-primary">
                                        <?=$product['new_price']?>
                                    </strong> 
                                </div>
                            </div>
                        </div>


                        <hr>

                        <form id="option-choice-form">

 

                            <!-- Quantity + Add to cart -->
                            <div class="row no-gutters">
                                <div class="col-sm-2">
                                    <div class="opacity-50 my-2">Quantity:</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="row no-gutters align-items-center aiz-plus-minus mr-3" style="width: 130px;">
                                            <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="minus" data-field="quantity" disabled="">
                                                <i class="las la-minus"></i>
                                            </button>
                                            <input type="number" name="quantity" class="col border-0 text-center flex-grow-1 fs-16 input-number" placeholder="1" value="1" min="1" max="<?= $product['prod_qty']
                                                ?>" lang="en">
                                            <button class="btn  col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="plus" data-field="quantity">
                                                <i class="las la-plus"></i>
                                            </button>
                                        </div>
                                        <div class="avialable-amount opacity-60">
                                            (<span id="available-quantity"><?=$product['prod_qty']?></span> available)
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                <div class="col-sm-2">
                                    <div class="opacity-50 my-2">Total Price:</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="product-price">
                                        <strong id="chosen_price" class="h4 fw-600 text-primary">

                                        </strong>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div id="pnopoi"></div>

                        <div class="mt-3">
                            <button type="button" class="btn  btn-primary mr-2  fw-600" onclick="showAddToCartModal(<?= $product['prod_id'] ?>,event)">
                                
                                <i class="la la-shopping-cart"></i> Add to cart
                            </button>
                             <button type="button" class="btn btn-primary   fw-600" onclick="addToWishList(<?= $product['prod_id'] ?>)">
                            <i class="las la-shopping-bag"></i> Add to wishlist
                            </button>
                            <button type="button" class="btn btn-secondary out-of-stock fw-600 d-none" disabled>
                                <i class="la la-cart-arrow-down"></i> Out of Stock
                            </button>
                        </div>


 
  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="container">
        <div class="row gutters-10">
            
            <div class="col-xl-12 order-0 order-xl-1">
                <div class="bg-white mb-3 shadow-sm rounded">
                    <div class="nav border-bottom aiz-nav-tabs">
                        <a href="#tab_default_1" data-toggle="tab" class="p-3 fs-16 fw-600 text-reset active show">Description</a>
                        <a href="#tab_default_2" data-toggle="tab" class="p-3 fs-16 fw-600 text-reset">Video</a>
                    </div>

                    <div class="tab-content pt-0">
                        <div class="tab-pane fade active show" id="tab_default_1">
                            <div class="p-4">
                            <?=$product['prod_description']?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab_default_2">
                            <div class="p-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?=$product['prod_video']?>"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_default_3">
                            <div class="p-4 text-center ">
                                <a href="" class="btn btn-primary">Download</a>
                            </div>
                        </div> 

                    </div>
                </div>
                <div class="bg-white rounded shadow-sm">
                    <div class="border-bottom p-3">
                        <h3 class="fs-16 fw-600 mb-0">
                            <span class="mr-4">Related products</span>
                        </h3>
                    </div>
                    <div class="p-3">
                    <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                <?php foreach ($brandProducts as $r) : ?>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="<?=base_url('product/'.$r['prod_id'])?>" class="d-block" tabindex="0">
                                    <img class="img-fit mx-auto h-140px h-md-210px ls-is-cached lazyloaded" src="<?=base_url('public/uploads/products/'.$r['prod_img'])?>" data-src="<?=base_url('public/uploads/products/'.$r['prod_img'])?>" alt="<?=$r['prod_name']?>" onerror="this.onerror=null;this.src='<?=base_url()?>/public/uploads/placeholder-rect.jpg';">
                                </a>
                                 
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(2)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="0">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                   
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(<?= $r['prod_id'] ?>,event)" data-toggle="tooltip" data-title="Add to cart" data-placement="left" tabindex="0">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary"><?=$r['new_price']?></span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="#" class="d-block text-reset" tabindex="0"><?=$r['prod_name']?></a>
                                </h3> 
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach; ?>


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