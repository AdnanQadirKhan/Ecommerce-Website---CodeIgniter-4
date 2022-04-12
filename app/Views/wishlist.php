
<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="csrf-token" content="3mRilnpB7zXDabzk5sYclWyklcVlSJZQZpoyUKWZ">
    <meta name="app-url" content="//demo.activeitzone.com/ecommerce/">
    <meta name="file-base-url" content="//demo.activeitzone.com/ecommerce/public/">

    <title>Active eCommerce | Demo of Active eCommerce CMS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Demo of Active eCommerce CMS" />
    <meta name="keywords" content="">

    
            <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Active eCommerce CMS">
        <meta itemprop="description" content="Demo of Active eCommerce CMS">
        <meta itemprop="image" content="">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="Active eCommerce CMS">
        <meta name="twitter:description" content="Demo of Active eCommerce CMS">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image" content="">

        <!-- Open Graph data -->
        <meta property="og:title" content="Active eCommerce CMS" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://demo.activeitzone.com/ecommerce" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="Demo of Active eCommerce CMS" />
        <meta property="og:site_name" content="Active eCommerce CMS" />
        <meta property="fb:app_id" content="">
    
    <!-- Favicon -->
    <link rel="icon" href="https://demo.activeitzone.com/ecommerce/public/uploads/all/4xnLnzEeu3dFKDGSBMlvLXPLGXFdHEkvqBSZREmO.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://demo.activeitzone.com/ecommerce/public/assets/css/vendors.css">
        <link rel="stylesheet" href="https://demo.activeitzone.com/ecommerce/public/assets/css/aiz-core.css">
    <link rel="stylesheet" href="https://demo.activeitzone.com/ecommerce/public/assets/css/custom-style.css">


    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Nothing selected',
            nothing_found: 'Nothing Found',
            choose_file: 'Choose file',
            file_selected: 'File selected',
            files_selected: 'Files selected',
            add_more_files: 'Add more files',
            adding_more_files: 'Adding more files',
            drop_files_here_paste_or: 'Drop files here, paste or',
            browse: 'Browse',
            upload_complete: 'Upload complete',
            upload_paused: 'Upload paused',
            resume_upload: 'Resume upload',
            pause_upload: 'Pause upload',
            retry_upload: 'Retry upload',
            cancel_upload: 'Cancel upload',
            uploading: 'Uploading',
            processing: 'Processing',
            complete: 'Complete',
            file: 'File',
            files: 'Files',
        }
    </script>

    <style>
        body{
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
        }
        :root{
            --primary: #e62e04;
            --hov-primary: #e62e04;
            --soft-primary: rgba(230,46,4,0.15);
        }

        #map{
            width: 100%;
            height: 250px;
        }
        #edit_map{
            width: 100%;
            height: 250px;
        }

        .pac-container { z-index: 100000; }
    </style>




</head>
<body>
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column">

        <!-- Header -->
        <div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner" data-value="removed">
    <a href="#" class="d-block text-reset">
        <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/VhEx0nvy8mDVDBjnCOdhZmuTSqsq6jJkvagvdhSK.png" class="w-100 mw-100 h-50px h-lg-auto img-fit">
    </a>
    <button class="btn text-white absolute-top-right set-session" data-key="top-banner" data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
        <i class="la la-close la-2x"></i>
    </button>
</div>
<!-- Top Bar -->
<div class="top-navbar bg-white border-bottom border-soft-secondary z-1035">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col">
                <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                                        <li class="list-inline-item dropdown mr-3" id="lang-change">
                                                <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2" data-toggle="dropdown" data-display="static">
                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png" class="mr-2 lazyload" alt="English" height="11">
                            <span class="opacity-60">English</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                                                            <li>
                                    <a href="javascript:void(0)" data-flag="en" class="dropdown-item ">
                                        <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/en.png" class="mr-1 lazyload" alt="English" height="11">
                                        <span class="language">English</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="javascript:void(0)" data-flag="bd" class="dropdown-item ">
                                        <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/bd.png" class="mr-1 lazyload" alt="Bangla" height="11">
                                        <span class="language">Bangla</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="javascript:void(0)" data-flag="sa" class="dropdown-item ">
                                        <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/flags/sa.png" class="mr-1 lazyload" alt="Arabic" height="11">
                                        <span class="language">Arabic</span>
                                    </a>
                                </li>
                                                    </ul>
                    </li>
                    
                                        <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">
                                                <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2 opacity-60" data-toggle="dropdown" data-display="static">
                            U.S. Dollar $
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                                            <li>
                                    <a class="dropdown-item  active " href="javascript:void(0)" data-currency="USD">U.S. Dollar ($)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="AUD">Australian Dollar ($)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="BRL">Brazilian Real (R$)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="CAD">Canadian Dollar ($)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="CZK">Czech Koruna (Kč)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="DKK">Danish Krone (kr)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="EUR">Euro (€)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="HKD">Hong Kong Dollar ($)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="HUF">Hungarian Forint (Ft)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="ILS">Israeli New Sheqel (₪)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="JPY">Japanese Yen (¥)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="MYR">Malaysian Ringgit (RM)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="MXN">Mexican Peso ($)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="NOK">Norwegian Krone (kr)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="NZD">New Zealand Dollar ($)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="PHP">Philippine Peso (₱)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="PLN">Polish Zloty (zł)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="GBP">Pound Sterling (£)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="RUB">Russian Ruble (руб)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="SGD">Singapore Dollar ($)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="SEK">Swedish Krona (kr)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="CHF">Swiss Franc (CHF)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="THB">Thai Baht (฿)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="BDT">Taka (৳)</a>
                                </li>
                                                            <li>
                                    <a class="dropdown-item " href="javascript:void(0)" data-currency="Rupee">Indian Rupee (Rs)</a>
                                </li>
                                                    </ul>
                    </li>
                                    </ul>
            </div>

            <div class="col-5 text-right d-none d-lg-block">
                <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                            <a href="tel:+01 112 352 566" class="text-reset d-inline-block opacity-60 py-2">
                                <i class="la la-phone"></i>
                                <span>Help line</span>  
                                <span>+01 112 352 566</span>    
                            </a>
                        </li>
                                                                
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0 dropdown">
                                <a class="dropdown-toggle no-arrow text-reset" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="">
                                        <span class="position-relative d-inline-block">
                                            <i class="las la-bell fs-18"></i>
                                                                                    </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0">
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="mb-0">Notifications</h6>
                                    </div>
                                    <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                        <ul class="list-group list-group-flush" >
                                                                                            <li class="list-group-item">
                                                    <div class="py-4 text-center fs-16">
                                                        No notification found
                                                    </div>
                                                </li>
                                                                                    </ul>
                                    </div>
                                    <div class="text-center border-top">
                                        <a href="https://demo.activeitzone.com/ecommerce/all-notifications" class="text-reset d-block py-2">
                                            View All Notifications
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="https://demo.activeitzone.com/ecommerce/dashboard" class="text-reset d-inline-block opacity-60 py-2">My Panel</a>
                            </li>
                                                <li class="list-inline-item">
                            <a href="https://demo.activeitzone.com/ecommerce/logout" class="text-reset d-inline-block opacity-60 py-2">Logout</a>
                        </li>
                                    </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Top Bar -->
<header class=" sticky-top  z-1020 bg-white border-bottom shadow-sm">
    <div class="position-relative logo-bar-area z-1">
        <div class="container">
            <div class="d-flex align-items-center">

                <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                    <a class="d-block py-20px mr-3 ml-0" href="https://demo.activeitzone.com/ecommerce">
                                                                            <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/ikb1MZlSZBdn6Vn0o8JDFrWuVEeuGMBHV6igl9fc.png" alt="Active eCommerce CMS" class="mw-100 h-30px h-md-40px" height="40">
                                            </a>

                                            <div class="d-none d-xl-block align-self-stretch category-menu-icon-box ml-auto mr-0">
                            <div class="h-100 d-flex align-items-center" id="category-menu-icon">
                                <div class="dropdown-toggle navbar-light bg-light h-40px w-50px pl-2 rounded border c-pointer">
                                    <span class="navbar-toggler-icon"></span>
                                </div>
                            </div>
                        </div>
                                    </div>
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x"></i>
                    </a>
                </div>

                <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                    <div class="position-relative flex-grow-1">
                        <form action="https://demo.activeitzone.com/ecommerce/search" method="GET" class="stop-propagation">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                    <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left"></i></button>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="border-0 border-lg form-control" id="search" name="keyword"  placeholder="I am shopping for..." autocomplete="off">
                                    <div class="input-group-append d-none d-lg-block">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="la la-search la-flip-horizontal fs-18"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader"><div></div><div></div><div></div></div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content" class="text-left">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="#" class="nav-box-link">
                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                        </a>
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="compare">
                        <a href="https://demo.activeitzone.com/ecommerce/compare" class="d-flex align-items-center text-reset">
    <i class="la la-refresh la-2x opacity-80"></i>
    <span class="flex-grow-1 ml-1">
                    <span class="badge badge-primary badge-inline badge-pill">0</span>
                <span class="nav-box-text d-none d-xl-block opacity-70">Compare</span>
    </span>
</a>                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="wishlist">
                        <a href="https://demo.activeitzone.com/ecommerce/wishlists" class="d-flex align-items-center text-reset">
    <i class="la la-heart-o la-2x opacity-80"></i>
    <span class="flex-grow-1 ml-1">
                    <span class="badge badge-primary badge-inline badge-pill">8</span>
                <span class="nav-box-text d-none d-xl-block opacity-70">Wishlist</span>
    </span>
</a>
                    </div>
                </div>

                <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                    <div class="nav-cart-box dropdown h-100" id="cart_items">
                        <a href="javascript:void(0)" class="d-flex align-items-center text-reset h-100" data-toggle="dropdown" data-display="static">
    <i class="la la-shopping-cart la-2x opacity-80"></i>
    <span class="flex-grow-1 ml-1">
                    <span class="badge badge-primary badge-inline badge-pill cart-count">0</span>
                <span class="nav-box-text d-none d-xl-block opacity-70">Cart</span>
    </span>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation">
    
            <div class="text-center p-3">
            <i class="las la-frown la-3x opacity-60 mb-3"></i>
            <h3 class="h6 fw-700">Your Cart is empty</h3>
        </div>
        
</div>
                    </div>
                </div>

            </div>
        </div>
                <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3" id="hover-category-menu">
            <div class="container">
                <div class="row gutters-10 position-relative">
                    <div class="col-lg-3 position-static">
                        <div class="aiz-category-menu bg-white rounded  shadow-lg" id="category-sidebar" >
    <div class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
        <span class="fw-600 fs-16 mr-3">Categories</span>
        <a href="https://demo.activeitzone.com/ecommerce/categories" class="text-reset">
            <span class="d-none d-lg-inline-block">See All ></span>
        </a>
    </div>
    <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
                    <li class="category-nav-element" data-id="1">
                <a href="https://demo.activeitzone.com/ecommerce/category/women-clothing-fashion" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/46v0RI8PXlQa4Yy0IftaGaK9rZUQdLOAFkpnjRXT.jpg"
                        width="16"
                        alt="Women Clothing &amp; Fashion"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Women Clothing &amp; Fashion</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
                    <li class="category-nav-element" data-id="2">
                <a href="https://demo.activeitzone.com/ecommerce/category/men-clothing-fashion" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/LHUk7AM6okO07NvMOkVB35JbQBCLGLjfbRBuUNHc.jpg"
                        width="16"
                        alt="Men Clothing &amp; Fashion"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Men Clothing &amp; Fashion</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
                    <li class="category-nav-element" data-id="3">
                <a href="https://demo.activeitzone.com/ecommerce/category/computer-accessories" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/kTwoR2hUnTf1y6kAOmt9FUidF6Qo8IK0RkvGVMbi.jpg"
                        width="16"
                        alt="Computer &amp; Accessories"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Computer &amp; Accessories</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
                    <li class="category-nav-element" data-id="4">
                <a href="https://demo.activeitzone.com/ecommerce/category/automobile-motorcycle" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/vafdWTltz6NGVOA2BOaSC3Y7PPFmxmSHX6KBhn4Z.jpg"
                        width="16"
                        alt="Automobile &amp; Motorcycle"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Automobile &amp; Motorcycle</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
                    <li class="category-nav-element" data-id="5">
                <a href="https://demo.activeitzone.com/ecommerce/category/kids-toy" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/7Hpz9FWvKRNENKEXd13gqNPlFxz8LFJgCTFzlZbR.jpg"
                        width="16"
                        alt="Kids &amp; toy"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Kids &amp; toy</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
                    <li class="category-nav-element" data-id="6">
                <a href="https://demo.activeitzone.com/ecommerce/category/sports-outdoor" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/jNdturV05yXj1UsPHurYFoJs410G39D5C2bnPGor.jpg"
                        width="16"
                        alt="Sports &amp; outdoor"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Sports &amp; outdoor</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
                    <li class="category-nav-element" data-id="7">
                <a href="https://demo.activeitzone.com/ecommerce/category/jewelry-watches" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/R6AnVQNPd89NvPZelfi4F8rfkbFIiu8XteN74BFz.jpg"
                        width="16"
                        alt="Jewelry &amp; Watches"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Jewelry &amp; Watches</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
                    <li class="category-nav-element" data-id="8">
                <a href="https://demo.activeitzone.com/ecommerce/category/cellphones-tabs" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/JjUx7LIwj97wFpsgffYGwYxtdEiQLVGPtBWYE4wq.jpg"
                        width="16"
                        alt="Cellphones &amp; Tabs"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Cellphones &amp; Tabs</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
                    <li class="category-nav-element" data-id="9">
                <a href="https://demo.activeitzone.com/ecommerce/category/beauty-health-hair" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/KHQpABDau3b7oMyDFNSJYSMgprsQ1Kq5uij9fw3U.jpg"
                        width="16"
                        alt="Beauty, Health &amp; Hair"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Beauty, Health &amp; Hair</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
                    <li class="category-nav-element" data-id="10">
                <a href="https://demo.activeitzone.com/ecommerce/category/home-improvement-tools" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/9hMfQOGGQrpmFO1KEbTJ9SijUxM8p8TEsm6o4FVp.jpg"
                        width="16"
                        alt="Home Improvement &amp; Tools"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Home Improvement &amp; Tools</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
                    <li class="category-nav-element" data-id="11">
                <a href="https://demo.activeitzone.com/ecommerce/category/home-decoration-appliance" class="text-truncate text-reset py-2 px-3 d-block">
                    <img
                        class="cat-image lazyload mr-2 opacity-60"
                        src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                        data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/Es0gLpejDOBTdBz4CN1BlT12tFTJDjNDXhtEoVEe.jpg"
                        width="16"
                        alt="Home decoration &amp; Appliance"
                        onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';"
                    >
                    <span class="cat-name">Home decoration &amp; Appliance</span>
                </a>
                                    <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                            </li>
            </ul>
</div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            <div class="bg-white border-top border-gray-200 py-1">
            <div class="container">
                <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-center">
                                        <li class="list-inline-item mr-0">
                        <a href="https://demo.activeitzone.com/ecommerce/" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Home
                        </a>
                    </li>
                                        <li class="list-inline-item mr-0">
                        <a href="https://demo.activeitzone.com/ecommerce/flash-deals" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Flash Sale
                        </a>
                    </li>
                                        <li class="list-inline-item mr-0">
                        <a href="https://demo.activeitzone.com/ecommerce/blog" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Blogs
                        </a>
                    </li>
                                        <li class="list-inline-item mr-0">
                        <a href="https://demo.activeitzone.com/ecommerce/brands" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            All Brands
                        </a>
                    </li>
                                        <li class="list-inline-item mr-0">
                        <a href="https://demo.activeitzone.com/ecommerce/categories" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            All Categories
                        </a>
                    </li>
                                        <li class="list-inline-item mr-0">
                        <a href="https://demo.activeitzone.com/ecommerce/sellers" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            All Sellers
                        </a>
                    </li>
                                        <li class="list-inline-item mr-0">
                        <a href="https://demo.activeitzone.com/ecommerce/coupons" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            Coupons
                        </a>
                    </li>
                                    </ul>
            </div>
        </div>
    </header>

<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div id="order-details-modal-body">

            </div>
        </div>
    </div>
</div>


        <section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
			<div class="aiz-user-sidenav-wrap position-relative z-1 shadow-sm">
    <div class="aiz-user-sidenav rounded overflow-auto c-scrollbar-light pb-5 pb-xl-0">
        <div class="p-4 text-xl-center mb-4 border-bottom bg-primary text-white position-relative">
            <span class="avatar avatar-md mb-3">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/Oe9cgx9luJBe1dLPZetdDJiFIyruehTBTGEQmdNl.jpg" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                            </span>
            <h4 class="h5 fs-16 mb-1 fw-600">Mr. Customer</h4>
                            <div class="text-truncate opacity-60">+8801642954885</div>
                    </div>

        <div class="sidemnenu mb-3">
            <ul class="aiz-side-nav-list px-2" data-toggle="aiz-side-menu">

                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/ecommerce/dashboard" class="aiz-side-nav-link ">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Dashboard</span>
                    </a>
                </li>

                
                                        <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/ecommerce/purchase_history" class="aiz-side-nav-link ">
                            <i class="las la-file-alt aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Purchase History</span>
                            <span class="badge badge-inline badge-success">new</span>                        </a>
                    </li>

                    <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/ecommerce/digital_purchase_history" class="aiz-side-nav-link ">
                            <i class="las la-download aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Downloads</span>
                        </a>
                    </li>

                                            <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/sent-refund-request" class="aiz-side-nav-link ">
                                <i class="las la-backward aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Sent Refund Request</span>
                            </a>
                        </li>
                    
                    <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/ecommerce/wishlists" class="aiz-side-nav-link active">
                            <i class="la la-heart-o aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Wishlist</span>
                        </a>
                    </li>

                    <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/ecommerce/compare" class="aiz-side-nav-link ">
                            <i class="la la-refresh aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Compare</span>
                        </a>
                    </li>

                    
                                            <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/customer_products" class="aiz-side-nav-link ">
                                <i class="lab la-sketch aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Classified Products</span>
                            </a>
                        </li>
                    
                                            <li class="aiz-side-nav-item">
                            <a href="javascript:void(0);" class="aiz-side-nav-link">
                                <i class="las la-gavel aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Auction</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/auction_product_bids" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Bidded Products</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/auction/purchase_history" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Purchase History</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    
                    
                                                                    <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/conversations" class="aiz-side-nav-link ">
                                <i class="las la-comment aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Conversations</span>
                                                            </a>
                        </li>
                    

                                            <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/wallet" class="aiz-side-nav-link ">
                                <i class="las la-dollar-sign aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">My Wallet</span>
                            </a>
                        </li>
                    
                                            <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/earning-points" class="aiz-side-nav-link ">
                                <i class="las la-dollar-sign aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Earning Points</span>
                            </a>
                        </li>
                    
                                            <li class="aiz-side-nav-item">
                            <a href="javascript:void(0);" class="aiz-side-nav-link ">
                                <i class="las la-dollar-sign aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Affiliate</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/affiliate/user" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Affiliate System</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/affiliate/user/payment_history" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Payment History</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/affiliate/user/withdraw_request_history" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Withdraw request history</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    
                    
                    <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/ecommerce/support_ticket" class="aiz-side-nav-link ">
                            <i class="las la-atom aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Support Ticket</span>
                            <span class="badge badge-inline badge-success">1</span>                         </a>
                    </li>
                                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/ecommerce/profile" class="aiz-side-nav-link ">
                        <i class="las la-user aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Manage Profile</span>
                    </a>
                </li>

            </ul>
        </div>
                    <div>
                <a href="https://demo.activeitzone.com/ecommerce/shops/create" class="btn btn-block btn-soft-primary rounded-0">
                    </i>Be a Seller
                </a>
            </div>
                
    </div>

    <div class="fixed-bottom d-xl-none bg-white border-top d-flex justify-content-between px-2" style="box-shadow: 0 -5px 10px rgb(0 0 0 / 10%);">
        <a class="btn btn-sm p-2 d-flex align-items-center" href="https://demo.activeitzone.com/ecommerce/logout">
            <i class="las la-sign-out-alt fs-18 mr-2"></i>
            <span>Logout</span>
        </a>
        <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
            <i class="las la-times la-2x"></i>
        </button>
    </div>
</div>
			<div class="aiz-user-panel">
				    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <b class="h4">Wishlist</b>
            </div>
        </div>
    </div>

    <div class="row gutters-5">
                                    <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_1">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-body">
                            <a href="https://demo.activeitzone.com/ecommerce/product/dress-the-population-womens-catalina-solid-sleeveless-fit--flare-midi-dress-gxljv" class="d-block mb-3">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/p6ylZjAQGr3bPaRbZlPpZm0S0To5nQhS0HECHWXi.jpg" class="img-fit h-140px h-md-200px">
                            </a>

                            <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                <a href="https://demo.activeitzone.com/ecommerce/product/dress-the-population-womens-catalina-solid-sleeveless-fit--flare-midi-dress-gxljv" class="text-reset">Dress the Population Women&#039;s Catalina Solid Sleeveless Fit &amp; Flare Midi Dress</a>
                            </h5>
                            <div class="rating rating-sm mb-1">
                                <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i>
                            </div>
                            <div class=" fs-14">
                                                                        <span class="fw-600 text-primary">$140.000</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist(1)">
                                <i class="la la-trash la-2x"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal(115)">
                                <i class="la la-shopping-cart mr-2"></i>Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_2">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-body">
                            <a href="https://demo.activeitzone.com/ecommerce/product/Womens-Embellished-Tiered-Sequin-Jacket-Dress-Uv7KP" class="d-block mb-3">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/EZZEYM7qsk4LEDqrLu26H0MHxcZsbsWPm3oi3ypj.jpg" class="img-fit h-140px h-md-200px">
                            </a>

                            <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                <a href="https://demo.activeitzone.com/ecommerce/product/Womens-Embellished-Tiered-Sequin-Jacket-Dress-Uv7KP" class="text-reset">Women&#039;s Embellished Tiered Sequin Jacket Dress</a>
                            </h5>
                            <div class="rating rating-sm mb-1">
                                <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i>
                            </div>
                            <div class=" fs-14">
                                                                        <del class="opacity-60 mr-1">$150.000</del>
                                                                        <span class="fw-600 text-primary">$99.000</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist(2)">
                                <i class="la la-trash la-2x"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal(114)">
                                <i class="la la-shopping-cart mr-2"></i>Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_3">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-body">
                            <a href="https://demo.activeitzone.com/ecommerce/product/Bearsland-Maternity-Womens-3-Pieces-Soft-Nursing-Pajamas-Set-Postpartum-Sleepwear-for-Breastfeeding-vSqcZ" class="d-block mb-3">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/QMjDE3E6OfwmjpyImuMxyI1SPJfU5YhF52xpqGAH.jpg" class="img-fit h-140px h-md-200px">
                            </a>

                            <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                <a href="https://demo.activeitzone.com/ecommerce/product/Bearsland-Maternity-Womens-3-Pieces-Soft-Nursing-Pajamas-Set-Postpartum-Sleepwear-for-Breastfeeding-vSqcZ" class="text-reset">Bearsland Maternity Women&#039;s 3 Pieces Soft Nursing Pajamas Set Postpartum Sleepwear for Breastfeeding</a>
                            </h5>
                            <div class="rating rating-sm mb-1">
                                <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i>
                            </div>
                            <div class=" fs-14">
                                                                        <span class="fw-600 text-primary">$120.000</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist(3)">
                                <i class="la la-trash la-2x"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal(112)">
                                <i class="la la-shopping-cart mr-2"></i>Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_4">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-body">
                            <a href="https://demo.activeitzone.com/ecommerce/product/Womens-Full-Slips-Cami-Long-Spaghetti-Strap-Under-Dress-XpzWR" class="d-block mb-3">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/aXNHGnzxeSx7Xz4H78EnAqTXc9kTEJu78tlj1dld.jpg" class="img-fit h-140px h-md-200px">
                            </a>

                            <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                <a href="https://demo.activeitzone.com/ecommerce/product/Womens-Full-Slips-Cami-Long-Spaghetti-Strap-Under-Dress-XpzWR" class="text-reset">Women&#039;s Full Slips Cami Long Spaghetti Strap Under Dress</a>
                            </h5>
                            <div class="rating rating-sm mb-1">
                                <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i>
                            </div>
                            <div class=" fs-14">
                                                                        <del class="opacity-60 mr-1">$140.000</del>
                                                                        <span class="fw-600 text-primary">$133.000</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist(4)">
                                <i class="la la-trash la-2x"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal(113)">
                                <i class="la la-shopping-cart mr-2"></i>Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_5">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-body">
                            <a href="https://demo.activeitzone.com/ecommerce/product/adidas-womens-track-jacket-nlyb0" class="d-block mb-3">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/VnuCuGG4PdU1UFInIAmWqUN8Js3OIfDeFm4G1NUF.jpg" class="img-fit h-140px h-md-200px">
                            </a>

                            <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                <a href="https://demo.activeitzone.com/ecommerce/product/adidas-womens-track-jacket-nlyb0" class="text-reset">Adidas Women&#039;s Alphaskin Tiro Training Jacket</a>
                            </h5>
                            <div class="rating rating-sm mb-1">
                                <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i>
                            </div>
                            <div class=" fs-14">
                                                                        <span class="fw-600 text-primary">$40.000</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist(5)">
                                <i class="la la-trash la-2x"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal(110)">
                                <i class="la la-shopping-cart mr-2"></i>Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_6">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-body">
                            <a href="https://demo.activeitzone.com/ecommerce/product/Adidas-Mens-Running-Shoes-VFooz" class="d-block mb-3">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/swCZ0mlGq068QGbLuAJa9OMxIFp3ZVY11IDNrAnv.jpg" class="img-fit h-140px h-md-200px">
                            </a>

                            <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                <a href="https://demo.activeitzone.com/ecommerce/product/Adidas-Mens-Running-Shoes-VFooz" class="text-reset">Adidas Men&#039;s Running Shoes</a>
                            </h5>
                            <div class="rating rating-sm mb-1">
                                <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i>
                            </div>
                            <div class=" fs-14">
                                                                        <del class="opacity-60 mr-1">$50.000</del>
                                                                        <span class="fw-600 text-primary">$43.000</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist(6)">
                                <i class="la la-trash la-2x"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal(105)">
                                <i class="la la-shopping-cart mr-2"></i>Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_7">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-body">
                            <a href="https://demo.activeitzone.com/ecommerce/product/latest-coat-pant-designs-white-wedding-suits-for-men-sq38a" class="d-block mb-3">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/8L73AHGXdYjfoUQtW5IMICTVtgCiTq9CgWxz9xrI.jpg" class="img-fit h-140px h-md-200px">
                            </a>

                            <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                <a href="https://demo.activeitzone.com/ecommerce/product/latest-coat-pant-designs-white-wedding-suits-for-men-sq38a" class="text-reset">Latest Coat Pant Designs White Wedding Suits for Men</a>
                            </h5>
                            <div class="rating rating-sm mb-1">
                                <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i>
                            </div>
                            <div class=" fs-14">
                                                                        <del class="opacity-60 mr-1">$35.000</del>
                                                                        <span class="fw-600 text-primary">$23.800</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist(7)">
                                <i class="la la-trash la-2x"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal(30)">
                                <i class="la la-shopping-cart mr-2"></i>Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                                                <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-6" id="wishlist_8">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-body">
                            <a href="https://demo.activeitzone.com/ecommerce/product/apple-ipad-pro-512gb-11in-mtxu-9bblt" class="d-block mb-3">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/SQvraqHCYJaiDHLEwa3dkcYPFjff6zVHLm4w2pEQ.jpg" class="img-fit h-140px h-md-200px">
                            </a>

                            <h5 class="fs-14 mb-0 lh-1-5 fw-600 text-truncate-2">
                                <a href="https://demo.activeitzone.com/ecommerce/product/apple-ipad-pro-512gb-11in-mtxu-9bblt" class="text-reset">Apple iPad Pro 512GB 11IN MTXU</a>
                            </h5>
                            <div class="rating rating-sm mb-1">
                                <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i>
                            </div>
                            <div class=" fs-14">
                                                                        <del class="opacity-60 mr-1">$1,500.000</del>
                                                                        <span class="fw-600 text-primary">$795.000</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link link--style-3" data-toggle="tooltip" data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist(8)">
                                <i class="la la-trash la-2x"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-block btn-primary ml-3" onclick="showAddToCartModal(15)">
                                <i class="la la-shopping-cart mr-2"></i>Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                        </div>
    <div class="aiz-pagination">
        
    </div>
            </div>
        </div>
    </div>
</section>

        <section class="bg-white border-top mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="https://demo.activeitzone.com/ecommerce/terms">
                    <i class="la la-file-text la-3x text-primary mb-2"></i>
                    <h4 class="h6">Terms &amp; conditions</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="https://demo.activeitzone.com/ecommerce/return-policy">
                    <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                    <h4 class="h6">Return Policy</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="https://demo.activeitzone.com/ecommerce/support-policy">
                    <i class="la la-support la-3x text-primary mb-2"></i>
                    <h4 class="h6">Support Policy</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left border-right text-center p-4 d-block" href="https://demo.activeitzone.com/ecommerce/privacy-policy">
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
                    <a href="https://demo.activeitzone.com/ecommerce" class="d-block">
                                                    <img class="lazyload" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder-rect.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/ikb1MZlSZBdn6Vn0o8JDFrWuVEeuGMBHV6igl9fc.png" alt="Active eCommerce CMS" height="44">
                                            </a>
                    <div class="my-3">
                        <span style="color: rgb(242, 243, 248); font-family: "Open Sans", sans-serif; background-color: rgb(17, 23, 35);">Complete system for your eCommerce business</span>
                    </div>
                    <div class="d-inline-block d-md-block mb-4">
                        <form class="form-inline" method="POST" action="https://demo.activeitzone.com/ecommerce/subscribers">
                            <input type="hidden" name="_token" value="3mRilnpB7zXDabzk5sYclWyklcVlSJZQZpoyUKWZ">                            <div class="form-group mb-0">
                                <input type="email" class="form-control" placeholder="Your Email Address" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Subscribe
                            </button>
                        </form>
                    </div>
                    <div class="w-300px mw-100 mx-auto mx-md-0">
                                                    <a href="#" target="_blank" class="d-inline-block mr-3 ml-0">
                                <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/play.png" class="mx-100 h-40px">
                            </a>
                                                                            <a href="#" target="_blank" class="d-inline-block">
                                <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/app.png" class="mx-100 h-40px">
                            </a>
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
                           <span class="d-block opacity-70">Demo</span>
                        </li>
                        <li class="mb-2">
                           <span class="d-block opacity-30">Phone:</span>
                           <span class="d-block opacity-70">123456789</span>
                        </li>
                        <li class="mb-2">
                           <span class="d-block opacity-30">Email:</span>
                           <span class="d-block opacity-70">
                               <a href="/cdn-cgi/l/email-protection#6a0e0f0705440f120b071a060f2a0d070b030644090507" class="text-reset"><span class="__cf_email__" data-cfemail="1377767e7c3d766b727e637f7653747e727a7f3d707c7e">[email&#160;protected]</span></a>
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
                                <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                    Help
                                </a>
                            </li>
                                                        <li class="mb-2">
                                <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                    Support
                                </a>
                            </li>
                                                        <li class="mb-2">
                                <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                    About Us
                                </a>
                            </li>
                                                        <li class="mb-2">
                                <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                    Join Us
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
                                                    <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" href="https://demo.activeitzone.com/ecommerce/logout">
                                    Logout
                                </a>
                            </li>
                                                <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="https://demo.activeitzone.com/ecommerce/purchase_history">
                                Order History
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="https://demo.activeitzone.com/ecommerce/wishlists">
                                My Wishlist
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="https://demo.activeitzone.com/ecommerce/track-your-order">
                                Track Order
                            </a>
                        </li>
                                                    <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-light" href="https://demo.activeitzone.com/ecommerce/affiliate">Be an affiliate partner</a>
                            </li>
                                            </ul>
                </div>
                                    <div class="text-center text-md-left mt-4">
                        <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                            Be a Seller
                        </h4>
                        <a href="https://demo.activeitzone.com/ecommerce/shops/create" class="btn btn-primary btn-sm shadow-md">
                            Apply Now
                        </a>
                    </div>
                            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="text-center text-md-left" current-verison="5.5.7">
                    © Active eCommerce CMS 2021
                </div>
            </div>
            <div class="col-lg-4">
                                <ul class="list-inline my-3 my-md-0 social colored text-center">
                                        <li class="list-inline-item">
                        <a href="#" target="_blank" class="facebook"><i class="lab la-facebook-f"></i></a>
                    </li>
                                                            <li class="list-inline-item">
                        <a href="#" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                    </li>
                                                            <li class="list-inline-item">
                        <a href="#" target="_blank" class="instagram"><i class="lab la-instagram"></i></a>
                    </li>
                                                            <li class="list-inline-item">
                        <a href="#" target="_blank" class="youtube"><i class="lab la-youtube"></i></a>
                    </li>
                                                            <li class="list-inline-item">
                        <a href="#" target="_blank" class="linkedin"><i class="lab la-linkedin-in"></i></a>
                    </li>
                                    </ul>
                            </div>
            <div class="col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-inline mb-0">
                                                                                    <li class="list-inline-item">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/NankP5emHOKcdCWqX6Bks1Qa63iDgoLA6WPGn7oe.png" height="30" class="mw-100 h-auto" style="max-height: 30px">
                                </li>
                                                                        </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="https://demo.activeitzone.com/ecommerce" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-home fs-20 opacity-60 "></i>
                <span class="d-block fs-10 fw-600 opacity-60 ">Home</span>
            </a>
        </div>
        <div class="col">
            <a href="https://demo.activeitzone.com/ecommerce/categories" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-list-ul fs-20 opacity-60 "></i>
                <span class="d-block fs-10 fw-600 opacity-60 ">Categories</span>
            </a>
        </div>
                <div class="col-auto">
            <a href="https://demo.activeitzone.com/ecommerce/cart" class="text-reset d-block text-center pb-2 pt-3">
                <span class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px" style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span class="d-block mt-1 fs-10 fw-600 opacity-60 ">
                    Cart
                                        (<span class="cart-count">0</span>)
                </span>
            </a>
        </div>
        <div class="col">
            <a href="https://demo.activeitzone.com/ecommerce/all-notifications" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i class="las la-bell fs-20 opacity-60 "></i>
                                    </span>
                <span class="d-block fs-10 fw-600 opacity-60 ">Notifications</span>
            </a>
        </div>
        <div class="col">
                                    <a href="javascript:void(0)" class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
                    <span class="d-block mx-auto">
                                                    <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png" class="rounded-circle size-20px">
                                            </span>
                    <span class="d-block fs-10 fw-600 opacity-60">Account</span>
                </a>
                            </div>
    </div>
</div>
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            <div class="aiz-user-sidenav-wrap position-relative z-1 shadow-sm">
    <div class="aiz-user-sidenav rounded overflow-auto c-scrollbar-light pb-5 pb-xl-0">
        <div class="p-4 text-xl-center mb-4 border-bottom bg-primary text-white position-relative">
            <span class="avatar avatar-md mb-3">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/Oe9cgx9luJBe1dLPZetdDJiFIyruehTBTGEQmdNl.jpg" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                            </span>
            <h4 class="h5 fs-16 mb-1 fw-600">Mr. Customer</h4>
                            <div class="text-truncate opacity-60">+8801642954885</div>
                    </div>

        <div class="sidemnenu mb-3">
            <ul class="aiz-side-nav-list px-2" data-toggle="aiz-side-menu">

                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/ecommerce/dashboard" class="aiz-side-nav-link ">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Dashboard</span>
                    </a>
                </li>

                
                                        <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/ecommerce/purchase_history" class="aiz-side-nav-link ">
                            <i class="las la-file-alt aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Purchase History</span>
                            <span class="badge badge-inline badge-success">new</span>                        </a>
                    </li>

                    <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/ecommerce/digital_purchase_history" class="aiz-side-nav-link ">
                            <i class="las la-download aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Downloads</span>
                        </a>
                    </li>

                                            <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/sent-refund-request" class="aiz-side-nav-link ">
                                <i class="las la-backward aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Sent Refund Request</span>
                            </a>
                        </li>
                    
                    <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/ecommerce/wishlists" class="aiz-side-nav-link active">
                            <i class="la la-heart-o aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Wishlist</span>
                        </a>
                    </li>

                    <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/ecommerce/compare" class="aiz-side-nav-link ">
                            <i class="la la-refresh aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Compare</span>
                        </a>
                    </li>

                    
                                            <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/customer_products" class="aiz-side-nav-link ">
                                <i class="lab la-sketch aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Classified Products</span>
                            </a>
                        </li>
                    
                                            <li class="aiz-side-nav-item">
                            <a href="javascript:void(0);" class="aiz-side-nav-link">
                                <i class="las la-gavel aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Auction</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/auction_product_bids" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Bidded Products</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/auction/purchase_history" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Purchase History</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    
                    
                                                                    <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/conversations" class="aiz-side-nav-link ">
                                <i class="las la-comment aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Conversations</span>
                                                            </a>
                        </li>
                    

                                            <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/wallet" class="aiz-side-nav-link ">
                                <i class="las la-dollar-sign aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">My Wallet</span>
                            </a>
                        </li>
                    
                                            <li class="aiz-side-nav-item">
                            <a href="https://demo.activeitzone.com/ecommerce/earning-points" class="aiz-side-nav-link ">
                                <i class="las la-dollar-sign aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Earning Points</span>
                            </a>
                        </li>
                    
                                            <li class="aiz-side-nav-item">
                            <a href="javascript:void(0);" class="aiz-side-nav-link ">
                                <i class="las la-dollar-sign aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Affiliate</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/affiliate/user" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Affiliate System</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/affiliate/user/payment_history" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Payment History</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="https://demo.activeitzone.com/ecommerce/affiliate/user/withdraw_request_history" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">Withdraw request history</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    
                    
                    <li class="aiz-side-nav-item">
                        <a href="https://demo.activeitzone.com/ecommerce/support_ticket" class="aiz-side-nav-link ">
                            <i class="las la-atom aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Support Ticket</span>
                            <span class="badge badge-inline badge-success">1</span>                         </a>
                    </li>
                                <li class="aiz-side-nav-item">
                    <a href="https://demo.activeitzone.com/ecommerce/profile" class="aiz-side-nav-link ">
                        <i class="las la-user aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Manage Profile</span>
                    </a>
                </li>

            </ul>
        </div>
                    <div>
                <a href="https://demo.activeitzone.com/ecommerce/shops/create" class="btn btn-block btn-soft-primary rounded-0">
                    </i>Be a Seller
                </a>
            </div>
                
    </div>

    <div class="fixed-bottom d-xl-none bg-white border-top d-flex justify-content-between px-2" style="box-shadow: 0 -5px 10px rgb(0 0 0 / 10%);">
        <a class="btn btn-sm p-2 d-flex align-items-center" href="https://demo.activeitzone.com/ecommerce/logout">
            <i class="las la-sign-out-alt fs-18 mr-2"></i>
            <span>Logout</span>
        </a>
        <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
            <i class="las la-times la-2x"></i>
        </button>
    </div>
</div>
        </div>
    </div>

    </div>

            <div class="aiz-cookie-alert shadow-xl">
            <div class="p-3 bg-dark rounded">
                <div class="text-white mb-3">
                    <p>We use cookie for better user experience, check our policy <a href="https://demo.activeitzone.com/ecommerce/privacypolicy">here</a>&nbsp;</p>                </div>
                <button class="btn btn-primary aiz-cookie-accept">
                    Ok. I Understood
                </button>
            </div>
        </div>
    
            <div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
            <div class="absolute-full bg-black opacity-60"></div>
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
                <div class="modal-content position-relative border-0 rounded-0">
                    <div class="aiz-editor-data">
                        <p><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/dwaK3um8tkVgEsgmZN1peQb844tFRAIQ1wAS8e3z.png" style="width: 100%;"></p><p style="text-align: center; "><br></p><h2 style="text-align: center; "><b>Subscribe to Our Newsletter</b></h2><p style="text-align: center;">Subscribe our newsletter for coupon, offer and exciting promotional discount..</p>
                    </div>
                                            <div class="pb-5 pt-4 px-5">
                            <form class="" method="POST" action="https://demo.activeitzone.com/ecommerce/subscribers">
                                <input type="hidden" name="_token" value="3mRilnpB7zXDabzk5sYclWyklcVlSJZQZpoyUKWZ">                                <div class="form-group mb-0">
                                    <input type="email" class="form-control" placeholder="Your Email Address" name="email" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3">
                                    Subscribe Now
                                </button>
                            </form>
                        </div>
                                        <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session" data-key="website-popup" data-value="removed" data-toggle="remove-parent" data-parent=".website-popup">
                        <i class="la la-close fs-20"></i>
                    </button>
                </div>
            </div>
        </div>
    
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    function confirm_modal(delete_url)
    {
        jQuery('#confirm-delete').modal('show', {backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                
                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>

            <div class="modal-body">
                <p>Delete confirmation message</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la-2x">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>

    
<div class="modal fade" id="addToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
        <div class="modal-content position-relative">
            <div class="c-preloader">
                <i class="fa fa-spin fa-spinner"></i>
            </div>
            <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div id="addToCart-modal-body">

            </div>
        </div>
    </div>
</div>


    <!-- SCRIPTS -->
    <script src="https://demo.activeitzone.com/ecommerce/public/assets/js/vendors.js"></script>
    <script src="https://demo.activeitzone.com/ecommerce/public/assets/js/aiz-core.js"></script>



            <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                  xfbml            : true,
                  version          : 'v3.3'
                });
              };

              (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div id="fb-root"></div>
        <!-- Your customer chat code -->
        <div class="fb-customerchat"
          attribution=setup_tool
          page_id="">
        </div>
    
    <script>
            </script>

    <script>

        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function(){
                    if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                        $.post('https://demo.activeitzone.com/ecommerce/category/nav-element-list', {_token: AIZ.data.csrf, id:$(el).data('id')}, function(data){
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('https://demo.activeitzone.com/ecommerce/language',{_token: AIZ.data.csrf, locale:locale}, function(data){
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('https://demo.activeitzone.com/ecommerce/currency',{_token: AIZ.data.csrf, currency_code:currency_code}, function(data){
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function(){
            search();
        });

        $('#search').on('focus', function(){
            search();
        });

        function search(){
            var searchKey = $('#search').val();
            if(searchKey.length > 0){
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('https://demo.activeitzone.com/ecommerce/ajax-search', { _token: AIZ.data.csrf, search:searchKey}, function(data){
                    if(data == '0'){
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+searchKey+'"</strong>');
                        $('.search-preloader').addClass('d-none');

                    }
                    else{
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            }
            else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        function updateNavCart(view,count){
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key){
            $.post('https://demo.activeitzone.com/ecommerce/cart/removeFromCart', {
                _token  : AIZ.data.csrf,
                id      :  key
            }, function(data){
                updateNavCart(data.nav_cart_view,data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "Item has been removed from cart");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
            });
        }

        function addToCompare(id){
            $.post('https://demo.activeitzone.com/ecommerce/compare/addToCompare', {_token: AIZ.data.csrf, id:id}, function(data){
                $('#compare').html(data);
                AIZ.plugins.notify('success', "Item has been added to compare list");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
            });
        }

        function addToWishList(id){
                            $.post('https://demo.activeitzone.com/ecommerce/wishlists', {_token: AIZ.data.csrf, id:id}, function(data){
                    if(data != 0){
                        $('#wishlist').html(data);
                        AIZ.plugins.notify('success', "Item has been added to wishlist");
                    }
                    else{
                        AIZ.plugins.notify('warning', "Please login first");
                    }
                });
                    }

        function showAddToCartModal(id){
            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('https://demo.activeitzone.com/ecommerce/cart/show-cart-modal', {_token: AIZ.data.csrf, id:id}, function(data){
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function(){
            getVariantPrice();
        });

        function getVariantPrice(){
            if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
                $.ajax({
                   type:"POST",
                   url: 'https://demo.activeitzone.com/ecommerce/product/variant_price',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){

                        $('.product-gallery-thumb .carousel-box').each(function (i) {
                            if($(this).data('variation') && data.variation == $(this).data('variation')){
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                       $('#option-choice-form #chosen_price_div').removeClass('d-none');
                       $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                       $('#available-quantity').html(data.quantity);
                       $('.input-number').prop('max', data.max_limit);
                       if(parseInt(data.in_stock) == 0 && data.digital  == 0){
                           $('.buy-now').addClass('d-none');
                           $('.add-to-cart').addClass('d-none');
                           $('.out-of-stock').removeClass('d-none');
                       }
                       else{
                           $('.buy-now').removeClass('d-none');
                           $('.add-to-cart').removeClass('d-none');
                           $('.out-of-stock').addClass('d-none');
                       }
                   }
               });
            }
        }

        function checkAddToCartValidity(){
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                  names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                  count++;
            });

            if($('#option-choice-form input:radio:checked').length == count){
                return true;
            }

            return false;
        }

        function addToCart(){
            if(checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type:"POST",
                    url: 'https://demo.activeitzone.com/ecommerce/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data){

                       $('#addToCart-modal-body').html(null);
                       $('.c-preloader').hide();
                       $('#modal-size').removeClass('modal-lg');
                       $('#addToCart-modal-body').html(data.modal_view);
                       AIZ.extra.plusMinus();
                       AIZ.plugins.slickCarousel();
                       updateNavCart(data.nav_cart_view,data.cart_count);
                    }
                });
            }
            else{
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }

        function buyNow(){
            if(checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                   type:"POST",
                   url: 'https://demo.activeitzone.com/ecommerce/cart/addtocart',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){
                       if(data.status == 1){

                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view,data.cart_count);

                            window.location.replace("https://demo.activeitzone.com/ecommerce/cart");
                       }
                       else{
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                       }
                   }
               });
            }
            else{
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }

        function show_purchase_history_details(order_id)
        {
            $('#order-details-modal-body').html(null);

            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }

            $.post('https://demo.activeitzone.com/ecommerce/purchase_history/details', { _token : AIZ.data.csrf, order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
            });
        }


    </script>

        <script type="text/javascript">
        function removeFromWishlist(id){
            $.post('https://demo.activeitzone.com/ecommerce/wishlists/remove',{_token:'3mRilnpB7zXDabzk5sYclWyklcVlSJZQZpoyUKWZ', id:id}, function(data){
                $('#wishlist').html(data);
                $('#wishlist_'+id).hide();
                AIZ.plugins.notify('success', 'Item has been renoved from wishlist');
            })
        }
    </script>

    
</body>
</html>
