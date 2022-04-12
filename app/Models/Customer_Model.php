<?php 
namespace App\Models;
use CodeIgniter\Model;

class Customer_Model extends Model{

    protected $table = 'customers';
    protected $primaryKey = 'cust_id';
    protected $allowedFields = 
    ['cust_name',
    'cust_email',
    'cust_phone',
    'cust_password',
    'cust_address',
    'cust_pic',
    'country_code',
    'uniid',
    'status',
    'activation_date',
    'created_at',
    'updated_at'
    ];
    public function verifyEmail($email){
       
        $builder = $this->db->table('customers');
        $builder->select("uniid,status,cust_name,cust_password");
        $builder->where('cust_email',$email);
        $result = $builder->get();
        if(count($result->getResultArray())==1)
        {
            return $result->getRowArray();
        }
        else
        {
            return false;
        }
    }
    public function updatedAt($id){
        $builder = $this->db->table('customers');
        $builder->where('uniid', $id);
        $builder->update(['updated_at'=>date('Y-m-d h:i:s')]);
        if($this->db->affectedRows()==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function verifyUniid($id)
    {
         $builder = $this->db->table('customers');
         $builder->select('activation_date,uniid,status');
         $builder->where('uniid',$id);
         $result = $builder->get();
         //echo count($result->getResultArray());
         //echo $result->resultID->num_rows;
         if(count($result->getResultArray())==1)
         {
            return $result->getRow();
         }
         else
         {
             return false;
         }
    }
    public function updateStaus($uniid)
    {
        $builder = $this->db->table('customers');
        $builder->where('uniid',$uniid);
        $builder->update(['status'=>'active']);
        if($this->db->affectedRows()==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function verifyToken($token){
        $builder = $this->db->table('customers');
        $builder->select("uniid,cust_name,updated_at");
        $builder->where('uniid',$token);
        $result = $builder->get();
        if(count($result->getResultArray())==1)
        {
            return $result->getRowArray();
        }
        else
        {
            return false;
        }
    }
    public function updatePassword($id,$pwd){
        $builder = $this->db->table('customers');
        $builder->where('uniid', $id);
        $builder->update(['cust_password'=>$pwd]);
        if($this->db->affectedRows()==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}



?>