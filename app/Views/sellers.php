<?php  
    include "includes/head.php";
    include "includes/header.php";
 ?>

        <section class="pt-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <h1 class="fw-600 h4">All Sellers</h1>
                    </div>
                    <div class="col-lg-6">
                        <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item opacity-50">
                                <a class="text-reset" href="<?=base_url()?>">Home</a>
                            </li>
                            <li class="text-dark fw-600 breadcrumb-item">
                                <a class="text-reset" href="<?=base_url('sellers')?>">"All
                                    Sellers"</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-2">
            <div class="container">
                <div class="row gutters-10 row-cols-xxl-3 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-1">
                     
                <?php foreach($shops as $shop):?>
                    <div class="col">
                        <div
                            class="row no-gutters bg-white align-items-center border border-light rounded hov-shadow-md mb-3 has-transition">
                            <div class="col-4">
                                <a href="<?=base_url('shops/visit/'.$shop['shop_id'])?>"
                                    class="d-block p-3" tabindex="0">
                                    <img src="<?=base_url('public/uploads/logos/'.$shop['shop_logo'])?>"
                                        alt="<?=$shop['shop_name']?>" class="img-fluid lazyload"
                                        onerror="this.onerror=null;this.src='<?=base_url('public')?>/placeholder-rect.jpg';">
                                </a>
                            </div>
                            <div class="col-8 border-left border-light">
                                <div class="p-3 text-left">
                                    <h2 class="h6 fw-600 text-truncate">
                                        <a href="<?=base_url('shops/visit/'.$shop['shop_id'])?>"
                                            class="text-reset" tabindex="0"><?=$shop['shop_name']?></a>
                                    </h2>
                                    <div class="rating rating-sm mb-2">
                                        <i class='las la-star active '></i><i class='las la-star active '></i><i
                                            class='las la-star active '></i><i class='las la-star active '></i><i
                                            class='las la-star active '></i>
                                    </div>
                                    <a href="<?=base_url('shops/visit/'.$shop['shop_id'])?>"
                                        class="btn btn-primary  btn-sm" tabindex="0">
                                        Visit Store
                                        <i class="las la-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="aiz-pagination aiz-pagination-center mt-4">

                </div>
            </div>
        </section>


         
<?php

include 'includes/footer.php';
?>