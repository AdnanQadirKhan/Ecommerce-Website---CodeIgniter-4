<?php
namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\Customer_Model;
use App\Models\Seller_Model;
use App\Models\Seller_Products_Model;
use App\Models\Brands_Model;
use App\Models\Categories_Model;

class Admin_Dashboard extends BaseController
{ 
    public function index()
    {
        helper('form'); 
        if(session('type')=='admin'){
        $data['title'] = 'Admin Dashboard';
        $cust = new Customer_Model();
        $seller = new Seller_Model();
        $brand = new Brands_Model();
        $products = new Seller_Products_Model();
        $product = new Seller_Products_Model();
        $cat = new Categories_Model();
        $data['total_customers']= $cust->countAllResults();
        $data['sellers']= $seller->countAllResults();
        $data['brands']= $brand->countAllResults();
        $data['products']= $products->countAllResults(); 
        $data['categories'] = $cat->findAll();
        $data['product'] = $product->select()->join('categories','products.cat_id = categories.cat_id');
        
        $data['product'] = $product->limit(12)->findAll();
        $data['customers']= $cust->limit(10); 
        return view('admin/dashboard',$data);
    }else{
        return redirect()->to('./');
    }
    }

}
?>