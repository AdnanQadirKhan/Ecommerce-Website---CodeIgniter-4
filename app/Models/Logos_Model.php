<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class Logos_Model extends Model{
    protected $table = 'logos';
    protected $primaryKey = 'logo_id';
    protected $allowedFields = 
    [
        'header_logo',  
        'footer_logo',  
        'created_at',  
        'updated_at'  
    
    ];
}