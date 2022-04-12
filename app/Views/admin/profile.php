<?php
include 'includes/head.php';
include 'includes/sidebar.php';
include 'includes/header.php';
?>

            <div class="aiz-main-content">
                <div class="px-15px px-lg-25px">

                    <div class="col-lg-7  mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Profile Info</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal"
                                    action="<?=base_url('admin/update-info');?>" method="POST" >
                                    <input name="" type="hidden" value="">
                                    <?php if(session()->get('update-info')) :  ?>
                                    <div class="alert alert-success"><?= session()->get('update-info');?></div>
                                <?php endif; 
                                if(session()->get('update-info-failed')) :  ?>
                                    <div class="alert alert-danger"><?= session()->get('update-info-failed');?></div>
                                <?php endif; ?>
                                <?php if(session()->get('invalid')) :  ?>
                                    <div class="alert alert-success"><?= session()->get('invalid');?></div>
                                <?php endif;?>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-from-label" for="name">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Name" name="name"
                                                value="<?= session('name');?>" required="">
                                                <span class="text-danger"><?= isset($validation) ? display_error($validation,'name') : '' ?></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-from-label" for="name">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" readonly placeholder="Email" name="email"
                                                value="<?= session('email');?>">
                                                <span class="text-danger"><?= isset($validation) ? display_error($validation,'email') : '' ?></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-from-label" >Old Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" placeholder="Old Password"
                                                name="old_password">
                                                <span class="text-danger"><?= isset($validation) ? display_error($validation,'old_password') : '' ?></span>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-from-label">New
                                            Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" placeholder="New Password"
                                                name="new_password">
                                                <span class="text-danger"><?= isset($validation) ? display_error($validation,'new_password') : '' ?></span>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-0 text-right">
                                        <button type="submit" class="btn px-5 py-1 btn-primary">update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Profile Image</h5>
                            </div>
                            <div class="card-body">
                            <form action="<?=base_url('admin/update-profile');?>" method="post" enctype="multipart/form-data">
                            <!-- Basic Info-->
                            
                                <?php if(session()->get('uploaded')) :  ?>
                                    <div class="alert alert-success"><?= session()->get('uploaded');?></div>
                                <?php endif; 
                                if(session()->get('failed')) :  ?>
                                    <div class="alert alert-danger"><?= session()->get('failed');?></div>
                                <?php endif; ?>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Profile Image</label>
                                        <div class="col-md-10">
                                        <div class="">
                                            <!--the three icons: default, ok file (img), error file (not an img)-->
                                            <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                                            <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                                            <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                                            <!--this field changes dinamically displaying the filename we are trying to upload-->
                                            <p id="namefile">Only pics allowed! (jpg,jpeg,png)</p>
                                            <!--our custom btn which which stays under the actual one-->
                                            <button type="button" id="btnup" class="btn btn-primary py-1 px-3">Browse for your pic!</button>
                                            <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                                            <input type="file" style="left:15px" value="" name="profile_photo" id="fileup">
                                        </div> 
                                        </div>
                                    </div>
                       

                               
                            
                            <div class="form-group mb-0 text-right">
                                
                                <!--the defauld disabled btn and the actual one shown only if the three fields are valid-->
                                <input type="submit" value="Submit!" class="btn btn-primary" id="submitbtn">
                                <button type="submit" class="btn btn-sm btn-primary" disabled="disabled" id="fakebtn">Update Profile Image! <i class="fa fa-minus-circle"></i></button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>

                </div>
  <?php 
  include 'includes/footer.php';
  ?>