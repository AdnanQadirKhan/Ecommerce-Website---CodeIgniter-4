<?php

namespace App\Controllers;

use App\Models\Shop_Model;
use App\Models\Contact_Model;
use App\Models\Customer_Model;
use App\Models\Footer_Model;
use App\Models\Links_Model;
use App\Models\Logos_Model;
use App\Models\Wishlist_Model;

class Customer_Wishlist extends BaseController
{
            
    public function index(){ 
        $model = new Shop_Model();
        $data = [];
        $data['title'] = 'Wishlist';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        
        // $data['shop'] = $model->where('user_id',session('id'))->first();
        
        if(!session('isLoggedIn')){
            return redirect()->to('/customer/login');
        }
        else{
            $cust = new Customer_Model();
            $wishlist = new Wishlist_Model();

            $s = $cust->find(session('id'));
            if($s){
                if(session('type')=='customer'){
                    $data['wishlist']= $wishlist->select()->join('products', 'products.prod_id = wishlist.prod_id');
                    $data['wishlist']= $wishlist->where('wishlist.user_id',session('id'))->findAll();
                    return view('panel/customer/wishlist',$data);
                }else{
                    return redirect()->to('/customer/login');
                }
            }else{
                return redirect()->to('/customer/login');
            }

        }
    }
}

?>