<?php

namespace App\Controllers;
use App\Models\Customer_Model;
use App\Models\Contact_Model;
use App\Models\Logos_Model;
use App\Models\Links_Model;
use App\Models\Footer_Model;
use App\Libraries\Validation; // Import library

class Customer_Login extends BaseController
{    
    public function index()
    { 
        $data = [];
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $data['title'] = 'Login';
        echo view('panel/customer/login_form',$data); 
    }
    protected function setUserSession($user){
    
		$data = [
			'id' => $user['cust_id'],
			'name' => $user['cust_name'],
			'phone' => $user['cust_phone'],
			'pic' => $user['cust_pic'],
			'email' => $user['cust_email'],
			'address' => $user['cust_address'], 
            'type' => 'customer',
			'isLoggedIn' => true,
		]; 
		session()->set($data);
		return true;
	
	}
    public function verifyUser()
	{  
    
        $data = [];  
        $data['title'] = 'Login';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        helper(['form', 'url']); 
        $validation = [

            'email'=>[
                'rules'  => 'required|min_length[6]|valid_email|is_not_unique[customers.cust_email]',
                'errors' => [
                    'required' => 'Email is required', 
                    'valid_email' => 'Enter a valid email address',
                    'is_not_unique'=> 'This email is not registered on our service'
                ]
            ],
            'password'=>[
                'rules'  => 'required|min_length[8]',
                'errors' => [
                    'required'  => 'Password is required',
                    'min_length'=> 'Password must have atleast 8 characters in length',
                ]
            ], 
        ];
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        if($this->validate($validation)){
            $email = $this->request->getPost('email');
            $pass = $this->request->getPost('password');
            $customermodel = new Customer_Model();
            $userdata = $customermodel->verifyEmail($email);
            $fullname = $userdata['cust_name'];
            $uniid = $userdata['uniid'];
            $user  = $customermodel->where('cust_email',$email)->first();
            $checkPass = Validation::check_customer($pass,$user ['cust_password']);
            if($userdata['status']=='active'){
            if(!$checkPass)
            {
                session()->setFlashdata('incorrect', 'Email or password don\'t match');
                return redirect()->to('/customer/login'); 
            }
            else
            {
                $data = [
                    'id' => $user['cust_id'],
                    'name' => $user['cust_name'],
                    'phone' => $user['cust_phone'],
                    'pic' => $user['cust_pic'],
                    'email' => $user['cust_email'],
                    'address' => $user['cust_address'], 
                    'type' => 'customer',
                    'isLoggedIn' => true,
                ]; 
                session()->set($data); 
                    return redirect()->to('/customer');
                    // echo view('panel/customer/dashboard');

            }
        }
        else{
            $email = \Config\Services::email();
            $id = session('id');
            $custmodel = new Customer_Model();
            $email = \Config\Services::email();
            $newdate['activation_date'] = 'date("Y-m-d h:i:s")';
            $custmodel->set('activation_date',$newdate);
            $custmodel->where('cust_id',$id);
            $custmodel->update();
            $to = $this->request->getPost('email');
            $subject = 'Account Activation Link ';
            $message = 'Hi ' . $fullname . ",<br><br>Thanks for registering at our website. Your account has been created "
                . "successfully. Please click the link below to activate your account<br><br>"
                . "<a href='" . base_url() . "/customer_login/activate/" . $uniid . "' target='_blank'>Activate Now</a><br><br>Team,<br>Adnan";

            $email->setTo($to);
            $email->setFrom('system@subeza.com', 'Subeza');
            // $email->setBCC('somebcc@mail.com');
            // $email->setCC('somecc@mail.com');
            $email->setSubject($subject);
            $email->setMessage($message);
            $email->send();
            session()->setFlashdata('error', 'Email is not verified. Please check your email', 3);
            return view('panel/customer/login_form', $data);
        }
        }else{
            $data['validation'] = $this->validator;
            echo view('panel/customer/login_form',$data);  
            
        }
    }
   
 
    public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}
    public function forgotpassword()
    {
        helper(['form', 'url']);
        $data = [];
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $data['title'] = 'Forgot Password';
        if ($this->request->getMethod() == 'post') {
            // validation
            
            $rules = [
                'email' => [
                    'rules'  => 'required|min_length[6]|max_length[255]|valid_email|is_not_unique[customers.cust_email]',
                    'errors' => [
                        'required' => 'Email is required',
                        'is_valid' => 'You must enter a valid email',
                        'is_not_unique' => 'This email is not registered on our service'

                        ]
                    ],
                ];
                if ($this->validate($rules)) {
                    $email = $this->request->getPost('email');
                    $customermodel = new Customer_Model();
                    $userdata = $customermodel->verifyEmail($email);
                    
                    if (!empty($userdata)) {
                    if ($customermodel->updatedAt($userdata['uniid'])) {
                        $to = $email;
                        $subject = 'Reset Password Link';
                        $token = $userdata['uniid'];
                        $message = 'Hi ' . $userdata['cust_name'] . '<br><br>'
                        . 'Your reset password request has been received. Please click'
                        . 'the below link to reset your password.<br><br>'
                        . '<a href="' . base_url() . '/customer_login/reset_password/' . $token . '">Click here to Reset Password</a><br><br>'
                        . 'Thanks<br>Team Adnan';
                        $email = \Config\Services::email();
                        $email->setTo($to);
                        $email->setFrom('system@subeza.com', 'Subeza');
                        $email->setSubject($subject);
                        $email->setMessage($message);
                        if ($email->send()) {
                            session()->setFlashdata('success', 'Reset password link sent to your registred email. Please verify within 15 mins', 3);
                            return redirect()->to(current_url());
                        } else {
                            $data = $email->printDebugger(['headers']);
                            print_r($data);
                        }
                    } else {
                        $this->session->setFlashdata('error', 'Sorry! Unable to update. try again', 3);
                        return redirect()->to(current_url());
                    }
                } else {
                    $this->session->setFlashdata('error', 'Email does not exists', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
                
            }
        }
        return view('reset_customer', $data);
    }
    public function reset_password($token = null)
    {
        $customermodel = new Customer_Model();
        helper('form'); 
        $data = [];
        if (!empty($token)) {
            $userdata = $customermodel->verifyToken($token);
            if (!empty($userdata)) {
                if ($this->checkExpiryDate($userdata['updated_at'])) {
                    if ($this->request->getMethod() == 'post') {
                        $rules = [
                            'pwd' => [
                                'label' =>'Password',
                                'rules' => 'required|min_length[8]|max_length[16]',
                            ],
                            'cpwd' => [
                                'label' => 'Confirm Password',
                                'rules' => 'required|matches[pwd]'
                            ],
                        ];
                        if ($this->validate($rules)) {
                            $pass =  Validation::make($this->request->getPost('pwd'));
                            if ($customermodel->updatePassword($token, $pass)) {
                                session()->setFlashdata('success', 'Password updated successfully, Login now', 3);
                                return redirect()->to(base_url() . '/customer/login');
                            } else {

                                session()->setFlashdata('error', 'Sorry! Unable to update Password. try again', 3);
                                return redirect()->to(current_url());
                            }
                    } else {
                        $data['validation'] = $this->validator;
                    }
                    }
                    // die('asdasd');
                } 
                else {
                    $data['error'] = 'Reset password link was expired.';
                }
            } 
            else {
                $data['error'] = 'Unable to find user account';
            }
        } 
        else {
            $data['error'] = 'Sorry! Unauthourized access';
        }

        return view('reset_password',$data);
    }
    public function checkExpiryDate($time)
    {
        $timeDiff = strtotime(date("Y-m-d h:i:s")) - strtotime($time);
        if ($timeDiff < 900) {
            return true;
        } else {
            return false;
        }
    }
    public function activate($uniid = null)
    {
     
        $model = new Customer_Model();
        $this->session = \Config\Services::session();
        $email = \Config\Services::email();
        $data = [];
        if (!empty($uniid)) {
            $userdata = $model->verifyUniid($uniid);
            // print_r($userdata);
            if ($userdata) {
                if ($this->verifyExpiryTime($userdata->activation_date)) {
                    // die('dasdas');
                    if ($userdata->status == 'inactive') {
                        $status = $model->updateStaus($uniid);
                        if ($status == true) {
                            $data['success'] = 'Account Activated successfully. Close the tab and return to login page.';
                        }
                    } else {
                        $data['success'] = 'Your account is already activated';
                    }
                } else {
                    $data['error'] = 'Sorry! Activation link was expired!';
                }
            } else {
                $data['error'] = 'Sorry! We are Unable to find your account';
            }
        } else {
            $data['error'] = 'Sorry! Unable to process your request';
        }
        // die('Activate');
        return view("activate", $data);
    }
    public function verifyExpiryTime($regTime)
    {
        helper(['date', 'url']);

        $currTime = now();
        $registerTime = strtotime($regTime);
        $diffTime = (int)$currTime - (int)$registerTime;
        if (3600 > $diffTime) {
            return true;
        } else {
            return false;
        }
    }
}

