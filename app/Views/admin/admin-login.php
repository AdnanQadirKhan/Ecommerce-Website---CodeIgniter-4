
<?php
    include 'includes/head.php';

?>
<style>
    .bg{
        opacity: 0.9;
        background-size: cover;
    }
</style>
<body class="">

    <div class="aiz-main-wrapper d-flex">
        <div class="flex-grow-1">

            <div class="h-100 bg-cover bg-center py-5 bg d-flex align-items-center" style="background-image: url(<?=base_url()?>/public/uploads/background.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-4 mx-auto">
                            <div class="card text-left">
                                <div class="card-body">
                                    <div class="mb-5 text-center">
                                        <img src="<?= base_url('public/uploads/logos/'.$logo['header_logo'])?>" class="mw-100 mb-4" height="40">
                                        <h1 class="h3 text-primary mb-0">Welcome to Admin Panel</h1>
                                        <p>Login to your account.</p>
                                    </div>
                                    <form class="pad-hor" method="POST" role="form" action="<?= base_url('admin/check') ?>">
                                        <?= csrf_field(); ?>
                                        
                                        <?php if(session()->get('successfull')) :  ?>
                                                <div class="alert alert-success"><?= session()->get('successfull');?></div>
                                            <?php endif;  
                                             if(session()->get('fail')):  ?>
                                                <div class="alert alert-danger"><?= session()->get('fail');?></div>
                                            <?php endif ?>  
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email') ?>" required="" autofocus="" placeholder="Email">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>

                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control" name="password" required="" placeholder="Password">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>

                                            
                                        </div>
                                        <div class="row mb-2">
                                         
                                            <div class="col-sm-6">
                                                <div class="text-right">
                                                    <a href="password/reset" class="text-reset fs-14">Forgot password ?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Login
                                        </button>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .aiz-main-wrapper -->



    <script src="public/assets/js/vendors.js"></script>
    <script src="public/assets/js/aiz-core.js"></script>

    <script type="text/javascript">
    </script>

</body>

</html>