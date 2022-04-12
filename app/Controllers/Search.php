<?php
namespace App\Controllers; 
use CodeIgniter\Controller;  
use App\Models\Brands_Model;
use App\Models\Seller_Model;
use App\Models\Customer_Model;
use App\Models\Contact_Model;
use App\Models\Logos_Model;
use App\Models\Admin_Model;
use App\Models\Footer_Model;
use App\Models\Links_Model; 
use App\Models\Seller_Products_Model; 
use App\Models\Categories_Model; 
use App\Models\Sub_Categories_Model; 
use App\Models\Shop_Model; 
use App\Models\Add_Product_Model; 
class Search extends BaseController
{ 
    public function searchResult(){ 
        $data = [];
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
        
        $id = $this->request->getPost('keyword'); 

        // $data['category'] = $cat->where('cat_id',$id)->first();
        $data['categories'] = $cat->findAll();
        $data['brand'] = $brands->findAll();
        // $data['sub_cat'] = $sub_cat->where('cat_id',$id)->findAll();

        $data['products'] = $prod->like('prod_name',$id)->findAll();
        $data['products'] = $prod->orlike('prod_description',$id)->findAll();
        $data['title'] =   $id;
 
        return view('search_products',$data);
    }
    public function ajaxSearch()
    { 
        $output = '';
        $data = '';
        
     }
}