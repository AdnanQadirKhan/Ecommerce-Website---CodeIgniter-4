<?php

namespace App\Controllers;
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
use CodeIgniter\CLI\Console;
use CodeIgniter\Exceptions\AlertError;

class Cart extends BaseController
{
     

    public function add_cart(){  

    }

    /* FUNCTION: Concering Add, Remove and Updating Cart Items*/
    function cart($para1 = '', $para2 = '', $para3 = '', $para4 = '')
    {
    
    	$products = new Seller_Products_Model();
    	$quantity = $this->request->getPost('quantity');

        if ($para1 == "add") {
        
            $all_op = $products->where('prod_id',$para2)->first();
            $qty = !empty($quantity) ? $quantity : 1;
            $name = $all_op['prod_name'];
            $price = $all_op['new_price'];
            $image = $all_op['prod_img'];
       

            if ($para3 == 'pp') {
                $carted = $this->cart->contents();
                foreach ($carted as $items) {
                    if ($items['id'] == $para2) {
               
                        $data = array(
                            'rowid' => $items['rowid'],
                            'qty' => 0
                        );
                    } else {
                        $data = array(
                            'rowid' => $items['rowid'],
                            'qty' => $items['qty']
                        );
                    }
                    $this->cart->update($data);
                }
            }

            $data = array(
                'id' => $para2,
                'qty' => $qty,
                'price' => $price,
                'name' => $name,
                'image' => !empty($image) ? base_url().'/public/uploads/products/'.$image : base_url().'/public/uploads/placeholder-rect.jpg',
            );

            $stock = $all_op['prod_qty'];

            if (!$this->is_added_to_cart($para2) || $para3 == 'pp') {
                if ($stock >= $qty) {
                    $this->cart->insert($data);
                    echo 'added';
                } else {
                    echo 'shortage';
                }
            } else {
                echo 'already';
            }
        
        }

        if ($para1 == "remove_one") {

            $this->cart->remove($para2);

            $carted = $this->cart->contents();
            echo count($carted);
            if (count($carted) == 0) {
                $this->cart('empty');
            }
        }

        if ($para1 == "whole_list") {
            echo json_encode($this->cart->contents());
        }

    }

    //IF PRODUCT ADDED TO CART
    function is_added_to_cart($product_id, $set = '', $op = '')
    {
        $carted = $this->cart->contents();
        
        if (count($carted) > 0) {
            foreach ($carted as $items) {
                if ($items['id'] == $product_id) {

                    if ($set == '') {
                        return true;
                    } else {
                        if ($set == 'option') {
                            $option = json_decode($items[$set], true);
                            return $option[$op]['value'];
                        } else {
                            return $items[$set];
                        }
                    }
                }
            }
        } else {
            return false;
        }
    }
}