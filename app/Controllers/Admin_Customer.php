<?php
namespace App\Controllers;
use App\Models\Customer_Model;
use App\Models\Order_Details_Model;
use App\Models\Orders_Model;
use CodeIgniter\Controller; 

class Admin_Customer extends BaseController
{ 
    public function index()
    {
        helper('form'); 
        $data['title'] = 'All Customers';
        if(session('type')=='admin'){
        $customer = new Customer_Model();
        $data['customer'] = $customer->findAll();
        $data = [
            'customer'=> $customer->paginate(6),
            'pager' =>$customer->pager,
        ];
        return view('admin/customers',$data);
    }else{
        return redirect()->to('./');
    }
    }
    public function deleteCustomer($id = null)
    {  
        $Customer = new Customer_Model(); 
        $orders = new Orders_Model();
        $details = new Order_Details_Model();
        $d['orders'] = $orders->where('customer_id', $id)->findAll();
        foreach($d['orders'] as $o){
            $d['details'] =$details->where('order_id',$o['order_id'])->findAll();
            $d['orders'] = $orders->delete(['order_id'=>$o['order_id']]);
            foreach($d['details'] as $de){
                $details->delete(['id'=>$de['id']]);
            }
        }
        $result = $Customer->delete(['customer_id'=> $id]);
        if($result){
            $data = [];
            session()->setFlashdata('msg','Successfully deleted your record');
            return redirect()->back();
        } 
        return redirect()->back();

    }

}
?>