<?php 
namespace App\Models;
use CodeIgniter\Model;

class Orders_Model extends Model{

    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $allowedFields = 
    [
    'order_addr',
    'order_total',
    'num_of_products',
    'cust_id',
    'seller_id',
    'phone',
    'payment_status',
    'delivery_status',
    'tracking_code',
    'created_at',
     ];

}



?>