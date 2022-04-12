<?php

namespace App\Controllers;
use App\Models\Contact_Model;
use App\Models\Customer_Model;
use App\Models\Seller_Model;
use App\Models\Footer_Model;
use App\Models\Links_Model;
use App\Models\Logos_Model;
use App\Models\Orders_Model;
use App\Models\Order_Details_Model;
class Seller_Order extends BaseController
{
    public function index()
    {
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        $orders = new Orders_Model();
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $data['title'] = 'Orders';
        $data['orders']= $orders->select()->join('customers', 'customers.cust_id = orders.cust_id');
        $data['orders'] = $orders->where('orders.seller_id',session('id'))->findAll();
         
        
        return view('panel/seller/orders',$data);
    }
    public function OrderDetailsView( $id = null)
    { 
        $data = [];  
        $b = new Orders_Model();  
        $info = new Customer_Model(); 
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model(); 

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();

        $data['title'] = 'Orders Details';
        if($id){
                    $data['order'] = $b->where('order_id',$id)->first(); 
        $user_id = $data['order']['cust_id'];   
        $data['customer'] = $info->where('cust_id',$user_id)->first();  
        
                $details = new Order_Details_Model();
        
        $data['details']= $details->select()->join('products', 'order_details.prod_id = products.prod_id');
        $data['details']= $details->where('order_details.order_id',$id)->findAll(); 
        
        return view('panel/seller/order_details',$data);
        }else{
            return redirect()->to('seller/orders');
        }

    }
    public function updateOrderDetails()
    {
        $s = new Seller_Model();
        $order = new Orders_Model();
        $query = $s->find(session('id'));
        if(!$query){
            return redirect()->to('seller/login');
        }else{
            $order_id = $this->request->getPost('order_id');
            $p_status = $this->request->getPost('payment_status');
            $d_status = $this->request->getPost('delivery_status');
            $code = $this->request->getPost('tracking_code');
            
            //updating
            $order->set('payment_status',$p_status);
            $order->set('delivery_status',$d_status);
            $order->set('tracking_code',$code);
            $order->where('order_id',$order_id);
            $order->update();
            
            //redirecting and fetching data 
            $info = new Customer_Model(); 
            $contact = new Contact_Model();
            $logo = new Logos_Model();
            $Footer = new Footer_Model();
            $link = new Links_Model(); 

            $data['link'] = $link->first();
            $data['footer'] = $Footer->first();
            $data['contact'] = $contact->first();
            $data['logo'] = $logo->first();

            $data['title'] = 'Orders Details';

            $data['order'] = $order->where('order_id',$order_id)->first(); 
            $user_id = $data['order']['cust_id'];   
            $data['customer'] = $info->where('cust_id',$user_id)->first();  
            return view('panel/seller/order_details',$data);
        }
    }
    
}
