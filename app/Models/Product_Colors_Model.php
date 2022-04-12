<?php 
namespace App\Models;
use CodeIgniter\Model;

class Product_Colors_Model extends Model{

    protected $table = 'product_colors';
    protected $primaryKey = 'color_id';
    protected $returnType = 'array';
    protected $allowedFields = ['color','prod_id'];

}


?>