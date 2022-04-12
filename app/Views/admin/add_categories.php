<?php
include 'includes/head.php';
include 'includes/sidebar.php';
include 'includes/header.php';
?>
            <div class="aiz-main-content">
                <div class="px-15px px-lg-25px">

                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0 h6">Category Information</h5>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal"
                                        action="<?=base_url('admin/save')?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php if(session()->get('msg')) :  ?>
                                                <div class="alert text-center alert-success"><?= session()->get('msg');?></div>
                                            <?php endif;  ?>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="Category Name" id="name" name="cat_name"
                                                    class="form-control" required>
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cat_name') : '' ?></span>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Parent Category</label>
                                            <div class="col-md-9">
                                            <select class="select2 form-control aiz-selectpicker" id="parent_cat" name="parent_id"
                                                    data-toggle="select2" data-placeholder="Choose ..."
                                                    data-live-search="true" onchange="ShowSubCats()">
                                                    
                                                    <?php
                                                        echo '<option value="0">No parent category</option>';

                                                    foreach ($categories as $cat) {
                                                        echo '<option value="'.$cat['cat_id'].'">'.$cat['cat_name'].'</option>';
                                                    }
                                                    
                                                    ?>
                                                    
                                            </select>
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'parent_id') : '' ?></span>

                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="signinSrEmail">Banner
                                                <small>(200x200)</small></label>
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
                                            <input type="file" value="" name="cat_banner" id="fileup">
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