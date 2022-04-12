<?php
namespace App\Controllers;
use App\Models\Customer_Model;


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