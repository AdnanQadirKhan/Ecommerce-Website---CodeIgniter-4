<?php
include 'includes/head.php';
include 'includes/sidebar.php';
include 'includes/header.php';
?>
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">All Sellers</h1>
                </div>
            </div>
        </div>

        <div class="card">
            <form class="" id="sort_sellers" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col">
                        <h5 class="mb-md-0 h6">Sellers</h5>
                    </div>


                    <!--  
                                <div class="col-md-3">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="search" name="search" placeholder="Type name or email &amp; Enter">
                                    </div>
                                </div> -->
                </div>

                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                            <?php if (session()->get('msg')) :  ?>
                                <div class="alert text-center alert-success"><?= session()->get('msg'); ?></div>
                            <?php endif;  ?>
                            <tr>
                                <th>No</th>
                                <th>Profile</th>
                                <th>Name</th>
                                <th data-breakpoints="md">Phone</th>
                                <th data-breakpoints="md">Email</th>
                                <th data-breakpoints="lg">Verification Info</th>
                                <th data-breakpoints="lg">Address</th>
                                <th data-breakpoints="lg">Created At</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($sellers as $seller) : ?>
                                <tr>
                                    <td><?= $seller['seller_id']; ?></td>
                                    <td><img style="border-radius:10px;" height="40px" width="40px" src="<?= base_url('public/uploads/profile/' . $seller['seller_pic']) ?>"></td>
                                    <td><?= $seller['seller_name']; ?></td>
                                    <td><?= $seller['seller_phone']; ?></td>
                                    <td><?= $seller['seller_email']; ?></td>
                                                                         <?php
                                    if($seller['status'] == 'active'){
                                        echo '<td><span class="badge badge-success px-5 py-3 fs-14 text-capitalize">Verified</span></td>';
                                    }else{
                                        echo '<td><span class="badge badge-danger px-5 py-3 fs-14 text-capitalize">Unverified</span></td>';

                                    }
                                    ?>
                                    <td><?= $seller['seller_address']; ?></td>
                                    <td><?= $seller['created_at']; ?></td>

                                    <td>
                                        <a href="<?php echo base_url('admin/delete-seller/' . $seller['seller_id']); ?>" class="btn btn-soft-danger btn-icon btn-circle btn-sm " title="Delete">
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

            </form>
        </div>

    </div>
    <?php
    include 'includes/footer.php';
    ?>