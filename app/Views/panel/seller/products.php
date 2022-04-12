<?php
include 'includes/head.php';
include 'includes/header.php';
include 'includes/sidebar.php';

?>

<div class="aiz-user-panel">
  <div class="aiz-titlebar mt-2 mb-4">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="h3">Products</h1>
      </div>
    </div>
  </div>

  <div class="row gutters-10 justify-content-center">


    <div class="col-md-12  mx-auto mb-3">
      <a href="<?= base_url('seller/add-product'); ?>">
        <div class="p-3 bg-grid-1 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition">
          <span class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
            <i class="las la-plus la-3x text-white"></i>
          </span>
          <div class="fs-18 text-primary">Add New product
          <?= csrf_field(); ?>
        <?php if (session()->get('update-product')) :  ?>
            <div class="alert alert-success"><?= session()->get('update-product'); ?></div>
        <?php endif;
        if (session()->get('update-product-failed')) :  ?>
            <div class="alert alert-danger"><?= session()->get('update-product-failed'); ?></div>
        <?php endif ?>
        <?= csrf_field(); ?>
        <?php if (session()->get('delete-product')) :  ?>
            <div class="alert alert-success"><?= session()->get('delete-product'); ?></div>
        <?php endif;
        if (session()->get('delete-product-failed')) :  ?>
            <div class="alert alert-danger"><?= session()->get('delete-product-failed'); ?></div>
        <?php endif ?>
          </div>
        </div>
      </a>
    </div>


  </div>

  <div class="card">
    <div class="card-header row gutters-5">
      <div class="col">
        <h5 class="mb-md-0 h6">All Products</h5>
      </div>
      <!--<div class="col-md-3">-->
      <!--  <div class="input-group input-group-sm">-->
      <!--    <form class="" action="" method="GET">-->
      <!--      <input type="text" class="form-control" id="search" name="search" placeholder="Search product" />-->
          
      <!--    </form>-->
      <!--  </div>-->
      <!--</div>-->
    </div>
    <div class="card-body">
      <table class="table aiz-table mb-0">
        <thead>
          <tr>
            <th>#</th>
            <th width="30%">Name</th>
            <th data-breakpoints="md">Category</th>
            <th data-breakpoints="md">Qty</th>
            <th>Base Price</th>
            <th data-breakpoints="md" class="text-right">Options</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($products as $prod) : ?>
            <tr>
              <td><?= $prod['prod_id'] ?></td>
              <td>
                <a href="#" target="_blank" class="text-reset">
                  <?= $prod['prod_name'] ?>
                </a>
              </td>
              <td><?= $prod['cat_name']?></td>
              <td><?= $prod['prod_qty'] ?></td>
              <td><?= $prod['new_price'] ?></td>


              <td class="text-right">
                <a class="btn btn-soft-info btn-icon btn-circle btn-sm" href="<?= base_url('seller/edit-product/'.$prod['prod_id']) ?>" title="Edit">
                  <i class="las la-edit"></i>
                </a>

                <a href="<?= base_url('seller/delete-product/'.$prod['prod_id'])?>" class="btn btn-soft-danger btn-icon btn-circle btn-sm  " data-href=" " title="Delete">
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
</div>
</div>
</section>


<?php
include 'includes/footer.php';

?>