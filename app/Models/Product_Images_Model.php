<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class Product_Images_Model extends Model{
    protected $table = 'product_images';
    protected $primaryKey = 'id';
    protected $allowedFields = 
    [
        'img_name', 
        'prod_id' 
    
    ];
}