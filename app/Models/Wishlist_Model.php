<?php 
namespace App\Models;
use CodeIgniter\Model;

class Wishlist_Model extends Model{

    protected $table = 'wishlist';
    protected $primaryKey = 'wishlist_id';
    protected $allowedFields = 
    [
    'user_id', 
    'prod_id', 
     ];

}



?>