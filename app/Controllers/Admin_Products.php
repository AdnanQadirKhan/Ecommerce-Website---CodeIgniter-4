<?php
namespace App\Controllers;
use App\Models\Seller_Products_Model;
use CodeIgniter\Controller; 

class Admin_Products extends BaseController
{ 
    public function index()
    { 
        if(session('type')=='admin'){
        $data['title'] = 'All Products';
        $products = new Seller_Products_Model();
        $data = [
            'products'=> $products->select()->join('sellers', 'sellers.seller_id = products.user_id')->paginate(6),
            'pager' =>$products->pager,
        ];
        return view('admin/products',$data);
    }else{
        return redirect()->to('./');
    }
    }
    public function deleteProduct($id = null)
    {  
        $products = new Seller_Products_Model(); 
        $result = $products->delete(['product_id'=> $id]);
        if($result){
            $data = [];
            session()->setFlashdata('msg','Successfully deleted your product');
            return redirect()->back();
        } 
        return redirect()->back();

    }

}
?>