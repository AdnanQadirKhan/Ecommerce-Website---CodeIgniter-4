<?php  
    include "includes/head.php";
    include "includes/header.php";
 ?>

        <section class="pt-4 mb-4">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <h1 class="fw-600 h4">All Categories</h1>
                    </div>
                    <div class="col-lg-6">
                        <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item opacity-50">
                                <a class="text-reset" href="#">Home</a>
                            </li>
                            <li class="text-dark fw-600 breadcrumb-item">
                                <a class="text-reset" href="#">"All
                                    Categories"</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-4">
            <div class="container">
                <?php foreach($categories as $key =>$val):?>
                <div class="mb-3 bg-white shadow-sm rounded">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        <a href="<?=base_url('category/products/'.$val['cat_id'])?>"
                            class="text-reset"><?=$val['cat_name']?></a>
                    </div>
                    <?php   if($val['have_sub_cat']){?>

                    <div class="p-3 p-lg-4">
                        <div class="row">
                            <div class="col-lg-8 col-10 text-left">
                                <h6 class="mb-3"><a class="text-reset fw-600 fs-14"
                                        href="#">Sub  Categories</a></h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                     <?php
                                    
                                    foreach($sub_cat[$val['cat_id']] as $sub){?>
                                    <li class="mb-2">
                                        <a class="text-reset"
                                            href="<?=base_url('subcategory/products/'.$sub['sub_cat_id'])?>"><?=$sub['sub_cat_name']?> </a>
                                    </li>
                                    <?php }  ?>
                                    
                                </ul>
                            </div>
                             
                        </div>
                    </div>
                    <?php }  ?>
                </div>
                <?php endforeach; ?>
              
            </div>
        </section>

 
        <?php 
    include "includes/footer.php"; 
 ?>