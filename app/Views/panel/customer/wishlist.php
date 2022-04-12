<?php

include 'includes/head.php';
include 'includes/header.php';
include 'includes/sidebar.php';

?> 
 
                    <div class="aiz-user-panel">
                        <div class="aiz-titlebar mt-2 mb-4">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <b class="h4">Wishlist</b>
                                </div>
                            </div>
                        </div>

                        <div class="row gutters-5">
                            <?php  foreach($wishlist as $w): ?>
                            <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_1">
                                <div class="card mb-2 shadow-sm">
                                    <div class="card-body">
                                        <a href="<?= base_url('product/' . $w['prod_id']) ?>" class="d-block mb-3">
                                            <img src="<?= base_url('public/uploads/products/' . $w['prod_img']) ?>" class="img-fit h-140px h-md-200px">
                                        </a>

                                        <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                            <a href="<?= base_url('product/' . $w['prod_id']) ?>" class="text-reset"><?= $w['prod_name'] ?></a>
                                        </h5>
                                        <div class="rating rating-sm mb-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                        </div>
                                        <div class=" fs-14">
                                            <span class="fw-600 text-primary"><?= $w['new_price'] ?></span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?= base_url('wishlist/delete/'.$w['prod_id']) ?>" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist(1)">
                                            <i class="la la-trash la-2x"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal(<?= $w['prod_id'] ?>,event)">
                                            <i class="la la-shopping-cart mr-2"></i>Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            
                        </div>
                        <div class="aiz-pagination">

                        </div>
                    </div>
                </div>
            </div>
        </section>

 

    
  

 
 

 
 

        <?php

include 'includes/footer.php'; 

?> 