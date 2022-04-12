<?php 
namespace App\Models;
use CodeIgniter\Model;

class Links_Model extends Model{

    protected $table = 'links';
    protected $primaryKey = 'link_id';
    protected $allowedFields = ['fb','insta','youtube'];

}


?>