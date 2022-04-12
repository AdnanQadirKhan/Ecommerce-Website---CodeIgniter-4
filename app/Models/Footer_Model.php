<?php 
namespace App\Models;
use CodeIgniter\Model;

class Footer_Model extends Model{

    protected $table = 'footer';
    protected $primaryKey = 'footer_id';
    protected $allowedFields = ['footer_logo','footer_desc','copyright_text'];

}


?>