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
    			<h1 class="h3">Website Footer</h1>
    		</div>
    	</div>
    </div>
 
    <div class="card">
    	<div class="card-header">
    		<h6 class="fw-600 mb-0">Footer Widget</h6>
    	</div>
    	<div class="card-body">
    		<div class="row gutters-10">
    			<div class="col-lg-6">
    				<div class="card shadow-none bg-light">
    					<div class="card-header">
    						<h6 class="mb-0">About Widget</h6>
    					</div>
    					<div class="card-body">
    						<form action="<?=base_url('admin/footer-logo')?>" method="POST" enctype="multipart/form-data">
    							   							<div class="form-group">
															   <?php if(session()->get('set')) :  ?>
                                                <div class="alert text-center alert-success"><?= session()->get('set');?></div>
                                            <?php endif;  ?>
    			                    <label class="form-label" for="signinSrEmail">Footer Logo</label>
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
									<input type="hidden" value="<?=$footer['footer_logo']?>" name="old_logo" >

									</div> 
    			                </div>
    			                <div class="form-group">
    								<label>About description </label> 
    								<textarea class="aiz-text-editor form-control" name="about_us_description" data-buttons='[["font", ["bold", "underline", "italic"]],["para", ["ul", "ol"]],["view", ["undo","redo"]]]' placeholder="Type.." data-min-height="150">
                                        </span><?=$footer['footer_desc']?>
                                    </textarea>
    							</div>
                                
    							<div class="text-right">
								<!-- <div class="form-group mb-0 text-right"> -->
                                             <!--the defauld disabled btn and the actual one shown only if the three fields are valid-->
                                            <input type="submit" value="Submit!" class="btn btn-primary" id="submitbtn">
                                            <button type="submit" class="btn btn-sm btn-primary" disabled="disabled" id="fakebtn">Save! <i class="fa fa-minus-circle"></i></button>
                                        
                                        <!-- </div> -->
    							</div>
    						</form>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
                    <div class="card shadow-none bg-light">
    					<div class="card-header">
    						<h6 class="mb-0">Contact Info Widget</h6>
    					</div>
    					<div class="card-body">
                            <form action="<?=base_url('admin/footer-contact')?>" method="POST" enctype="multipart/form-data">
							<?php if(session()->get('msg')) :  ?>
                                                <div class="alert text-center alert-success"><?= session()->get('msg');?></div>
                                            <?php endif;  ?>
    							                                <div class="form-group">
    								<label>Contact address </label> 
    								<input type="text" class="form-control" placeholder="Address" name="contact_address" value="<?=$contacts['contact_addr']?>">
    							</div>
                                <div class="form-group">
    								<label>Contact phone</label> 
    								<input type="text" class="form-control" placeholder="Phone" name="contact_phone" value="<?=$contacts['phone']?>">
    							</div>
                                <div class="form-group">
    								<label>Contact email</label>
    								<input type="hidden" name="types[]" value="contact_email">
    								<input type="text" class="form-control" placeholder="Email" name="contact_email" value="<?=$contacts['contact_email']?>">
    							</div>
    							<div class="text-right">
    								<button type="submit" class="btn btn-primary">Update</button>
    							</div>
    						</form>
    					</div>
    				</div>
    			</div> 
    		</div>
    	</div>
    </div>

    <div class="card">
    	<div class="card-header">
    		<h6 class="fw-600 mb-0">Footer Bottom</h6>
    	</div>
        <form action="<?=base_url('admin/footer-copyright')?>" method="POST" >
                  <div class="card-body">
                <div class="card shadow-none bg-light">
                    <div class="card-header">
  						<h6 class="mb-0">Copyright Widget</h6>
  					</div>
                    <div class="card-body">
					<?php if(session()->get('msge')) :  ?>
                                                <div class="alert text-center alert-success"><?= session()->get('msge');?></div>
                                            <?php endif;  ?>
                        <div class="form-group">
                  			<label>Copyright Text</label>
                  			<textarea class="aiz-text-editor form-control" name="copyright_text" data-buttons='[["font", ["bold", "underline", "italic"]],["insert", ["link"]],["view", ["undo","redo"]]]' placeholder="Type.." data-min-height="150">
                                <?=$footer['copyright_text']?>
                            </textarea>
                  		</div>
                    </div>
                </div>
                <div class="card shadow-none bg-light">
                  <div class="card-header">
						<h6 class="mb-0">Social Link Widget</h6>
					</div>
                  <div class="card-body"> 
                    <div class="form-group">
                        <label>Social Links</label>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="lab la-facebook-f"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="http://" name="facebook_link" value="<?=$link['fb']?>">
                        </div> 
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="lab la-instagram"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="http://" name="instagram_link" value="<?=$link['insta']?>">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="lab la-youtube"></i></span>
                            </div> 
                            <input type="text" class="form-control" placeholder="http://" name="youtube_link" value="<?=$link['youtube']?>">
                        </div> 
                    </div>
                  </div>
                </div>
                 

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
	</div>
				</div>
                <?php 
include 'includes/footer.php'; 
?>