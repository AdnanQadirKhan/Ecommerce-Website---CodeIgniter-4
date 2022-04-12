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
                    <h1 class="h3">All Categories</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="<?= base_url('admin/add-categories') ?>" class="btn btn-primary">
                        <span>Add New category</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-block d-md-flex">
                <h5 class="mb-0 h6">Categories List</h5>
                <!-- <form class="" id="sort_categories" action="" method="GET">
                                <div class="box-inline pad-rgt pull-left">
                                    <div class="" style="min-width: 200px;">
                                        <input type="text" class="form-control" id="search" name="search"
                                            placeholder="Type name &amp; Enter">
                                    </div>
                                </div>
                            </form> -->
            </div>
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <?php if (session()->get('msg')) :  ?>
                            <div class="alert text-center alert-success"><?= session()->get('msg'); ?></div>
                        <?php endif;  ?>
                        <tr>
                            <th data-breakpoints="md">#</th>
                            <th>Name</th>
                            <th>Have Sub Category</th>
                            <th data-breakpoints="lg">Banner</th>
                            <th data-breakpoints="lg">Icon Code</th>
                            <th width="10%" class="text-right">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $cat) : ?>
                            <tr>
                                <td><?= $cat['cat_id']; ?></td>
                                <td><?= $cat['cat_name']; ?></td>
                                <td>
                                    <?php
                                    if ($cat['have_sub_cat'] == 0) {
                                        echo 'No';
                                    } else {
                                        echo 'Yes';
                                    }
                                    ?>
                                </td>
                                <td><img style="border-radius:10px;" alt="Banner" class="h-60px" src="<?= base_url('public/uploads/banners/' . $cat['cat_pic']) ?>"></td>
                                <td> <i class="<?= $cat['icon']; ?>"></i></td>



                                <td class="text-right">
                                    <!-- <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                                href=""
                                                title="Edit">
                                                <i class="las la-edit"></i>
                                            </a> -->
                                    <a href="<?php echo base_url('admin/delete-category/' . $cat['cat_id']); ?>" class="btn btn-soft-danger btn-icon btn-circle btn-sm" data-href="" title="Delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $pager->links() ?>

                <div class="aiz-pagination">
                    <nav>

                    </nav>

                </div>
            </div>
        </div>
    </div>


    <?php
    include 'includes/footer.php';
    ?>