<?php
include 'includes/head.php';
include 'includes/sidebar.php';
include 'includes/header.php';
?>

<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="align-items-center">
                <h1 class="h3">All Brands</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header row gutters-5">
                        <div class="col text-center text-md-left">
                            <h5 class="mb-md-0 h6">Brands</h5>
                        </div>
                        <!-- <div class="col-md-4">
                                        <form class="" id="sort_brands" action="" method="GET">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control" id="search" name="search"
                                                    placeholder="Type name &amp; Enter">
                                            </div>
                                        </form>
                                    </div> -->
                    </div>
                    <div class="card-body">
                        <table class="table aiz-table mb-0">
                            <?php if (session()->get('msg')) :  ?>
                                <div class="alert text-center alert-success"><?= session()->get('msg'); ?></div>
                            <?php endif;  ?>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th class="text-right">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($brands as $brand) : ?>
                                    <tr>
                                        <td><?= $brand['brand_id']; ?></td>
                                        <td><?= $brand['brand_name']; ?></td>
                                        <td>
                                            <img src="<?= base_url('public/uploads/brands/' . $brand['brand_pic']) ?>" alt="Brand" class="h-50px">
                                        </td>
                                        <td class="text-right">
                                            <!-- <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                                        href=""
                                                        title="Edit">
                                                        <i class="las la-edit"></i>
                                                    </a> -->
                                            <a href="<?php echo base_url('admin/delete-brand/' . $brand['brand_id']); ?>" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="Delete">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?= $pager->links() ?>
                        <div class="aiz-pagination">
                        

                             

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Add New Brand</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="<?= base_url('admin/add-brand') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Brand Name" id="name" name="brandName" class="form-control" required>
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'brandName') : '' ?></span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="signinSrEmail">Logo
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
                                                <input type="file" value="" name="logo" id="fileup">
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

        <?php
        include 'includes/footer.php';
        ?>