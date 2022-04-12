<?php
namespace App\Controllers;


use CodeIgniter\Controller;
use App\Libraries\Validation;
use App\Models\Customer_Model;
use App\Models\Logos_Model;

class Admin extends BaseController
{
     
    public function index()
    {
        helper('form');
        $l = new Logos_Model();
        $data['logo'] = $l->first();
        $data['title'] = 'Login';
        return view('admin/admin-login',$data);
    }
 
   
  
    public function profile()
    {
        helper('form');
        echo 'profile method';
        $admin = new Customer_Model();
        $data['seller'] = $admin->findAll();
        return view('admin/profile',$data);
    }
    public function products()
    {
        helper('form');
        echo 'product method';;
        return view('admin/products/create');
    }
    public function check()
    {
        helper (['form']);  
        $validation = $this->validate([
            'email'=>[
                'rules'=>'required|valid_email|is_not_unique[admin.admin_email]',
                'errors'=>[
                    'required'=>'Email is required',
                    'valid_email'=>'Enter a valid email address',
                    'is_not_unique'=>'This email is not registered on our service'
                ]
                ],
                'password'=>[
                    'rules'=>'required|min_length[5]|max_length[255]|',
                    'errors'=>[
                        'required'=>'Password is required',
                        'min_length'=>'Password must have at least 5 characted in length atleast',
                        'max_length'=>'Password must have not have more than 255 characters'
                    ]
                ]
                    ]);

        if(!$validation)
        {
            // echo 'Fail';
        $l = new Logos_Model();
        $data['logo'] = $l->first();
        $data['title'] = 'Login';
        $data['validation']= $this->validator;
         return view('admin/admin-login',$data);
        }
        else
        { 
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $adminModel = new \App\Models\Admin_Model();
        $admin_info = $adminModel -> where ('admin_email', $email)->first();
        $check_password = Validation::check_customer($password, $admin_info['admin_password']);

        if(!$check_password)
        {
            session()->setFlashdata('fail', 'Email or password don\'t match');
            return redirect()-> to ('admin');
        }
        else
        {
            $this->setUserSession($admin_info);
            return redirect()->to('admin/dashboard');
        }
       
        }
    }
    private function setUserSession($user){
    
		$data = [
			'id' => $user['admin_id'],
			'name' => $user['admin_name'],
			'email' => $user['admin_email'],
			'pic' => $user['admin_pic'], 
            'type' => 'admin',
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}
    function logout(){
        session()->destroy();
		return redirect()->to('/');
        }
    
}
