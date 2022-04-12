<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function(){
    
    return view('404');
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('notification', 'Home::notification');
$routes->get('logout','Home::logout');
$routes->get('wishlists','Home::wishlistsView');
$routes->get('brands','Home::brandsView');
$routes->get('categories','Home::CategeoriesView');
$routes->get('sellers','Home::sellersView');
$routes->get('My-Panel','Home::myPanel');
$routes->get('brands/products/(:num)','Home::brandsProducts/$1');
$routes->get('category/products/(:num)','Home::categoryProducts/$1');
$routes->get('subcategory/products/(:num)','Home::subcategoryProducts/$1');
$routes->get('product/(:num)','Home::singleProduct/$1');
$routes->get('/registration_customer/activate/(:alphanum)','Registration_Customer::activate/$1');
$routes->get('/registration_seller/activate/(:alphanum)','Registration_Seller::activate/$1');
$routes->get('/customer_login/activate/(:alphanum)','Customer_Login::activate/$1');
$routes->get('/seller_login/activate/(:alphanum)','Seller_Login::activate/$1');
$routes->get('/customer_login/reset_password/(:alphanum)','Customer_Login::reset_password/$1');
$routes->get('/seller_login/reset_password/(:alphanum)','Seller_Login::reset_password/$1');

$routes->get('shops/visit/(:num)','Home::singleShop/$1');
$routes->post('/customer_login/reset_password/(:alphanum)','Customer_Login::reset_password/$1');
$routes->post('/seller_login/reset_password/(:alphanum)','Seller_Login::reset_password/$1');


// -------------- Registration Controllers ---------------
$routes->get('customer/registration', 'Registration_Customer::index',['filter' =>'noauth']);
$routes->get('seller/registration', 'Registration_Seller::index',['filter' =>'noauth']); 
$routes->match(['get','post'],'customer/RegisterCustomer', 'Registration_Customer::registerCustomer'); 
$routes->match(['get','post'],'seller/RegisterSeller', 'Registration_Seller::registerSeller'); 

//----------------Customer wishlists Controller -----------------
$routes->get('customer/wishlists', 'Customer_Wishlist::index');
$routes->get('seller/wishlist/delete/(:num)','Customer_Wishlist::removeWishlistProduct/$1');

// -------------- Customer Login Controller ---------------
$routes->get('customer/login', 'Customer_Login::index',['filter' =>'noauth']);
$routes->match(['get','post'], 'customer/verify', 'Customer_Login::verifyUser'); 
$routes->get('customer/Logout', 'Customer_Login::logout');
$routes->get('customer_login/reset_password/(:any)', 'Customer_Login::reset_password/$1');
$routes->get('customer_login/reset_password/(:num)/(:alpha)', 'Customer_Login::reset_password/$1/$2');
$routes->match(['get','post'],'customer/forgot', 'Customer_Login::forgotpassword');

//---------------Customer Notificatiion Controller ---------------
$routes->get('customer', 'Customer_Dashboard::index');
$routes->get('customer/notification', 'Customer_Dashboard::notificationView');

//---------------Customer Order Controller ---------------
$routes->get('customer/order', 'Customer_Order::index');
$routes->get('customer/order-details/(:num)', 'Customer_Order::OrderDetailsView/$1');  

//---------------Seller Order Controller ---------------
$routes->get('seller/orders', 'Seller_Order::index');
$routes->get('seller/order-details/(:num)', 'Seller_Order::OrderDetailsView/$1'); 
$routes->match(['get','post'], 'seller/update-details', 'Seller_Order::updateOrderDetails'); 

// -------------- Customer Profile Controller ---------------
$routes->get('customer/profile', 'Customer_Profile::index', ['filter' => 'auth']);
$routes->match(['get','post'], 'customer/update-profile', 'Customer_Profile::updatePic');
$routes->match(['get','post'], 'customer/update-info', 'Customer_Profile::updateInfo');
$routes->match(['get','post'], 'customer/change-password', 'Customer_Profile::changePassword');

// -------------- Seller Login Controller ---------------
$routes->get('seller/login', 'Seller_Login::index',['filter' =>'noauth']);
$routes->match(['get','post'], 'seller/verify', 'Seller_Login::verifyUser'); 
$routes->get('seller/logout', 'Seller_Login::logout');
$routes->get('seller_login/reset_password/(:any)', 'Seller_Login::reset_password/$1');
$routes->get('seller_login/reset_password/(:num)/(:alpha)', 'Seller_Login::reset_password/$1/$2');
$routes->match(['get','post'],'seller/forgot', 'Seller_Login::forgotpassword');

// -------------- Seller Controller ---------------
$routes->get('seller', 'Seller_Dashboard::index');
// $routes->get('seller', 'Seller_Dashboard::sellers'); 
$routes->get('seller/notification', 'Seller_Dashboard::notificationView');

$routes->get('seller/purchase-history', 'Seller_Dashboard::purchaseHistory');

// -------------- Seller Profile Controller ---------------
$routes->get('seller/profile', 'Seller_Profile::index', ['filter' => 'auth']);
$routes->match(['get','post'], 'seller/update-profile', 'Seller_Profile::updatePic');
$routes->match(['get','post'], 'seller/update-info', 'Seller_Profile::updateInfo');
$routes->match(['get','post'], 'seller/change-password', 'Seller_Profile::changePassword');




// -------------- Seller Shop Controller ---------------
$routes->get('seller/shop', 'Seller_Shop::index', ['filter' => 'auth']); 
$routes->match(['get','post'], 'shop/update-info', 'Seller_Shop::updateInfo');
$routes->match(['get','post'], 'shop/update-logo', 'Seller_Shop::shopLogoUpdate');
$routes->match(['get','post'], 'shop/update-banner', 'Seller_Shop::shopBannerUpdate');
$routes->match(['get','post'], 'shop/update-banner2', 'Seller_Shop::shopBannerUpdate2');

// -------------- Seller Products Controller ---------------
$routes->get('seller/products', 'Seller_Products::index');
$routes->get('seller/add-product', 'Seller_Products::addProductView');
$routes->post('seller/addproduct', 'Seller_Products::add_product'); 
$routes->get('seller/getSubCategories', 'Seller_Products::getSubCategories');
$routes->match(['get','post'], 'seller/edit-product/(:num)', 'Seller_Products::edit_product/$1');
$routes->match(['get','post'], 'seller/update-product/(:num)', 'Seller_Products::update_product/$1');
$routes->match(['get','post'], 'seller/delete-product/(:num)', 'Seller_Products::delete_product/$1');
 
//----------------seller wishlists Controller -----------------
$routes->get('seller/wishlists', 'Seller_Wishlist::index');
$routes->get('wishlist/delete/(:num)','Seller_Wishlist::removeWishlistProduct/$1');


//----------------Admin login Controller -----------------
$routes->get('admin/login', 'Admin::index');
$routes->get('admin/check', 'Admin::check');

// -------------- Admin Profile Controller ---------------
$routes->get('seller/profile', 'Admin_Profile::index');
$routes->match(['get','post'], 'admin/update-profile', 'Admin_Profile::updatePic');
$routes->match(['get','post'], 'admin/update-info', 'Admin_Profile::updateInfo');

//----------------Admin Dashboard Controller -----------------
$routes->get('admin/dashboard', 'Admin_Dashboard::index');

//----------------Admin Categories Controller -----------------
$routes->get('admin/categories', 'Admin_Categories::index'); 
$routes->get('admin/add-categories', 'Admin_Categories::addCategoriesView');
$routes->get('admin/sub-categories', 'Admin_Categories::addSubCategoriesView');
$routes->match(['get','post'], 'admin/save', 'Admin_Categories::addCategories');
$routes->get('admin/delete-category/(:num)', 'Admin_Categories::deleteCategory/$1'); 
$routes->get('admin/delete-subcategory/(:num)', 'Admin_Categories::deleteSubCategory/$1');  

//----------------Admin brands Controller -----------------
$routes->get('admin/brands', 'Admin_Brands::index');
$routes->get('admin/delete-brand/(:num)', 'Admin_Brands::deleteBrand/$1'); 
$routes->match(['get','post'], 'admin/add-brand', 'Admin_Brands::saveBrands');

//----------------Admin orders Controller -----------------
$routes->get('admin/orders', 'Admin_Orders::index');
$routes->get('admin/delete-order/(:num)', 'Admin_Orders::deleteOrder/$1');  
$routes->get('admin/order-details/(:num)', 'Admin_Orders::OrderDetailsView/$1'); 

//----------------Admin Products Controller -----------------
$routes->get('admin/product', 'Admin_Products::index');
$routes->get('admin/delete-seller/(:num)', 'Admin_Seller::deleteSeller/$1'); 
$routes->get('admin/delete-product/(:num)', 'Admin_Products::deleteProduct/$1'); 

//----------------Admin Seller Controller -----------------
$routes->get('admin/seller', 'Admin_Seller::index');
$routes->get('admin/delete-seller/(:num)', 'Admin_Seller::deleteSeller/$1'); 

//----------------Admin Customer Controller -----------------
$routes->get('admin/customers', 'Admin_Customer::index');
$routes->get('admin/delete-customer/(:num)', 'Admin_Customer::deleteCustomer/$1'); 

//----------------Admin Website Setting Controller -----------------
$routes->get('admin/setting', 'Website_Setting::index');
$routes->get('admin/footer', 'Website_Setting::footer');
$routes->get('admin/appearance', 'Website_Setting::appearance');
$routes->match(['get','post'], 'admin/update-header', 'Website_Setting::updateHeader');
$routes->match(['get','post'], 'admin/footer-contact', 'Website_Setting::updateFooterContact');
$routes->match(['get','post'], 'admin/footer-logo', 'Website_Setting::updateFooterLogo');
$routes->match(['get','post'], 'admin/footer-copyright', 'Website_Setting::updateFooterCopyright');

// --------------- Seller Product Review -------------------
$routes->get('seller/reviews', 'Seller_Review::index' );
$routes->get('getSubCat', 'Seller_Products::getSubCategories' );

 
$routes->match(['get','post'], 'add-to-cart/(:any)', 'Cart::cart/$1');
$routes->match(['get','post'], 'add-to-cart/(:any)/(:any)', 'Cart::cart/$1/$2');
$routes->match(['get','post'], 'add-to-cart/(:any)/(:any)/(:any)', 'Cart::cart/$1/$2/$3');
$routes->match(['get','post'], 'add-to-cart/(:any)/(:any)/(:any)/(:any)', 'Cart::cart/$1/$2/$3/$4'); 

// --------------- Searching  -------------------
$routes->get('ajax-search', 'Search::ajaxSearch');
$routes->match(['get','post'],'search', 'Search::searchResult');


// ------------- Checkout ----------------------
$routes->get('checkout', 'Checkout::index');
$routes->get('order_success', 'Checkout::orderSuccess');

$routes->post('seller/get-subcategories', 'Seller_Products::subcategories');
$routes->post('add/wishlist', 'Home::addWishList');
 

$routes->match(['get','post'], 'delivery/details', 'Checkout::updateDeliveryDetails'); 


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
