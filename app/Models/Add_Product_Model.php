<?php namespace App\Models;

use CodeIgniter\Model;

class Add_Product_Model extends Model{
    protected $table      = 'product_images';
    protected $primaryKey = 'id';
    protected $allowedFields = 
    [
    'img_name', 
    'img_created_at',
    'prod_id'
    ];
}



?>