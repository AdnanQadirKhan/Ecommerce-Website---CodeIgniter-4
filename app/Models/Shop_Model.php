<?php 
namespace App\Models;
use CodeIgniter\Model;

class Shop_Model extends Model{

    protected $table = 'shops';
    protected $primaryKey = 'shop_id';
    protected $allowedFields = ['shop_name','address','shop_phone','shop_logo','shop_banner','user_id'];

}


?>