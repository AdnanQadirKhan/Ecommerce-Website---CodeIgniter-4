<?php 
namespace App\Models;
use CodeIgniter\Model;

class Categories_Model extends Model{

    protected $table = 'categories';
    protected $primaryKey = 'cat_id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'cat_name',
        'cat_pic',
        'icon',
        'have_sub_cat'];

}


?>