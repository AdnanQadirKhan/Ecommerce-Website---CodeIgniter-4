<?php
namespace App\Validation;
use App\Models\Customer_Model;

class Validation_Rules
{

  public function validateUser(string $str, string $fields, array $data){
    $model = new Customer_Model();
    $user = $model->where('cust_email', $data['email'])
                  ->first();

    if(!$user)
      return false;

    return password_verify($data['password'], $user['cust_password']);
  }
}
