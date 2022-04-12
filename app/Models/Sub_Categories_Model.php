<?php 
namespace App\Models;
use CodeIgniter\Model;

class Sub_Categories_Model extends Model{

    protected $table = 'sub_categories';
    protected $primaryKey = 'sub_cat_id';
    protected $returnType = 'array';
    protected $allowedFields = ['sub_cat_name','cat_pic','icon','cat_id'];

}


?>