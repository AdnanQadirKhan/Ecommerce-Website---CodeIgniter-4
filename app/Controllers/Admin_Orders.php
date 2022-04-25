<?php
namespace App\Controllers;


use CodeIgniter\Controller; 
use App\Models\Orders_Model; 
use App\Models\Order_Details_Model;
use App\Models\Customer_Model; 

class Admin_Orders extends BaseController
{ 
    public function index()
    {  
        $data = [];  
        if(session('type')=='admin'){
        $data['title'] = 'Orders';
        $orders = new Orders_Model(); 
        $info = new Customer_Model();  
        $data['orders']= $orders->select()->join('customers', 'customers.cust_id = orders.cust_id')->findAll();
        $data['orders']= $orders->select()->join('sellers', 'sellers.seller_id = orders.seller_id')->findAll();
        return view('admin/orders',$data);
    }else{
        return redirect()->to('./');
    }
    }
    public function deleteOrder($id = null)
    {  
        $Order = new Orders_Model(); 
        $result = $Order->delete(['order_id'=> $id]);
        if($result){
            $data = [];
            session()->setFlashdata('msg','Successfully deleted your record');
            return redirect()->back();
        } 
        return redirect()->back();
    }
    public function OrderDetailsView( $id = null)
    {
        $data = [];  
        $b = new Orders_Model(); 
         $details = new Order_Details_Model();
        $info = new Customer_Model(); 
        
        $data['order'] = $b->where('order_id',$id)->first(); 
        $user_id = $data['order']['cust_id'];
        $data['customer'] = $info->where('cust_id',$user_id)->first();  
        
        $data['details']= $details->select()->join('products', 'order_details.prod_id = products.prod_id');
        $data['details']= $details->where('order_details.order_id',$id)->findAll();
        
        return view('admin/order_details',$data);
    }
}