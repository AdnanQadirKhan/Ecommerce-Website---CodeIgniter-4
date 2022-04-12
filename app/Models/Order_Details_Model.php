<?php 
namespace App\Models;
use CodeIgniter\Model;

class Order_Details_Model extends Model{

    protected $table = 'order_details';
    protected $primaryKey = 'id';
    protected $allowedFields = 
    [
    'cust_id',
    'prod_id',
    'order_id',
    'price',
    'qty',
  
     ];

}



?>