<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class Cart_Model extends Model{
    protected $table = 'cart';
    protected $primaryKey = 'cart_id';
    protected $allowedFields = 
    [
        'cust_id', 
        'prod_title', 
        'prod_pic', 
        'prod_price', 
        'prod_qty' 
    
    ];
}