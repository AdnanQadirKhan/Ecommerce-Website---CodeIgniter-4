<?php
    include 'includes/head.php';
    include 'includes/header.php';
?>

        <section class="gry-bg py-5">
            <div class="profile">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
                            <div class="card">
                                <div class="text-center pt-4">
                                    <h1 class="h4 fw-600">
                                        Login to your customer account.
                                    </h1>
                                </div>

                                <div class="px-4 py-3 py-lg-4">
                                    <div class="">
                                        <form  action="<?=base_url('customer/verify')?>" method="post">
                                            <?= csrf_field(); ?>
                                            <?php if (!empty(session()->getFlashdata('error'))) :  ?>
                                        <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
                                    <?php endif ?> 
                                    <?php if (!empty(session()->getFlashdata('success'))) :  ?>
                                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                                    <?php endif ?> 
                                            <?php if(session()->get('successfull')) :  ?>
                                                <div class="alert alert-success"><?= session()->get('successfull');?></div>
                                            <?php endif;  
                                             if(session()->get('incorrect')):  ?>
                                                <div class="alert alert-danger"><?= session()->get('incorrect');?></div>
                                            <?php endif ?> 
                                            <div class="form-group">
                                                <input type="email" class="form-control" value="<?= set_value('email') ?>" placeholder="Email"
                                                    name="email" id="email" autocomplete="off">
                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'email') : '' ?></span>

                                            </div>

                                            <div class="form-group">
                                                <input type="password" class="form-control " placeholder="Password"
                                                    name="password" id="password">
                                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'password') : '' ?></span>

                                            </div>
                                          
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <label class="aiz-checkbox">
                                                        <input type="checkbox" name="remember">
                                                        <span class="opacity-60">Remember Me</span>
                                                        <span class="aiz-square-check"></span>
                                                    </label>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="<?=base_url('customer/forgot')?>"
                                                        class="text-reset opacity-60 fs-14">Forgot password?</a>
                                                </div>
                                            </div>

                                            <div class="mb-5">
                                                <button type="submit" class="btn btn-primary btn-block fw-600">Login</button>
                                            </div>
                                        </form>
 

                                    </div>
                                    <div class="text-center">
                                        <p class="text-muted mb-0">Don't have an account?</p>
                                        <a href="<?=base_url('customer/registration')?>">Register Now</a>
                                    </div>
                                    <div class="text-center">
                                        <a href="<?=base_url('seller/login')?>">Login as a seller</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     
<?php include 'includes/footer.php' ?>