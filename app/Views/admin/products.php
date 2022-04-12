<?php
include 'includes/head.php';
include 'includes/sidebar.php';
include 'includes/header.php';
?>
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-auto">
                    <h1 class="h3">All Products</h1>
                </div>

            </div>
        </div>
        <br>

        <div class="card">
            <form class="" id="sort_products" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col">
                        <h5 class="mb-md-0 h6">All Product</h5>
                    </div>



                    <div class="col-md-2 ml-auto">
                        <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" id="user_id" name="user_id" onchange="sort_products()">
                            <option value="">All Sellers</option>
                           
                        </select>
                    </div>
                    <div class="col-md-2 ml-auto">
                        <!-- <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="type" id="type" onchange="sort_products()">
                            <option value="">Sort By</option>
                            <option value="rating,desc">Rating (High &gt; Low)</option>
                            <option value="rating,asc">Rating (Low &gt; High)</option>
                            <option value="num_of_sale,desc">Num of Sale (High &gt; Low)</option>
                            <option value="num_of_sale,asc">Num of Sale (Low &gt; High)</option>
                            <option value="unit_price,desc">Base Price (High &gt; Low)</option>
                            <option value="unit_price,asc">Base Price (Low &gt; High)</option>
                        </select> -->
                    </div>
                    <div class="col-md-2">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control form-control-sm" id="search" name="search" placeholder="Type &amp; Enter">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                        <?php if(session()->get('msg')) :  ?>
                                                <div class="alert text-center alert-success"><?= session()->get('msg');?></div>
                                            <?php endif;  ?>
                            <tr>

                                <!--<th data-breakpoints="lg">#</th>-->
                                <th>Info</th>
                                <th>Name</th>
                                <th data-breakpoints="lg">Added By</th>
                                <th data-breakpoints="sm">Description</th>
                                <th data-breakpoints="md">Total Stock</th>
                                <th data-breakpoints="sm" class="text-right">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $prod) : ?>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row gutters-5 w-200px w-md-300px mw-100">
                                            <div class="col-auto">
                                                <img src="<?= base_url('public/uploads/products/' . $prod['prod_img']) ?>" alt="Image" class="size-50px img-fit">
                                            </div>
                                            <div class="col">
                                                <span class="text-muted text-truncate-2"><?= $prod['prod_name'] ?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= $prod['seller_name']?></td>
                                    <td>
                                        <?= $prod['prod_description'] ?>
                                    </td>
                                    <td>
                                        <?= $prod['prod_qty'] ?>
                                    </td>
                                    <td class="text-right">
                                        <a class="btn btn-soft-success btn-icon btn-circle btn-sm" href="<?= base_url('product/' . $prod['prod_id']) ?>" target="_blank" title="View">
                                            <i class="las la-eye"></i>
                                        </a>


                                        <a href="<?= base_url('admin/delete-product/'.$prod['prod_id']); ?>" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="Delete">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    <div class="aiz-pagination">
                    <?= $pager->links() ?>                                
                    </div>
                </div>
            </form>
        </div>

    </div>
    <?php
    include 'includes/footer.php';
    ?>