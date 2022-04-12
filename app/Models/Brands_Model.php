<?php 
namespace App\Models;
use CodeIgniter\Model;

class Brands_Model extends Model{

    protected $table = 'brands';
    protected $primaryKey = 'brand_id';
    protected $allowedFields = ['brand_name','brand_pic'];

}


?>