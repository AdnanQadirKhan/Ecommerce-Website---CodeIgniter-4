<?php
namespace App\Controllers;
use App\Models\Seller_Model;
use App\Models\Seller_Products_Model;
use App\Models\Orders_Model;
use App\Models\Order_Details_Model;
use App\Models\Product_Images_Model;
use App\Models\Shop_Model;
use CodeIgniter\Controller; 

class Admin_Seller extends BaseController
{ 
    public function index()
    {
        $data = [];
        helper('form','uri');  
        if(session('type')=='admin'){
        $seller = new Seller_Model(); 
        $data['title'] = 'All Sellers';
        $data['sellers']= $seller->findAll(); 
        $data = [
            'sellers'=> $seller->paginate(6),
            'pager' =>$seller->pager,
        ];
        return view('admin/sellers',$data);
    }else{
        return redirect()->to('./');
    }
    }
    public function deleteSeller($id = null)
    {  
        $seller = new Seller_Model(); 
        $products = new Seller_Products_Model(); 
        $orders = new Orders_Model();
        $details = new Order_Details_Model();
        $images = new Product_Images_Model();
        $shop = new Shop_Model();
        // deleting images from products and products images table
        $d['products'] = $products->where('user_id', $id)->findAll();
        foreach($d['products'] as $p){ 
            $path = 'public/uploads/products/';
             
            if(file_exists($path.$p['prod_img'])){
                unlink($path.$p['prod_img']); 
            } 
            

            //delete from product images
            $d['images'] = $images->where('prod_id', $p['prod_id'])->findAll();
            foreach($d['images'] as $imgs){

                if(file_exists($path.$imgs['img_name'])){
                    unlink($path.$imgs['img_name']); 
                } 
                $d['images'] = $images->delete(['prod_id'=>$imgs['prod_id']]);
            }
            $d['products'] = $products->delete(['prod_id'=>$p['prod_id']]);

        }
        // delete records from order
        $d['orders'] = $orders->where('seller_id', $id)->findAll();
        foreach($d['orders'] as $p){
            $d['details'] = $details->where('order_id', $p['order_id'])->findAll();
            $d['orders'] = $orders->delete(['order_id'=>$p['order_id']]);
            foreach($d['details'] as $de){
                $details->delete(['id'=>$de['id']]);
            }
            

        }
        $d['shops'] = $shop->where('user_id', $id)->findAll();
        foreach($d['shops'] as $s){
            $d['seller'] = $seller->where('seller_id', $s['user_id'])->findAll();
            $d['shops'] = $shop->delete(['shop_id'=>$s['shop_id']]); 
        }
        

        $result = $seller->delete(['seller_id'=> $id]);
        if($result){
            $data = [];
            session()->setFlashdata('msg','Successfully deleted your record');
            return redirect()->back();
        } 
        return redirect()->back();
        

    }

}
?>