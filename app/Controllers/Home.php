<?php

namespace App\Controllers;

use App\Models\Brands_Model;
use App\Models\Seller_Model;
use App\Models\Customer_Model;
use App\Models\Contact_Model;
use App\Models\Logos_Model;
use App\Models\Admin_Model;
use App\Models\Footer_Model;
use App\Models\Orders_Model;
use App\Models\Links_Model;
use App\Models\Seller_Products_Model;
use App\Models\Categories_Model;
use App\Models\Sub_Categories_Model;
use App\Models\Shop_Model;
use App\Models\Add_Product_Model;
use App\Models\Wishlist_Model;

class Home extends BaseController
{
    function __construct()
    {
        parent::__construct();
        // $cart = \Config\Services::cart();
    }
   
    function addWishList()
    {
        if(session('isLoggedIn')){
        $prod_id = $this->request->getPost('id');
        $w = new Wishlist_Model();
        if ($prod_id) {
            $q = $w->where('user_id', session('id'))->first();
            if (!$q) {
                $newData = [
                    'user_id' => session('id'),
                    'prod_id' => $prod_id
                ];
                $q = $w->insert($newData);
                if ($q) {
                    echo '1';
                } else {
                    echo '0';
                }
            } else {
                $p = $w->where('prod_id', $prod_id)->first();
                if ($p) {
                    echo '0';
                } else {
                    $newData = [
                        'user_id' => session('id'),
                        'prod_id' => $prod_id
                    ];
                    $q = $w->insert($newData);
                    if ($q) {
                        echo '1';
                    } else {
                        echo '0';
                    }
                }
            }
        }}else{
            echo '2';
        }
    }
    public function index()
    {

        // echo "<pre>";
        // print_r($this->cart->contents());die();
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        $cat = new Sub_Categories_Model();
        $categories = new Categories_Model();
        $prod = new Seller_Products_Model();

        $data['categories'] = $categories->findAll(7);
        $data['categorie'] = $categories->findAll();
        $data['banners'] = $cat->orderBy('cat_id', 'desc')->findAll(10);
         
        $data['recents'] = $prod->orderBy('prod_id', 'desc')->findAll(10);


        $data['computer'] = $prod->where('cat_id', 1)->orderBy('prod_id', 'desc')->findAll();
        $data['computerBanner'] = $cat->where('cat_id', 1)->orderBy('cat_id', 'desc')->findAll(3);

        $data['fashion'] = $prod->where('cat_id', 5)->orderBy('cat_id', 'desc')->findAll();
        $data['computerBanner5'] = $cat->where('cat_id', 5)->orderBy('cat_id', 'desc')->findAll(3);

        $data['phone'] = $prod->where('cat_id', 3)->orderBy('prod_id', 'desc')->findAll();
        $data['computerBanner3'] = $cat->where('cat_id', 3)->orderBy('cat_id', 'desc')->findAll(3);

        $data['men'] = $prod->where('cat_id', 6)->orderBy('prod_id', 'desc')->findAll();
        $data['computerBanner4'] = $cat->where('cat_id', 6)->orderBy('cat_id', 'desc')->findAll(3);

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $data['title'] = 'Subeza E-Commerece Shop';

        return view('index', $data);
    }
    public function notification()
    {
        $data = [];
        if (!session('isLoggedIn')) {
            return redirect('seller/login');
        } else {
            if (session('type') == 'seller') {

                $seller  = new Seller_Model();
                $status = $seller->where('seller_id', session('id'))->first();
                if ($status) {
                    return redirect()->to('/seller/notification');
                } else {
                    return redirect()->to('/seller/login');
                }
            } elseif (session('type') == 'customer') {
                $customer  = new Customer_Model();
                $status = $customer->where('cust_id', session('id'))->first();
                if ($status) {
                    return redirect()->to('/customer/notification');
                } else {
                    return redirect()->to('/customer/login');
                }
            } elseif (session('type') == 'admin') {
                $customer  = new Admin_Model();
                $status = $customer->where('admin_id', session('id'))->first();
                if ($status) {
                    return redirect()->to('/admin/dashboard');
                } else {
                    return redirect()->to('/customer/login');
                }
            } else {
                return redirect('/');
            }
        }
    }
    public function singleProduct($id = null)
    {
        $brands = new Brands_Model();
        $contact = new Contact_Model();
        // $cat = new Categories_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        $prod = new Seller_Products_Model();
        $seller = new Seller_Model();
        $brands = new Brands_Model();
        $img = new Add_Product_Model();
        if($prod->find($id)){
        $data['product'] = $prod->where('prod_id', $id)->first();
        $data['brand'] = $brands->where('brand_id', $data['product']['brand_id'])->first();
        $data['seller'] = $seller->where('seller_id', $data['product']['user_id'])->first();
        $data['images'] = $img->where('prod_id', $data['product']['prod_id'])->findAll();
        $data['brandProducts'] = $prod->where('cat_id', $data['product']['cat_id'])->findAll();


        $data['title'] = $data['product']['prod_name'];

        $data['brands'] = $brands->findAll();
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        return view('single_product', $data);
        }else{
            $this->cart->destroy();
            return redirect()->to('./');
        }
    }
    public function brandsView()
    {
        $brands = new Brands_Model();
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        $data['title'] = 'All Brands';
        $data['brands'] = $brands->findAll();
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        return view('brands', $data);
    }
    public function brandsProducts($id = null)
    {

        $brands = new Brands_Model();
        $prod = new Seller_Products_Model();
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        $cat = new Categories_Model();


        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['categories'] = $cat->findAll();
        $data['logo'] = $logo->first();
        $data['b'] = $brands->findAll();
        $data['brands'] = $brands->where('brand_id', $id)->first();
        $data['products'] = $prod->where('brand_id', $id)->findAll();
        $data['title'] =   $data['brands']['brand_name'];

        return view('brands_products', $data);
    }
    public function CategeoriesView()
    {
        $cat = new Categories_Model();
        $sub = new Sub_Categories_Model();
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['title'] = 'All Categories';

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();

        $data['categories'] = $cat->findAll();
        foreach ($data['categories'] as $key => $val) {
            $subcats = $sub->where('cat_id', $val['cat_id'])->findAll();
            if ($subcats) {
                $data['sub_cat'][$val['cat_id']] = $subcats;
            }
        }

        return view('categories', $data);
    }
    public function categoryProducts($id = null)
    {

        $brands = new Brands_Model();
        $cat = new Categories_Model();
        $sub_cat = new Sub_Categories_Model();
        $prod = new Seller_Products_Model();
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $data['b'] = $brands->findAll();

        $data['category'] = $cat->where('cat_id', $id)->first();
        $data['sub_cat'] = $sub_cat->where('cat_id', $id)->findAll();

        $data['products'] = $prod->where('cat_id', $id)->findAll();
        $data['title'] =   $data['category']['cat_name'];
        return view('categories_products', $data);
    }
    public function subcategoryProducts($id = null)
    {
        $brands = new Brands_Model();
        $cat = new Categories_Model();
        $sub_cat = new Sub_Categories_Model();
        $prod = new Seller_Products_Model();
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $data['b'] = $brands->findAll();

        $data['subcat'] = $sub_cat->where('sub_cat_id', $id)->first();
         
        $b = $data['subcat']['cat_id'];
        $data['category'] = $cat->where('cat_id', $b)->first();
        
        $data['sub_cat'] = $sub_cat->where('cat_id', $id)->findAll();

        $data['products'] = $prod->where('sub_cat_id', $id)->findAll();
        $data['title'] =   $data['subcat']['sub_cat_name'];
        return view('subcategories_products', $data);
    }
    public function sellersView()
    {
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        $seller = new Seller_Model();
        $shop = new Shop_Model();

        $data['title'] = 'All Seller';
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $data['shops'] = $shop->findAll();

        return view('sellers', $data);
    }
    public function singleShop($id = null)
    {


        $prod = new Seller_Products_Model();
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        $shops = new Shop_Model();


        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();

        $data['shop'] = $shops->where('shop_id', $id)->first();
        $user_id = $data['shop']['user_id']; // seller id
        $data['products'] = $prod->where('user_id', $user_id)->orderBy('user_id', 'DESC')->findAll();
        $data['title'] =   $data['shop']['shop_name'];
        return view('single_shop', $data);
    }

    public function myPanel()
    {
        $data = [];
        if (!session('isLoggedIn')) {
            return redirect('seller/login');
        } else {
            if (session('type') == 'seller') {

                $seller  = new Seller_Model();
                $status = $seller->where('seller_id', session('id'))->first();
                if ($status) {
                    return redirect()->to('/seller');
                } else {
                    return redirect()->to('/seller/login');
                }
            } elseif (session('type') == 'customer') {
                $customer  = new Customer_Model();
                $status = $customer->where('cust_id', session('id'))->first();
                if ($status) {
                    return redirect()->to('/customer');
                } else {
                    return redirect()->to('/customer/login');
                }
            } elseif (session('type') == 'admin') {
                $customer  = new Admin_Model();
                $status = $customer->where('admin_id', session('id'))->first();
                if ($status) {
                    return redirect()->to('/admin/dashboard');
                } else {
                    return redirect()->to('/customer/login');
                }
            } else {
                return redirect('/');
            }
        }
    }

    public function wishlistsView()
    {
        $data = [];

        if (!session('isLoggedIn')) {
            return redirect('seller/login');
        } else {
            if (session('type') == 'seller') {
                $seller  = new Seller_Model();
                $status = $seller->where('seller_id', session('id'))->first();
                if ($status) {
                    return redirect('seller/wishlists');
                } else {
                    return redirect('seller/login');
                }
            } elseif (session('type') == 'customer') {
                $customer  = new Customer_Model();
                $status = $customer->where('cust_id', session('id'))->first();
                if ($status) {
                    return redirect('customer/wishlists');
                } else {
                    return redirect('customer/login');
                }
            } else {
                return redirect('/');
            }
        }
    }

    public function logout()
    {

        session()->destroy();
        return redirect()->to('/');
    }
}
