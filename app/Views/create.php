<?php 
    include "includes/head.php";
    include "includes/header.php";
 ?>
 
    <section class="pt-4 mb-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1 class="fw-600 h4">Register your shop</h1>
                </div>
                <div class="col-lg-6">
                    <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                        <li class="breadcrumb-item opacity-50">
                            <a class="text-reset" href="<?=base_url()?>">Home</a>
                        </li>
                        <li class="text-dark fw-600 breadcrumb-item">
                            <a class="text-reset" href="create.html">"Register your shop"</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-md-8 mx-auto">
                    <form id="shop" action="<?= base_url('seller/RegisterSeller')?>" method="post"
                        enctype="multipart/form-data"> 
                        <?= csrf_field(); ?>
                        <?php if (!empty(session()->getFlashdata('fail'))) :  ?>
                                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                                    <?php endif ?> 
                                    <?php if (session()->get('success')) :  ?>
                                        <div class="alert alert-success"><?= session()->get('successfull'); ?></div>
                                    <?php endif;
                                    if (session()->get('error')) :  ?>
                                        <div class="alert alert-danger"><?= session()->get('incorrect'); ?></div>
                                    <?php endif ?> 
                                            <input type="hidden" name="type" value="0">

                        <div class="bg-white rounded shadow-sm mb-3">
                            <div class="fs-15 fw-600 p-3 border-bottom">
                                Personal Info
                            </div>
                            <div class="p-3">
                                <div class="form-group">
                                    <label>Your Name <span class="text-primary">*</span></label>
                                    <input type="text"   class="form-control" value="<?php echo set_value('fullname'); ?>" placeholder="Name" name="fullname">
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'fullname') : '' ?></span>

                                </div> 
                                <div class="form-group phone-form-group mb-3">
                                        <input type="tel" id="phone-code" class="form-control phone_cod" value="<?php echo set_value('phone'); ?>" placeholder="Phone Number" name="phone" autocomplete="off">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></span>
                                    </div>
                                    <input type="hidden" name="country_code" value="<?= set_value('country_code'); ?>">

                                <div class="form-group">
                                    <label>Your Email <span class="text-primary">*</span></label>
                                    <input type="email"   class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Email" name="email" >
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'email') : '' ?></span>

                                </div>
                                <div class="form-group">
                                    <label>Your Password  <span class="text-primary">*</span></label>
                                    <input type="password"   class="form-control" placeholder="Password" name="password" id="password-field-one">
                                    
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'password') : '' ?></span>

                                </div>
                                <div class="form-group">
                                    <label>Repeat Password  <span class="text-primary">*</span></label>
                                    <input     type="password" class="form-control" placeholder="Confirm Password" name="password_confirm" id="password-field-two">
                                    
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation,'password_confirm') : '' ?></span>

                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-sm mb-4">
                            <div class="fs-15 fw-600 p-3 border-bottom">
                                Basic Info
                            </div>
                            <div class="p-3">
                                <div class="form-group">
                                    <label>Shop Name <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control" placeholder="Shop Name" name="shop_name" value="<?php echo set_value('shop_name'); ?>">
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'shop_name') : '' ?></span>

                                </div>
                                <div class="form-group">
                                    <label>Address <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control mb-3" placeholder="Address" name="address" value="<?php echo set_value('address'); ?>">
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'address') : '' ?></span>

                                </div>
                            </div>
                        </div>

                       
                        <div class="text-right"> 
                            <button type="submit" class="btn btn-primary save-shop fw-600">Register your shop</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


 
    <?php 
    include "includes/footer.php"; 
 ?>