<body class="">

    <div class="aiz-main-wrapper">
        <div class="aiz-sidebar-wrap">
            <div class="aiz-sidebar left c-scrollbar">
                <div class="aiz-side-nav-logo-wrap">
                    <a href="<?=base_url('admin/dashboard')?>" class="d-block text-left">
                        <h5 class="brand ">Admin CMS</h5>
                    </a>
                </div>
                <div class="aiz-side-nav-wrap">
                    <div class="px-20px mb-3">
                        <input class="form-control bg-soft-secondary border-0 form-control-sm text-white" type="text"
                            name="" placeholder="Search in menu" id="menu-search" onkeyup="menuSearch()">
                    </div>
                    <ul class="aiz-side-nav-list" id="search-menu">
                    </ul>
                    <ul class="aiz-side-nav-list" id="main-menu" data-toggle="aiz-side-menu">
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url('admin/dashboard')?>" class="aiz-side-nav-link">
                                <i class="las la-home aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Dashboard</span>
                            </a>
                        </li>

                         
                        <!-- Profile setting -->
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url('admin/profile')?>" class="aiz-side-nav-link">
                                <i class="las la-user-circle aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Profile Setting</span>  
                            </a>
                        </li>
                        <!-- Product -->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-shopping-cart aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Products</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <!--Submenu-->
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="<?=base_url('admin/product')?>" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">All Products</span>
                                    </a>
                                </li>    
                            </ul>
                        </li>
                        <!-- Categories -->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-gavel aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Categories</span>  
                                <span class="aiz-side-nav-arrow"></span>

                            </a>
                            <!--Submenu-->
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="<?=base_url('admin/categories')?>" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">All Categories</span> 
                                    </a>
                                </li> 
                                <li class="aiz-side-nav-item">
                                    <a href="<?=base_url('admin/sub-categories')?>" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">All Sub Categories</span> 
                                    </a>
                                </li>   
                                <li class="aiz-side-nav-item">
                                    <a href="<?=base_url('admin/add-categories')?>" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">Add Categories</span> 
                                    </a>
                                </li>  
                            </ul>
                        </li>
                       
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url('admin/brands')?>" class="aiz-side-nav-link">
                                <i class="las la-tasks aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Brands</span>  

                            </a>
                        </li>
                        <!-- Sale -->
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url('admin/orders')?>" class="aiz-side-nav-link">
                                <i class="las la-money-bill aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Seller Orders</span> 
                            </a> 
                      
                        </li>
  
                        <!-- Customers -->
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url('admin/customers')?>" class="aiz-side-nav-link">
                                <i class="las la-user-friends aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Customers</span> 
                            </a> 
                        </li>

                        <!-- Sellers -->
                        <li class="aiz-side-nav-item">
                            <a href="<?=base_url()?>/admin/seller" class="aiz-side-nav-link">
                                <i class="las la-user aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">Sellers</span>
                            </a>
                        </li>
                       
                        <!-- web site setup -->
                      

                        <li class="aiz-side-nav-item mm-active">
                        <a href="#" class="aiz-side-nav-link " aria-expanded="true">
                            <i class="las la-desktop aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Website Setup</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2 mm-collapse mm-show"  >
                            <li class="aiz-side-nav-item">
                                <a href="<?=base_url('admin/setting')?>" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">Header</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="<?=base_url('admin/footer')?>" class="aiz-side-nav-link ">
                                    <span class="aiz-side-nav-text">Footer</span>
                                </a>
                            </li> 
                            <!-- <li class="aiz-side-nav-item">
                                <a href="<?=base_url('admin/appearance')?>" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">Appearance</span>
                                </a>
                            </li> -->
                        </ul>
                    </li>
  
                 
                    </ul><!-- .aiz-side-nav -->
                </div><!-- .aiz-side-nav-wrap -->
            </div><!-- .aiz-sidebar -->
            <div class="aiz-sidebar-overlay"></div>
        </div><!-- .aiz-sidebar -->