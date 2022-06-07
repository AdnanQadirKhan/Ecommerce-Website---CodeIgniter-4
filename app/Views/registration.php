<?php
include "includes/head.php";

include "includes/header.php";

?>
<section class="gry-bg py-4">
    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
                    <div class="card">
                        <div class="text-center pt-4">
                            <h1 class="h4 fw-600">
                                Create an account.
                            </h1>
                        </div>
                        <div class="px-4 py-3 py-lg-4">
                            <div class="">
                                <form action="<?= base_url() ?>/customer/RegisterCustomer" method="post">
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


                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo set_value('fullname'); ?>" placeholder="Full Name" name="fullname">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'fullname') : '' ?></span>
                                    </div>

                                    <div class="form-group phone-form-group mb-3">
                                        <input type="tel" id="phone-code" class="form-control phone_cod" value="<?php echo set_value('phone'); ?>" placeholder="Phone Number" name="phone" autocomplete="off">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></span>
                                    </div>
                                    <input type="hidden" name="country_code" value="<?php echo set_value('country_code'); ?>">

                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control " value="<?php echo set_value('email'); ?>" placeholder="Email" name="email" autocomplete="off">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" class="form-control" placeholder="Password" name="password" id="password-field-one">
                                        
                                        
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                                    </div>

                                    <div class="form-group mb-2">
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirm" id="password-field-two" >
                                       
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password_confirm') : '' ?></span>
                                    </div>

                                    <div class="mb-3">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="checkbox_example_1" required="">
                                            <span class="opacity-60">By signing up you agree to our terms and
                                                conditions.</span>
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>

                                    <div class="mb-4">
                                        <button type="submit" class="btn btn-primary btn-block fw-600">Create
                                            Account</button>
                                    </div>
                                </form>
                            </div>
                            <div class="text-center">
                                <p class=" mb-0"><a href="<?= base_url('seller/registration'); ?>">Create account as a seller</a></p>

                            </div>
                            <div class="text-center">
                                <p class="text-muted mb-0">Already have an account?</p>
                                <a href="<?= base_url('customer/login'); ?>">Login</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>