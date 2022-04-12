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
    				<h6 class="fw-600 mb-0">General</h6>
    			</div>
    			<div class="card-body">
    				<form action="settings/update" method="POST">
    					<input type="hidden" name="_token" value="YcujSInCwUXXk5Il56e1zWpEoVLggxnXwwWXtDJq">                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Frontend Website Name</label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="website_name">
        	                    <input type="text" name="website_name" class="form-control" placeholder="Website Name" value="Active eCommerce">
                            </div>
                        </div>
    	                <div class="form-group row">
    	                    <label class="col-md-3 col-from-label">Site Motto</label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="site_motto">
        	                    <input type="text" name="site_motto" class="form-control" placeholder="Best eCommerce Website" value="Demo of Active eCommerce CMS">
                            </div>
    	                </div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label">Site Icon</label>
                            <div class="col-md-8">
        						<div class="input-group " data-toggle="aizuploader" data-type="image">
        							<div class="input-group-prepend">
        								<div class="input-group-text bg-soft-secondary">Browse</div>
        							</div>
        							<div class="form-control file-amount">Choose file</div>
                                    <input type="hidden" name="types[]" value="site_icon">
        							<input type="hidden" name="site_icon" value="1001" class="selected-files">
        						</div>
        						<div class="file-preview box"></div>
        						<small class="text-muted">Website favicon. 32x32 .png</small>
                            </div>
    					</div>
    	                <div class="form-group row">
    	                    <label class="col-md-3 col-from-label">Website Base Color</label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="base_color">
        	                    <input type="text" name="base_color" class="form-control" placeholder="#377dff" value="#e62e04">
        						<small class="text-muted">Hex Color Code</small>
                            </div>
    	                </div>
    	                <div class="form-group row">
    	                    <label class="col-md-3 col-from-label">Website Base Hover Color</label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="base_hov_color">
        	                    <input type="text" name="base_hov_color" class="form-control" placeholder="#377dff" value="#e62e04">
        						<small class="text-muted">Hex Color Code</small>
                            </div>
    	                </div>
    					<div class="text-right">
    						<button type="submit" class="btn btn-primary">Update</button>
    					</div>
                    </form>
    			</div>
    		</div>
    		<div class="card">
    			<div class="card-header">
    				<h6 class="fw-600 mb-0">Global SEO</h6>
    			</div>
    			<div class="card-body">
    				<form action="ate" method="POST" enctype="multipart/form-data">
    					<input type="hidden" name="_token" value="YcujSInCwUXXk5Il56e1zWpEoVLggxnXwwWXtDJq">    					<div class="form-group row">
    						<label class="col-md-3 col-from-label">Meta Title</label>
                            <div class="col-md-8">
        						<input type="hidden" name="types[]" value="meta_title">
        						<input type="text" class="form-control" placeholder="Title" name="meta_title" value="Active eCommerce CMS">
                            </div>
    					</div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label">Meta description</label>
                            <div class="col-md-8">
        						<input type="hidden" name="types[]" value="meta_description">
        						<textarea class="resize-off form-control" placeholder="Description" name="meta_description">Demo of Active eCommerce CMS</textarea>
                            </div>
    					</div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label">Keywords</label>
                            <div class="col-md-8">
        						<input type="hidden" name="types[]" value="meta_keywords">
        						<textarea class="resize-off form-control" placeholder="Keyword, Keyword" name="meta_keywords"></textarea>
        						<small class="text-muted">Separate with coma</small>
                            </div>
    					</div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label">Meta Image</label>
                            <div class="col-md-8">
        						<div class="input-group " data-toggle="aizuploader" data-type="image">
        							<div class="input-group-prepend">
        								<div class="input-group-text bg-soft-secondary">Browse</div>
        							</div>
        							<div class="form-control file-amount">Choose file</div>
        							<input type="hidden" name="types[]" value="meta_image">
        							<input type="hidden" name="meta_image" value="" class="selected-files">
        						</div>
        						<div class="file-preview box"></div>
                            </div>
    					</div>
    					<div class="text-right">
    						<button type="submit" class="btn btn-primary">Update</button>
    					</div>
    				</form>
    			</div>
    		</div> 
            
    	</div>
    </div>

				</div><?php 
include 'includes/footer.php'; 
?>