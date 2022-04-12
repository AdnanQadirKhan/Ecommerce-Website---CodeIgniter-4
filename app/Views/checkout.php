<?php
include 'includes/head.php';
include 'includes/header.php'; 
?>
<section class="pt-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="row aiz-steps arrow-divider a">
                    <div class="col active cart">
                        <div class="text-center text-primary">
                            <i class="la-3x mb-2  las la-map"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block ">1. My Cart</h3>
                        </div>
                    </div>
                    
                    <div class="col delivery">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-truck"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">2. Delivery info</h3>
                        </div>
                    </div>
                   
                    <div class="col confirm">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-check-circle"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">4. Confirmation</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-4 " id="cart-summary">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="shadow-sm bg-white p-4 rounded">
                    <div class="mb-4">
                        <div class="row gutters-5 d-none d-lg-flex border-bottom mb-3 pb-3">
                            <div class="col-md-5 fw-600">Product</div>
                            <div class="col fw-600">Price</div>
                            <div class="col fw-600">Quantity</div>
                            <div class="col fw-600">Total</div>
                            <div class="col-auto fw-600">Remove</div>
                        </div>
                    </div>

                    <ul class="list-group list-group-flush">

                        <?php 
                        if(!empty($cart)):
                            foreach($cart as $row):
                        ?>
                        <li class="list-group-item px-0 px-lg-3 cart-id-<?= $row['rowid']?>">
                            <div class="row gutters-5">
                                <div class="col-lg-5 d-flex">
                                    <span class="mr-2 ml-0">
                                        <img src="<?= $row['image'] ?>" class="img-fit size-60px rounded">
                                    </span>
                                    <span class="fs-14 opacity-60" name="prod_name"><?= $row['name'] ?> </span>
                                </div>

                                <div class="col-lg col-4 order-1 order-lg-0 my-3 my-lg-0">
                                    <span class="opacity-60 fs-12 d-block d-lg-none">Price</span>
                                    <span class="fw-600 fs-16"><?= $row['price'] ?></span>
                                </div>


                                <div class="col-lg col-6 order-4 order-lg-0">
                                    <div class="row no-gutters align-items-center aiz-plus-minus mr-2 ml-0">
                                        <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button"
                                            data-type="minus" data-field="quantity[<?= $row['id']?>]">
                                            <i class="las la-minus"></i>
                                        </button>
                                        <input type="number" name="quantity[<?= $row['id']?>]"
                                            class="col border-0 text-center flex-grow-1 fs-16 input-number"
                                            placeholder="1" value="<?= $row['qty']?>" min="1" max="100"
                                            onchange="showAddToCartModal(<?= $row['id'] ?>,event)">
                                        <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button"
                                            data-type="plus" data-field="quantity[<?= $row['id']?>]">
                                            <i class="las la-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="pnopoi"></div>
                                <div class="col-lg col-4 order-3 order-lg-0 my-3 my-lg-0">
                                    <span class="opacity-60 fs-12 d-block d-lg-none">Total</span>
                                    <span
                                        class="fw-600 fs-16 text-primary subtotal-<?= $row['id']?>"><?= $row['subtotal'] ?></span>
                                </div>
                                <div class="col-lg-auto col-6 order-5 order-lg-0 text-right">
                                    <a href="javascript:void(0)" id="<?= $row['rowid'] ?>"
                                        onclick="removeFromCart(this.id,this)"
                                        class="btn btn-icon text-white btn-sm btn-soft-primary btn-circle">
                                        <i class="las la-trash"></i>
                                    </a>
                                </div>

                            </div>

                        </li>
                        <?php 
                            endforeach;
                        endif;
                        ?>

                    </ul>

                    <div class="px-3 py-2 mb-4 border-top d-flex justify-content-between">
                        <span class="opacity-60 fs-15">Subtotal</span>
                        <span class="fw-600 fs-17 shopping-cart__total"><?= $cart_total;?></span>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                            <a href="<?= base_url('/')?>" class="btn btn-link">
                                <i class="las la-arrow-left"></i>
                                Return to shop
                            </a>
                        </div>
                        <?php 
                        if(!empty($cart)): 
                        ?>
                        <div class="col-md-6 text-center text-md-right">
                            <button class="btn btn-primary fw-600 px-5" onclick="shippingInfo()">Next</button>
                        </div>
                        <?php endif;
                        ?>
                    </div>

                </div>
            </div>
        </div>
</section>
<section class="mb-4 d-none" id="delivery-info">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="shadow-sm bg-white p-4 rounded">
                    <div class="mb-4">
                        <h6>Delivery Info</h6>
                    </div>
                    <hr>

                    <div class="row align-items-center">
                        <form action="<?=base_url('delivery/details')?>" method="post" class="col">
                            <?= csrf_field(); ?>
                            <input type="hidden" value="<?= count($cart)?>" name="total_prouducts">

                            <!-- <input type="hidden" name="subtotal" value=""> -->
                            <div class="form-group row">
                                <label class="col-12 col-form-label">Name:</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="name" value="<?= session('name')?>"
                                        autocomplete="off">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-form-label">Email:</label>
                                <div class="col-md-12">
                                    <input type="email" class="form-control" readonly value="<?=session('email')?>"
                                        name="email" id="email" autocomplete="off">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-form-label">Phone:</label>
                                <div class="col-md-12">
                                    <input type="phone" class="form-control" value="<?=session('phone')?>" name="phone"
                                        autocomplete="off">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-form-label">Your Address</label>
                                <div class="col-md-12">
                                    <textarea name="address" id=""
                                        class="form-control"><?= session('address');?></textarea>

                                </div>
                            </div>

                    </div>
                </div>


                <div class="row align-items-center mt-3">
                    <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                        <a href="<?= base_url('/')?>" class="btn btn-link">
                            <i class="las la-arrow-left"></i>
                            Return to shop
                        </a>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <button class="btn btn-primary fw-600" onclick="showPayment()">Next</button>
                    </div>
                </div>
                </form>

            </div>

        </div>
    </div>
    </div>
</section>
 



<?php
include 'includes/footer.php';
?>