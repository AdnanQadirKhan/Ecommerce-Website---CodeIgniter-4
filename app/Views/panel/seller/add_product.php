<?php
include 'includes/head.php';
include 'includes/header.php';
include 'includes/sidebar.php';
?>
<div class="aiz-user-panel">

    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1 class="h3">Add Your Product</h1>
            </div>
        </div>
</div>
    

    <form class="" action="<?= base_url('seller/addproduct') ?>" method="POST" enctype="multipart/form-data" id="choice_form">
        <?= csrf_field(); ?>
        <?php if (session()->get('successfull')) :  ?>
            <div class="alert alert-success"><?= session()->get('successfull'); ?></div>
        <?php endif;
        if (session()->get('fail')) :  ?>
            <div class="alert alert-danger"><?= session()->get('incorrect'); ?></div>
        <?php endif ?>
        <div class="row ">
            <div class="col-lg-12"> 
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Product Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Product Name</label>
                            <div class="col-md-8">

                                <input type="text" class="form-control" name="prod_name" value="<?= set_value('prod_name');?>" placeholder="Product Name" required>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'prod_name') : '' ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Old Price</label>
                            <div class="col-md-8">

                                <input type="text" class="form-control" value="<?= set_value('old_price');?>" name="old_price" placeholder="Product Price" required>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'old_price') : '' ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">New Price</label>
                            <div class="col-md-8">

                                <input type="text" class="form-control" name="new_price" value="<?= set_value('price');?>" placeholder="New Price must be greater than old price" required>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'new_price') : '' ?></span>
                            </div>
                        </div>

                        <div class="form-group row" id="category">
                            <label class="col-md-3 col-from-label">Category</label>
                            <div class="col-md-8">

                                <select class="aiz-selectpicker form-control " name="categ_id"  id="category_id" data-live-search="true" required>
                                    <option value="">Select Category</option>
                                    <?php foreach ($cat as $c) {
                                        echo '<option value="' . $c['cat_id'] . '">' . $c['cat_name'] . '</option>';
                                    } ?>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row" id="categorhy">
                            <label class="col-md-3 col-from-label">Sub Category</label>
                            <div class="col-md-8">
                                <select class="form-control " name="sub_category_id" id="subcategory" required>
                                <option value="">Select Sub Category</option> 
                                </select>
                            </div>
                        </div>

                        <div class="form-group row" id="brand">
                            <label class="col-md-3 col-from-label">Brand</label>
                            <div class="col-md-8">
                                <select class="form-control aiz-selectpicker" name="brand_id" id="brand_id" data-live-search="true" required>
                                    <option value="">Select Brand</option>
                                    <?php foreach ($brands as $b) {
                                        echo '<option value="' . $b['brand_id'] . '">' . $b['brand_name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Quantity</label>
                            <div class="col-md-8">
                                <input type="number" lang="en" class="form-control" name="prod_qty" value="1" min="1" required>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'prod_qty') : '' ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Tags</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control aiz-tag-input" name="prod_tags[]" placeholder="Type and hit enter to add a tag">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'prod_tags[]') : '' ?></span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Product Images</h5>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">Gallery
                                Images</label>
                            <div class="col-md-8">
                                <div class="">
                                    <!--the three icons: default, ok file (img), error file (not an img)-->
                                    <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                                    <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                                    <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                                    <!--this field changes dynamically displaying the filename we are trying to upload-->
                                    <p id="namefile">Only pics allowed! (jpg,jpeg,png)</p>
                                    <!--our custom btn which which stays under the actual one-->
                                    <button type="button" id="btnup" class=" d-none btn btn-primary btn-sm px-5">Browse</button>
                                    
                                    <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                                    <p id="namefile ml-4">-</p>
                                    
                                    <input type="file" style="opacity : 1  !important; left: 40% !important;" value="<?= set_value('gallery_photo[]');?>" name="gallery_photo[]" multiple id="fileup">
                                    
                                </div>

                             
                            </div>
                        </div>

                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Product Videos</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Video Link</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="video_link" placeholder="Embedded Video Link">
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Product Description</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Description</label>
                            <div class="col-md-8">
                            <textarea class="aiz-text-editor form-control"  value="<?= set_value('prod_description');?>" name="prod_description" data-buttons='[["font", ["bold", "underline", "italic"]],["insert", ["link"]],["view", ["undo","redo"]]]' placeholder="Type.." data-min-height="150">
                                 
                            </textarea>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'prod_description') : '' ?></span>
                            </div>
                        </div>
                    </div>
                </div>
 
            </div>

 
            <div class="col-12">
                <div class="mar-all text-right"> 

                    <!--the defauld disabled btn and the actual one shown only if the three fields are valid-->
                    <input type="submit" value="Upload Product" class="btn btn-primary" id="submitbtn"> 
                    <button type="submit" class="btn btn-sm btn-primary" disabled="disabled" id="fakebtn">Add Product! <i class="fa fa-minus-circle"></i></button>
                </div>
            </div>
        </div>

    </form>
   
</div>
</div>
</div>
</section>
 
<?php
include 'includes/footer.php';
?>

<script>
    $("select[name=categ_id]").change(function(){

    if($(this).val() !=''){
     var category_id = $(this).val();
    // alert(category_id);
        getCategory(category_id);
    }
    });

    function getCategory(category_id,subcategory_id=''){

    $.ajax({
        type: "post",
        url: "<?php echo base_url('/seller/get-subcategories')?>",
        data: {category_id:category_id},
        dataType:"JSON",
        success: function(result)
        {
            // alert(result);
            // console.log(result);
        var data ='';
        // var data = '<option value="">Select SubCategoery</option>';
        var subcat_id = subcategory_id;

        if(result !=''){
            for (var i = 0; i < result.length; i++) { 
                
                if(result[i].id == subcat_id){
                    data += '<option  selected value="'+result[i].sub_cat_id+'">'+result[i].sub_cat_name+'</option>';
                }else{
                    data +=  '<option value="'+result[i].sub_cat_id+'">'+result[i].sub_cat_name+'</option>';
                }
                
            }
            console.log(data);
            $("#subcategory").attr('required',true); 
            $("#subcategory").html(data);
        
        }
        else{
            $("#subcategory").attr('required',false);
            $("#subcategory").html('<option value="">No SubCategoery Found</option>');
     
        }

        

        }
    });
    }
</script>