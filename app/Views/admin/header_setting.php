<?php 
include 'includes/head.php';
include 'includes/sidebar.php';
include 'includes/header.php';
?>
 
        <div class="aiz-main-content">
          <div class="px-15px px-lg-25px">
            <div class="aiz-titlebar text-left mt-2 mb-3">
              <div class="row align-items-center">
                <div class="col">
                  <h1 class="h3">Website Header</h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 mx-auto">
                <div class="card">
                  <div class="card-header">
                    <h6 class="mb-0">Header Setting</h6>
                  </div>
                  <div class="card-body">
                  <form class="form-horizontal"
                                        action="<?=base_url('admin/update-header')?>" method="POST"
                                        enctype="multipart/form-data"> 
                                        <div class="form-group row">
                                        <?php if(session()->get('pass')) :  ?>
                                    <div class="alert alert-success"><?= session()->get('pass');?></div>
                                <?php endif; 
                                if(session()->get('failed')) :  ?>
                                    <div class="alert alert-danger"><?= session()->get('failed');?></div>
                                <?php endif; ?> </div> 
                                             
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="signinSrEmail">Logo
                                                <small></small></label>
                                            <div class="col-md-9"> 
  
                                    <div class="form-group row">

                                        <div class="col-md-10">
                                        <div class="">


                                            <!--the three icons: default, ok file (img), error file (not an img)-->
                                            <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                                            <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                                            <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                                            <!--this field changes dinamically displaying the filename we are trying to upload-->
                                            <p id="namefile">Only pics allowed! (jpg,jpeg,png)</p>
                                            <!--our custom btn which which stays under the actual one-->
                                            <button type="button" id="btnup" class="btn btn-primary py-1 px-4">Browse for your pic!</button>
                                            <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                                            <input type="file" value="" name="logo" id="fileup">
                                            <input type="hidden" value="<?=$logos['header_logo']?>" name="old_logo" >

                                        </div> 

                                        </div>
                                    </div> 
 
                                            </div>
                                            
                                        </div>  
                                        <div class="form-group mb-0 text-right">
                                             <!--the defauld disabled btn and the actual one shown only if the three fields are valid-->
                                            <input type="submit" value="Submit!" class="btn btn-primary" id="submitbtn">
                                            <button type="submit" class="btn btn-sm btn-primary" disabled="disabled" id="fakebtn">Save! <i class="fa fa-minus-circle"></i></button>
                                        
                                        </div>
                                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php 
include 'includes/footer.php'; 
?>