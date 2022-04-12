<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class Seller_Products_Model extends Model{
    protected $table = 'products';
    protected $primaryKey = 'prod_id';
    protected $allowedFields = 
    [
        'prod_name',
        'cat_id',
        'sub_cat_id',
        'brand_id',
        'prod_qty',
        'prod_tags',
        'prod_img',
        'prod_video',
        'prod_description', 
        'old_price', 
        'new_price', 
        'user_id'
    
    ];
}
?>