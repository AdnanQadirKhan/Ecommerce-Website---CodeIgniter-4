<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="<?=base_url()?>/public/assets/css/vendors.css">
    <link rel="stylesheet" href="<?=base_url()?>/public/assets/css/aiz-core.css">
    <link rel="stylesheet" href="<?=base_url()?>/public/assets/css/custom.css">
    <link rel="stylesheet" href="<?=base_url()?>/public/assets/css/fileUpload.css">
</head>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-6" style="height:520px;">
            <h1>Reset Your Password</h1>
            
             <?php 
            if(isset($validation)): ?>
            <div class="alert alert-danger">
            <?= $validation->listErrors()?>
            </div>
            <?php endif;?>
            
            
        <?php if(session()->getTempdata('error')):?>
	<div class='alert alert-danger'><?= session()->getTempdata('error');?></div>
	<?php endif;?>
            
            <?php if(isset($error)):?>
            <div class='alert alert-danger'><?= $error;?></div>
                <?php else: ?>
            <?php echo form_open();?>
                    
            <div class='form-group'>
                <label>Enter new password:</label>
                <input type="password" name="pwd" class='form-control'>
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'pwd') : '' ?></span>
            </div>
            <div class='form-group '>
                <label>Confirm new password:</label>
                <input type="password" name="cpwd" class='form-control'>
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpwd') : '' ?></span>
            </div>
            <div class='form-group'>
                <input type="submit" value='Update' class='btn btn-primary'>
            </div>
            </form>
            <?= form_close();?>

            <?php endif ?>
            
            
        </div>
    </div>
</div>
</html>
