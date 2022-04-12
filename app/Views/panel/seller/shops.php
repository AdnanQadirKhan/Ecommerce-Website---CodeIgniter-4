<?php

include 'includes/head.php';
 
include 'includes/header.php';
include 'includes/sidebar.php';

?> 
<style>
    #fileup,#fileup2 {
    opacity: 0.9;
    -moz-opacity: 0;
    filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);
    width: 200px;
    cursor: pointer;
    /* position: absolute;
    right: 50px;
    transform: translateX(-50%);
    bottom: 40px;
    height: 50px; */
}

/*switch between input and not active input*/
#submitbtn,#submitbtn2 {
    padding: 5px 50px;
    display: none;
}

#fakebtn,#fakebtn2 {
    padding: 5px 40px;
}
#btnup, #btnup2{
    display: none;
    opacity: 0;
}
</style>
                    <div class="aiz-user-panel">

                        <div class="aiz-titlebar mt-2 mb-4">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h1 class="h3">Shop Settings
                                        <a href="<?=base_url('shops/visit/'.$shop['shop_id'])?>"
                                            class="btn btn-link btn-sm" target="_blank">(Visit Shop)<i
                                                class="la la-external-link"></i>)</a>
                                    </h1>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                        <?php if(session()->get('update-info')) :  ?>
                                    <div class="alert alert-success"><?= session()->get('update-info');?></div>
                                <?php endif; 
                                if(session()->get('update-info-failed')) :  ?>
                                    <div class="alert alert-danger"><?= session()->get('update-info-failed');?></div>
                                <?php endif; ?>
                            <div class="card-header">
                                <h5 class="mb-0 h6">Basic Info</h5>
                            </div>
                            <div class="card-body">
                            
                                <form class="" action="<?=base_url('shop/update-info')?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <label class="col-md-2 col-form-label">Shop Name<span
                                                class="text-danger text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control mb-3" placeholder="Shop Name"
                                                name="name"  value="<?=$shop['shop_name']?>" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <label class="col-md-2 col-form-label">
                                            Shop Phone
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control mb-3" placeholder="Phone"
                                                name="phone" value="<?=$shop['shop_phone']?>" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2 col-form-label">Shop Address <span
                                                class="text-danger text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control mb-3" placeholder="Address"
                                                name="address" value="<?=$shop['address']?>" required>
                                        </div>
                                    </div>

                                     
                                    <div class="form-group mb-0 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Banner </h5>
                            </div>
                            <div class="card-body">
                                <form class="" action="<?=base_url('shop/update-banner')?>" method="POST"
                                    enctype="multipart/form-data">
                                     <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Banners (1500x450)</label>
                                        <div class="col-md-10">
                                        <div class="">
                                            <!--the three icons: default, ok file (img), error file (not an img)-->
                                            <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                                            <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                                            <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                                            <!--this field changes dinamically displaying the filename we are trying to upload-->
                                            <p id="namefile">Only pics allowed! (jpg,jpeg,png)</p>
                                            <!--our custom btn which which stays under the actual one-->
                                             
                                             
                                            <p id="namefile ml-4">-</p>
                                            
                                            <input type="file" value="" name="banner" id="fileup" style="left:40% !important;">
                                            <input type="hidden" value="<?=$shop['shop_banner']?>"  name="old_banner" >
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
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Shop Logo</h5>
                            </div>
                            <div class="card-body">
                                <form class="" action="<?=base_url('shop/update-logo')?>" method="POST"
                                    enctype="multipart/form-data">
                                     <div class="row mb-3">
                                        <label class="col-md-2 col-form-label">Logo</label>
                                        <div class="col-md-10">
                                        <div class="">
                                            <!--the three icons: default, ok file (img), error file (not an img)-->
                                            <h1 class="imgupload2"><i class="fa fa-file-image-o"></i></h1>
                                            <h1 class="imgupload2 ok2"><i class="fa fa-check"></i></h1>
                                            <h1 class="imgupload2 stop2"><i class="fa fa-times"></i></h1>
                                            <!--this field changes dinamically displaying the filename we are trying to upload-->
                                            <p id="namefile2">Only pics allowed! (jpg,jpeg,png)</p>
                                            <!--our custom btn which which stays under the actual one-->
                                            
                                            <p id="namefile ml-4">-</p>
                                            <input type="file" value="" name="logo" id="fileup2" style="left:40% !important;">
                                            <input type="hidden" value="<?=$shop['shop_logo']?>" name="old_logo">
                                        </div> 
                                            <div class="file-preview box sm">
                                            </div>
                                            <small class="text-muted">We had to limit height to maintian consistancy. In
                                                some device both side of the logo might be cropped for height
                                                limitation.</small>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-right">
                                             <!--the defauld disabled btn and the actual one shown only if the three fields are valid-->
                                            <input type="submit" value="Submit!" class="btn btn-primary" id="submitbtn2">
                                            <button type="submit" class="btn btn-sm btn-primary" disabled="disabled" id="fakebtn2">Save! <i class="fa fa-minus-circle"></i></button>
                                        
                                        </div>
                                </form>
                            </div>
                        </div>


                       

                      

                    </div>
                </div>
            </div>
        </section>

     
<?php 
        include 'includes/footer.php';
?>
<script>
$('#fileup2').change(function() {
    //here we take the file extension and set an array of valid extensions
    var res = $('#fileup2').val(); 
    var arr = res.split("\\");
    var filename = arr.slice(-1)[0];
    filextension = filename.split(".");
    filext = "." + filextension.slice(-1)[0];
    valid = [".jpg", ".png", ".jpeg", ".bmp"];
    //if file is not valid we show the error icon, the red alert, and hide the submit button
    if (valid.indexOf(filext.toLowerCase()) == -1) {
        $(".imgupload2").hide("slow");
        $(".imgupload2.ok").hide("slow");
        $(".imgupload2.stop").show("slow");

        $('#namefile2').css({
            "color": "red",
            "font-weight": 700
        });
        $('#namefile2').html("File " + filename + " is not  pic!");

        $("#submitbtn").hide();
        $("#fakebtn2").show();
    } else {
        //if file is valid we show the green alert and show the valid submit
        $(".imgupload2").hide("slow");
        $(".imgupload2.stop").hide("slow");
        $(".imgupload2.ok").show("slow");

        $('#namefile2').css({
            "color": "green",
            "font-weight": 700
        });
        $('#namefile2').html(filename);

        $("#submitbtn2").show();
        $("#fakebtn2").hide();
    }
});
</script>