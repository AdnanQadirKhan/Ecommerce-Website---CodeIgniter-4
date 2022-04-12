<?php
include 'includes/head.php';
include 'includes/header.php';
?>


        <div class="py-6">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-md-8 mx-auto">
                        <div class="bg-white rounded shadow-sm p-4 text-left">
                            <h1 class="h3 fw-600">Forgot password?</h1>
                            <p class="mb-4 opacity-60">Enter your email address to recover your password. </p>
                            <form method="POST" action="<?= base_url() ?>/seller/forgot">
                                <?= csrf_field(); ?>
                                <?php if (!empty(session()->getFlashdata('error'))) :  ?>
                                        <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
                                    <?php endif ?> 
                                    <?php if (!empty(session()->getFlashdata('success'))) :  ?>
                                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                                    <?php endif ?> 
                             
                                <input type="hidden" name="_token" value="UyTin1o3bZ2YjJLuTNjYU3RsMpEWihDnqF4rvwgt">
                                <div class="form-group">
                                    <input id="email" type="text" class="form-control" name="email" value="" required="" placeholder="Email Address">
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary btn-block" type="submit">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </form>
                            <div class="mt-3">
                                <a href="<?= base_url('customer/login')?>" class="text-reset opacity-60">Back to Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        

    
                
   

  

  


    <?php
    include 'includes/footer.php';

    ?>