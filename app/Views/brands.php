<?php
include 'includes/head.php';
include 'includes/header.php';
?>
       
<section class="pt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">All Brands</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="<?=base_url()?>">Home</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="<?=base_url('brands')?>">"All Brands"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="container">
        <div class="bg-white shadow-sm rounded px-3 pt-3">
            <div class="row row-cols-xxl-6 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gutters-10">
            <?php $count = 1; foreach($brands as $b): $count++ ?>        
                <div class="col text-center">
                    <a href="<?=base_url('brands/products/'.$b['brand_id'])?>" class="d-block p-3 mb-3 border border-light rounded hov-shadow-md">
                        <img src="<?=base_url('public/uploads/brands/'.$b['brand_pic'])?>" class="lazyload mx-auto h-70px mw-100" alt="<?=$b['brand_name'];?>">
                    </a>
                </div>
       
            <?php endforeach; 
                if($count==1){
                    echo '<div class="text-center"><center><h4>Empty List</h4></center></div>';
                }
            ?>        
            
            </div>
        </div>
    </div>
</section>

 
<?php
include 'includes/footer.php'; 
?>