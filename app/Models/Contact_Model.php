<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class Contact_Model extends Model{
    protected $table = 'contacts';
    protected $primaryKey = 'contacts_id';
    protected $allowedFields = 
    [
        'contact_addr', 
        'contact_email',
        'phone'
    
    ];
}