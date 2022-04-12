<?php
include 'includes/head.php';
include 'includes/sidebar.php';
include 'includes/header.php';
?>
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="align-items-center">
                <h1 class="h3">All Customers</h1>
            </div>
        </div>


        <div class="card">
            <form class="" id="sort_customers" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col">
                        <h5 class="mb-0 h6">Customers</h5>
                    </div>


                    <!-- <div class="col-md-3">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="search" name="search" placeholder="Type email or name &amp; Enter">
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
                            <?php foreach ($customer as $row) :
                            ?>
                                <tr>
                                    <td><?= $row['cust_id']; ?></td>
                                    <td><img style="border-radius:10px;" height="40px" width="40px" src="<?= base_url('public/uploads/profile/' . $row['cust_pic']) ?>"></td>
                                    <td><?= $row['cust_name']; ?> </td>
                                    <td><?= $row['cust_phone']; ?></td>
                                    <td><?= $row['cust_email']; ?></td>
                                                                        <?php
                                    if($row['status'] == 'active'){
                                        echo '<td><span class="badge badge-success px-5 py-3 fs-14 text-capitalize">Verified</span></td>';
                                    }else{
                                        echo '<td><span class="badge badge-danger px-5 py-3 fs-14 text-capitalize">Unverified</span></td>';

                                    }
                                    ?>
                                    <td><?= $row['cust_address']; ?></td>
                                    <td><?= $row['created_at']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/delete-customer/' . $row['cust_id']); ?>" class="btn btn-soft-danger btn-icon btn-circle btn-sm " title="Delete">
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


        <div class="modal fade" id="confirm-ban">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h6">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to ban this Customer?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <a type="button" id="confirmation" class="btn btn-primary">Proceed!</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirm-unban">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h6">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to unban this Customer?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <a type="button" id="confirmationunban" class="btn btn-primary">Proceed!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>