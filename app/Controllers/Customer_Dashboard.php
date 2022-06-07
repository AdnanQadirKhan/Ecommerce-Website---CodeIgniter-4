<?php

namespace App\Controllers;
use App\Models\Orders_Model;
use App\Models\Contact_Model;
use App\Models\Footer_Model;
use App\Models\Links_Model;
use App\Models\Logos_Model;
use App\Models\Seller_Products_Model;

class Customer_Dashboard extends BaseController
{
    public function index()
    {  
        if(session('type')=='customer'){
        $data['title'] = 'Dashboard';
        $p = new Seller_Products_Model();
        $o = new Orders_Model();
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $data['total_orders']= $o->where('cust_id',session('id'))->countAllResults();
        $data['total_prod']= $p->where('user_id',session('id'))->countAllResults();
        
        return view('panel/customer/dashboard',$data);
        }
        else{
            return redirect()->to("./");
        }
    }
    public function notificationView(){
        $data = []; 
        $data['title'] = 'Notification';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first(); 
        return view('panel/customer/notification',$data);

    }
}
