<section class="bg-white border-top mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-4">
                <a class="text-reset border-left text-center p-4 d-block" href="#">
                    <i class="la la-file-text la-3x text-primary mb-2"></i>
                    <h4 class="h6">Terms &amp; conditions</h4>
                </a>
            </div>

            <div class="col-lg-4 col-md-4">
                <a class="text-reset border-left text-center p-4 d-block" href="#">
                    <i class="la la-support la-3x text-primary mb-2"></i>
                    <h4 class="h6">Support Policy</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a class="text-reset border-left border-right text-center p-4 d-block" href="#">
                    <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                    <h4 class="h6">Privacy Policy</h4>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="bg-dark py-5 text-light footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 text-center text-md-left">
                <div class="mt-4">
                    <a href="<?= base_url() ?>" class="d-block">
                        <img class="lazyload" src="<?= base_url('public/uploads/logos/' . $footer['footer_logo']) ?>"
                            alt="Subeza" height="44">
                    </a>
                    <div class="my-3">
                        <span style="color: rgb(242, 243, 248); font-family: " Open Sans", sans-serif; background-color:
                            rgb(17, 23, 35);"><?= $footer['footer_desc'] ?></span>
                    </div>
                    <div class="my-3">
                        <ul class="list-inline my-3 my-md-0 social colored">
                            <li class="list-inline-item">
                                <a href="<?= $link['fb'] ?>" target="_blank" class="facebook"><i
                                        class=" mt-2 lab la-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= $link['insta'] ?>" target="_blank" class="instagram"><i
                                        class="mt-2 lab la-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?= $link['youtube'] ?>" target="_blank" class="youtube"><i
                                        class="mt-2 lab la-youtube"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        Contact Info
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <span class="d-block opacity-30">Address:</span>
                            <span class="d-block opacity-70"><?= $contact['contact_addr'] ?></span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">Phone:</span>
                            <span class="d-block opacity-70"><?= $contact['phone'] ?></span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-30">Email:</span>
                            <span class="d-block opacity-70">
                                <a href="#" class="text-reset"><span><?= $contact['contact_email'] ?></span></a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        Quick Links
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="<?= base_url() ?>" class="opacity-50 hov-opacity-100 text-reset">
                                Home
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?= base_url('brands') ?>" class="opacity-50 hov-opacity-100 text-reset">
                                Brands
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?= base_url('sellers') ?>" class="opacity-50 hov-opacity-100 text-reset">
                                Sellers
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?= base_url('categories') ?>" class="opacity-50 hov-opacity-100 text-reset">
                                Categories
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?= base_url('about-us') ?>" class="opacity-50 hov-opacity-100 text-reset">
                                About Us
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        My Account
                    </h4>
                    <ul class="list-unstyled">
                        <?php if (!session('isLoggedIn')) : ?>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="<?= base_url('admin/login') ?>">
                                Admin
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="<?= base_url('customer/login') ?>">
                                My Wishlist
                            </a>
                        </li>
                        <?php else : ?>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="<?= base_url('logout') ?>">
                                Logout
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="<?= base_url('wishlists') ?>">
                                My Wishlist
                            </a>
                        </li>


                        <?php endif; ?>
                    </ul>
                </div>
                <?php if (!session('isLoggedIn')) : ?>
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        Be a Seller
                    </h4>
                    <a href="<?= base_url('seller/registration'); ?>" class="btn btn-primary btn-sm shadow-md">
                        Apply Now
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="text-center text-md-center">
                    <?= $footer['copyright_text'] ?>
                </div>
            </div>


        </div>
    </div>
</footer>


<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top"
    style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="<?= base_url() ?>" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-home fs-20 opacity-60 opacity-100 text-primary"></i>
                <span class="d-block fs-10 fw-600 opacity-60 opacity-100 fw-600">Home</span>
            </a>
        </div>
        <div class="col">
            <a href="<?= base_url('categories') ?>" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-list-ul fs-20 opacity-60 "></i>
                <span class="d-block fs-10 fw-600 opacity-60 ">Categories</span>
            </a>
        </div>
        <div class="col-auto">
        <?php if (!session('isLoggedIn')) : ?>
            <a href="<?= base_url('customer/login') ?>" onclick="firstLogin()" class="text-reset d-block text-center pb-2 pt-3">
                <span
                    class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px"
                    style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span class="d-block mt-1 fs-10 fw-600 opacity-60 ">
                    Cart
                    (<span class="cart-count">0</span>)
                </span>
            </a>
            <?php else : ?>
            <a href="<?= base_url('customer/login') ?>" class="text-reset d-block text-center pb-2 pt-3">
            <span
                    class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px"
                    style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span class="d-block mt-1 fs-10 fw-600 opacity-60 ">
                    Cart
                    (<span class="cart-count">0</span>)
                </span>
                </a>
                <?php endif; ?>

        </div>
        <div class="col">
            <?php if (!session('isLoggedIn')) : ?>
            <a href="<?= base_url('customer/login') ?>" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i class="las la-bell fs-20 opacity-60 "></i>
                </span>
                <span class="d-block fs-10 fw-600 opacity-60 ">Notifications</span>
            </a>
            <?php else : ?>
            <a href="<?= base_url('notification') ?>" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i class="las la-bell fs-20 opacity-60 "></i>
                </span>
                <span class="d-block fs-10 fw-600 opacity-60 ">Notifications</span>
            </a>
            <?php endif; ?>
        </div>
        <?php if (session('isLoggedIn')) : ?>
        <div class="col">
            <a href="javascript:void(0)" class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb"
                data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
                <span class="d-block mx-auto"> 
                    
                    <img src="<?= base_url() ?>/public/uploads/profile/<?=session('pic')?>"
                         class="rounded-circle size-20px"
                        onerror="this.onerror=null;this.src="<?= base_url() ?>/public/uploads/profile/avatar.jpg">
                        
                </span>
                <span class="d-block fs-10 fw-600 opacity-60">Account</span>
            </a>
        </div>
        <?php else : ?>
        <div class="col">

            <a href="<?= base_url('customer/login') ?>" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-block mx-auto">
                    <img src="<?= base_url() ?>/public/uploads/profile/avatar.jpg" class="rounded-circle size-20px">
                </span>
                <span class="d-block fs-10 fw-600 opacity-60">Account</span>
            </a>
        </div>

        <?php endif;  ?>

    </div>
</div>
<div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
    <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static"
        data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
    <div class="collapse-sidebar bg-white">
        <div class="aiz-user-sidenav-wrap position-relative z-1 shadow-sm">
            <div class="aiz-user-sidenav rounded overflow-auto c-scrollbar-light pb-5 pb-xl-0">
                <div class="p-4 text-xl-center mb-4 border-bottom bg-primary text-white position-relative">
                    <span class="avatar avatar-md mb-3">
                        <img src="<?php echo base_url('public/uploads/profile/') .'/'.session('pic')?>"
                            onerror="this.onerror=null;this.src='<?=base_url('public/uploads/')?>avatar.jpg';">
                    </span>
                    <h4 class="h5 fs-16 mb-1 fw-600"><?= session('name');?> </h4>
                    <div class="text-truncate opacity-60"> <?= session('email');?>
                    </div>
                </div>

                <div class="sidemnenu mb-3">
                    <ul class="aiz-side-nav-list px-2" data-toggle="aiz-side-menu">
                        <?php if(session('isLoggedIn')){
                        if(session('type')== 'seller' || session('type')== 'customer'){   ?>
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url(session('type'))?>" class="aiz-side-nav-link ">
                                <i class="las la-home aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url(session('type') . '/profile')?>" class="aiz-side-nav-link ">
                                <i class="las la-user aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Manage Profile</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url('wishlists'); ?>" class="aiz-side-nav-link ">
                                <i class="la la-heart-o aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Wishlist</span>
                            </a>
                        </li>
                        <!--<li class="aiz-side-nav-item">-->
                        <!--    <a href="#" class="aiz-side-nav-link ">-->
                        <!--        <i class="las la-file-alt aiz-side-nav-icon"></i>-->
                        <!--        <span class="aiz-side-nav-text">Purchase History</span>-->
                        <!--        <span class="badge badge-inline badge-success">new</span> </a>-->
                        <!--</li>-->
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url(session('type').'/orders'); ?>" class="aiz-side-nav-link ">
                                <i class="las la-money-bill aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Orders</span>
                            </a>
                        </li>
                        <?php }  if(session('type')=='seller'){ ?>
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url('seller/shop')?>" class="aiz-side-nav-link ">
                                <i class="las la-cog aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Shop Setting</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url('seller/products'); ?>" class="aiz-side-nav-link ">
                                <i class="lab la-sketch aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Products</span>
                            </a>
                        </li>
                        <!--<li class="aiz-side-nav-item">-->
                        <!--    <a href="<?= base_url('seller/reviews')?>" class="aiz-side-nav-link ">-->
                        <!--        <i class="las la-star-half-alt aiz-side-nav-icon"></i>-->
                        <!--        <span class="aiz-side-nav-text">Product Reviews</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <?php }} ?>



                    </ul>
                </div>
                <hr>


            </div>

            <div class="fixed-bottom d-xl-none bg-white border-top d-flex justify-content-between px-2"
                style="box-shadow: 0 -5px 10px rgb(0 0 0 / 10%);">
                <a class="btn btn-sm p-2 d-flex align-items-center" href="<?= base_url('logout') ?>">
                    <i class="las la-sign-out-alt fs-18 mr-2"></i>
                    <span>Logout</span>
                </a>
                <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static"
                    data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                    <i class="las la-times la-2x"></i>
                </button>
            </div>
        </div>
    </div>
</div>


</div>






<!-- SCRIPTS -->
<script src="<?= base_url('public/assets/js/vendors.js') ?>"></script>
<script src="<?= base_url('public/assets/js/aiz-core.js') ?>"></script>



<script>
var base_url = "<?php echo base_url(); ?>";
var currency = '€';

window.onload = reload_header_cart();
$(document).ready(function() {
    $('.category-nav-element').each(function(i, el) {
        $(el).on('mouseover', function() {

        });
    });
    // if ($('#lang-change').length > 0) {
    //     $('#lang-change .dropdown-menu a').each(function() {
    //         $(this).on('click', function(e) {
    //             e.preventDefault();
    //             var $this = $(this);
    //             var locale = $this.data('flag');
    //             $.post('language', {
    //                 _token: AIZ.data.csrf,
    //                 locale: locale
    //             }, function(data) {
    //                 location.reload();
    //             });

    //         });
    //     });
    // }

    if ($('#currency-change').length > 0) {
        $('#currency-change .dropdown-menu a').each(function() {
            $(this).on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                var currency_code = $this.data('currency');
                $.post('currency', {
                    _token: AIZ.data.csrf,
                    currency_code: currency_code
                }, function(data) {
                    location.reload();
                });

            });
        });
    }
});

$('#search').on('keyup', function() {
    search();
});

$('#search').on('focus', function() {
    search();
});


function updateNavCart(view, count) {
    $('.cart-count').html(count);
    $('#cart_items').html(view);
}

function removeFromCart(key) {
    $.post('cart/removeFromCart', {
        _token: AIZ.data.csrf,
        id: key
    }, function(data) {
        updateNavCart(data.nav_cart_view, data.cart_count);
        $('#cart-summary').html(data.cart_view);
        AIZ.plugins.notify('success', "Item has been removed from cart");
        $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
    });
}



function addToWishList(id) {

    AIZ.plugins.notify('warning', "Please login first");
}

function showAddToCartModalold(id) {

    // AIZ.plugins.notify('warning', "Please login first");


    $.ajax({
        url: "<?php echo site_url('add-to-cart');?>",
        method: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            // $('#detail_cart').html(data);
            alert(id);
        },
        error: function(ajaxOptions, thrownError) {
            alert(thrownError);
        }
    });



}

function showAddToCartModal(id, e) {

    var quantity = $("input[name='quantity[" + id + "]']").val();

    var product = id;
    e = e || window.event;
    e = e.target || e.srcElement;
    var elm_type = $(e).data('type');
    var button = $(e);
    var alread = button.html();
    if (button.is("i")) {
        var alread_classes = button.attr('class');
    }
    var type = 'pp';
    if (button.closest('.row').find('.cart_quantity').length) {
        quantity = button.closest('.margin-bottom-40').find('.cart_quantity').val();
    }
    // alert($('#pnopoi').length);
    if ($('#pnopoi').length) {
        type = 'pp';

    } else {
        type = 'other';

    }

    $.ajax({
        url: base_url + '/add-to-cart/add/' + product + '/' + type,
        type: 'POST', // form submit method get/post
        dataType: 'html', // request type html/json/xml
        data: {
            quantity: quantity
        }, // serialize form data 
        cache: false,
        // contentType : false,
        // processData : false,
        beforeSend: function() {
            if (button.is("i")) {
                button.attr('class', 'fa fa-spinner fa-spin fa-fw');
            } else {
                button.find('i').attr('class', 'fa fa-spinner fa-spin fa-fw');
            }
        },
        success: function(data) {

            if (data == 'added') {
                reload_header_cart();
                AIZ.plugins.notify('success', 'Product Added To Cart');

            } else if (data == 'shortage') {
                AIZ.plugins.notify('warning', 'Product Quantity Exceed Availability!');

            } else if (data == 'already') {
                AIZ.plugins.notify('warning', 'Product Already Added To Cart!');

            }
            if (button.is("i")) {
                button.attr('class', alread_classes);
            } else {
                button.html(alread);
            }
        },
        error: function(e) {
            console.log(e)
        }
    });
}

function reload_header_cart() {

    $.getJSON(base_url + "/add-to-cart/whole_list", function(result) {

        var total = 0;
        var whole_list = '';
        var count = Object.keys(result).length;
        $.each(result, function(i, field) {
            total += Number(field['subtotal']);
            subtotal = Number(field['subtotal']);
            $('.subtotal-' + field['id']).text(subtotal);
            // alert(subtotal);

            whole_list += '<li class="list-item clearfix "><a href="' + base_url + '/product/' + field[
                    'id'] + '"><img src=\'' + field['image'] +
                '\' alt="item1" /><span class="item-name">' + field['name'] +
                '</span><span class="item-price">' + currency + ' ' + (Number(field['price']) * Number(
                    field['qty'])).toFixed(2) + '</span><span class="item-quantity">Quantity:' + field[
                    'qty'] + '</span></a></li>';


        });

        $('.cart-count').html(count);
        // $('.header__cart__indicator').html(currency+total.toFixed(2));
        // $('.shopping-cart__top').html('Your Cart('+count+')');
        if (count == 0) {
            $('.top_carted_list').html('Your cart is empty');
            $('.media').hide();
        } else {
            $('.top_carted_list').html(whole_list);
            $('.media').show();
        }



        $('.shopping-cart__total').html(currency + ' ' + total.toFixed(2));
    });
}



function removeFromCart(id, e) { 
    var rowid = id;

    $.ajax({
        url: base_url + '/add-to-cart/remove_one/' + rowid,
        success: function(data) {
            // alert(data);
            AIZ.plugins.notify('success', 'Product removed from cart');
            //sound('cart_product_removed');
            reload_header_cart();

            $('.cart-id-' + rowid).remove();

        },
        error: function(e) {
            console.log(e)
        }
    });
}
</script>

<script>
$('#fileup').change(function() {
    //here we take the file extension and set an array of valid extensions
    var res = $('#fileup').val(); 
    var arr = res.split("\\");
    var filename = arr.slice(-1)[0];
    filextension = filename.split(".");
    filext = "." + filextension.slice(-1)[0];
    valid = [".jpg", ".png", ".jpeg", ".bmp"];
    //if file is not valid we show the error icon, the red alert, and hide the submit button
    if (valid.indexOf(filext.toLowerCase()) == -1) {
        $(".imgupload").hide("slow");
        $(".imgupload.ok").hide("slow");
        $(".imgupload.stop").show("slow");

        $('#namefile').css({
            "color": "red",
            "font-weight": 700
        });
        $('#namefile').html("File " + filename + " is not  pic!");

        $("#submitbtn").hide();
        $("#fakebtn").show();
    } else {
        //if file is valid we show the green alert and show the valid submit
        $(".imgupload").hide("slow");
        $(".imgupload.stop").hide("slow");
        $(".imgupload.ok").show("slow");

        $('#namefile').css({
            "color": "green",
            "font-weight": 700
        });
        $('#namefile').html(filename);

        $("#submitbtn").show();
        $("#fakebtn").hide();
    }
});
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
<script>

function firstLogin(){
    AIZ.plugins.notify('warning', "Please login first");
}
function shippingInfo() {
    $('#cart-summary').slideDown();
    $('#delivery-info').slideUp();

    $('#cart-summary').addClass('d-none');

    $('.delivery').addClass('active text-primary');
    $('.delivery i').removeClass('opacity-50');
    $('.delivery h3').removeClass('opacity-50');
    $('#delivery-info').removeClass('d-none');


}

 

 

 
</script>
<!-- <script src="<?= base_url() ?>/public/assets/js/jQueryv1.11.3.min.js"></script>  -->
<script src="<?= base_url() ?>/public/assets/js/translate-google.js"></script>
<script>
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: false
    }, 'google_translate_element');
}

function translateLanguage(lang) {
    googleTranslateElementInit();
    var $frame = $('.goog-te-menu-frame:first');
    if (!$frame.size()) {
        alert("Error: Could not find Google translate frame.");
        return false;
    }
    $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
    return false;
}

$(function() {
    $('.selectpicker').selectpicker();
});

</script>
<script>
    function addToWishList(id){ 
        
        $.ajax({
        type: "post",
        url: "<?php echo base_url('add/wishlist')?>",
        data: {id:id},
        dataType:"JSON",
        success: function(result)
        { 
            
             if(result == '1'){
                 AIZ.plugins.notify('success',"Successfully added to wishlist.");
             }else if(result == '2'){ 
                AIZ.plugins.notify('warning',"Please login first!");
            }else{
                 AIZ.plugins.notify('warning',"Already added to wishlist!");

             }
        }
    });
    }
    
</script>
<script>
    $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
</body>

</html>