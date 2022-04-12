<?php 
namespace App\Models;
use CodeIgniter\Model;

class Seller_Model extends Model{

    protected $table = 'sellers';
    protected $primaryKey = 'seller_id';
    protected $allowedFields = 
    [
        'seller_name',
        'seller_phone',
        'seller_email',
        'seller_password',
        'seller_pic',
        'seller_address',
        'country_code',
        'status',
        'uniid',
        'activation_date',
        'created_at',
        'updated_at'
    ];
    public function verifyEmail($email){
       
        $builder = $this->db->table('sellers');
        $builder->select("uniid,status,seller_name,seller_password");
        $builder->where('seller_email',$email);
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
        $builder = $this->db->table('sellers');
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
         $builder = $this->db->table('sellers');
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
        $builder = $this->db->table('sellers');
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
        $builder = $this->db->table('sellers');
        $builder->select("uniid,seller_name,updated_at");
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
        $builder = $this->db->table('sellers');
        $builder->where('uniid', $id);
        $builder->update(['seller_password'=>$pwd]);
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