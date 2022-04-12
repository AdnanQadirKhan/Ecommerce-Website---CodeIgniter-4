
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activate Account</title>
    <link rel="stylesheet" href="<?=base_url()?>/public/assets/css/vendors.css">
    <link rel="stylesheet" href="<?=base_url()?>/public/assets/css/aiz-core.css">
    <link rel="stylesheet" href="<?=base_url()?>/public/assets/css/custom.css">
    <link rel="stylesheet" href="<?=base_url()?>/public/assets/css/fileUpload.css">
</head>
<div class="container">
    <h1>Account Activation</h1>
    <?php if(isset($error)):?>
    <div class="alert alert-danger">
        <?= $error;?>
    </div>
    <?php endif;?>
    
    <?php if(isset($success)):?>
    <div class="alert alert-success">
        <?= $success;?>
    </div>
    <?php endif;?>
    
    
</div>
