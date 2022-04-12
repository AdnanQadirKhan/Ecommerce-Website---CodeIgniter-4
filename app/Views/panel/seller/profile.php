<?php
include "includes/head.php";
include "includes/header.php";
include "includes/sidebar.php";
?>
<div class="aiz-user-panel">
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">Manage Profile</h1>
            </div>
        </div>
    </div>
    <form action="<?= base_url('seller/update-profile'); ?>" method="post" enctype="multipart/form-data">
        <?php if (session()->get('update-info')) :  ?>
            <div class="alert alert-success"><?= session()->get('update-info'); ?></div>
        <?php endif;
        if (session()->get('update-info-failed')) :  ?>
            <div class="alert alert-danger"><?= session()->get('update-info-failed'); ?></div>
        <?php endif; ?>
        <!-- Basic Info-->
        <div class="card">

            <div class="card-header">
                <h5 class="mb-0 h6">Profile Image</h5>
            </div>
            <div class="card-body">
                <?php if (session()->get('uploaded')) :  ?>
                    <div class="alert alert-success"><?= session()->get('uploaded'); ?></div>
                <?php endif;
                if (session()->get('failed')) :  ?>
                    <div class="alert alert-danger"><?= session()->get('failed'); ?></div>
                <?php endif; ?>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Image</label>
                    <div class="col-md-10">
                        <div class="">
                            <!--the three icons: default, ok file (img), error file (not an img)-->
                            <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                            <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                            <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                            <!--this field changes dinamically displaying the filename we are trying to upload-->
                            <p id="namefile">Only pics allowed! (jpg,jpeg,png)</p>
                            <!--our custom btn which which stays under the actual one-->
                           
                            <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                            <p id="namefile ml-4">-</p>

                            <input type="file"  value="" style="left: 40% !important;" name="profile_photo" id="fileup">
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="form-group mb-0 text-right">

            <!--the defauld disabled btn and the actual one shown only if the three fields are valid-->
            <input type="submit" value="Submit!" class="btn btn-primary" id="submitbtn">
            <button type="submit" class="btn btn-sm btn-primary" disabled="disabled" id="fakebtn">Update Profile Image! <i class="fa fa-minus-circle"></i></button>
        </div>
    </form>

    <br>
    <form action="<?= base_url('seller/update-info'); ?>" method="POST">
        <input type="hidden" name="_token" value="">
        <!-- Basic Info-->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">Basic Info</h5>
            </div>
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Your Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="Your Name" name="name" value="<?= session('name'); ?>">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Your Phone</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="Your Phone" name="phone" value="<?= session('phone'); ?>">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></span>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Your Address</label>
                    <div class="col-md-10">
                        <textarea name="address" id="" class="form-control"><?= session('address'); ?></textarea>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'address') : '' ?></span>

                    </div>
                </div>

            </div>
        </div>



        <div class="form-group mb-0 text-right">
            <button type="submit" class="btn btn-primary">Update Info</button>
        </div>
    </form>

    <br>

    <!-- change password -->
    <form action="<?= base_url('seller/change-password') ?>" class="mb-3" method="POST">
        <?php if (session()->get('invalid')) :  ?>
            <div class="alert alert-success"><?= session()->get('invalid'); ?></div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">Change Password</h5>
            </div>
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Your Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" placeholder="Old Password" name="old_password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">New Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" placeholder="New Password" name="new_password">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group mb-0 text-right">
            <button type="submit" class="btn btn-primary">Change Password</button>
        </div>
    </form>


    <!-- Change Email -->
    <form action="new-user-email" method="POST">
        <input type="hidden" name="_token" value="">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">Change your email</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <label>Your Email</label>
                    </div>
                    <div class="col-md-10">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" readonly placeholder="Your Email" name="email" value="<?= session('email'); ?>">
                            <div class="input-group-append">
                                <button type="button"  class="btn btn-success new-email-verification">
                                      Verfied
                                </button>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
</div>
</div>
</section>


<?php include 'includes/footer.php'; ?>