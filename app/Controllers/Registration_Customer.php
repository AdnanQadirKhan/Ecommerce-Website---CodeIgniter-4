<?php

namespace App\Controllers;

use App\Libraries\Validation;
use App\Models\Customer_Model;
use App\Models\Contact_Model;
use App\Models\Links_Model;
use App\Models\Footer_Model;
use App\Models\Logos_Model;

class Registration_Customer extends BaseController
{
    public $email;
    public $session;
    public function __construct()
    {
        helper(['form', 'url']);
        $this->session = \Config\Services::session();
        
        $model = new Customer_Model();
        

    }
    public function index()
    {
        $data = [];
        $data['title'] = 'Customer Registration';

        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();

        echo view('registration', $data);
    }

    public function registerCustomer()
    {
        $data = [];
        $data['title'] = 'Customer Registration';
        helper(['form', 'url']);
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        
        if ($this->request->getMethod() == 'post') {
            // validation
            
            $rules = [
                'fullname' => [
                    'rules'  => 'required|min_length[5]|max_length[40]',
                    'errors' => 'Your full name is required'
                ],
                'phone' => [
                    'rules'  => 'required|min_length[9]|max_length[12]|is_unique[customers.cust_phone]',
                    'errors' => [
                        'required' =>  'Your phone number is required',
                        'is_unique' => 'Phone number already exists'
                        ]
                    ],
                    'email' => [
                        'rules'  => 'required|min_length[6]|max_length[50]|valid_email|is_unique[customers.cust_email]',
                        'errors' => [
                            'required' => 'Email is required',
                            'is_valid' => 'You must enter a valid email',
                            'is_unique' => 'Email already taken'
                    ]
                ],
                'password' => [
                    'rules'  => 'required|min_length[8]|max_length[255]',
                    'errors' => [
                        'required'  => 'Password is required',
                        'min_length' => 'Password must have atleast 8 character in length',
                        ]
                    ],
                    'password_confirm' => [
                        'rules'  => 'required|min_length[8]|max_length[255]|matches[password]',
                        'errors' => [
                            'required'  => 'Confirm password is required',
                            'min_length' => 'Password must have atleast 8 character in length',
                            'matches'   => 'Confirm password not matches with password'
                            ]
                            ]
                
            ];
            if ($this->validate($rules)) {
                $model = new Customer_Model();
                $uniid = md5(str_shuffle('abcdefghiklmnoprstuvwxyz' . time()));
                $cust_name = $this->request->getPost('fullname');
                $cust_email = $this->request->getPost('email');
                $cust_phone = $this->request->getPost('phone');
                $cust_password = $this->request->getPost('password');
                $country_code = $this->request->getPost('country_code');

                $data = [
                    'cust_name' => $cust_name,
                    'cust_email' => $cust_email,
                    'cust_phone' => $cust_phone,
                    'cust_password' => Validation::make($cust_password),
                    'country_code' => $country_code,
                    'uniid' => $uniid,
                    'activation_date' => date("Y-m-d h:i:s"),

                ];
                // print_r($data);
                $query = $model->insert($data);
                if ($query) {
                    $email = \Config\Services::email();
                    //redirect to login page and show that the new customer account was created.
                    $to = $this->request->getPost('email');
                    $subject = 'Account Activation Link ';
                    $message = 'Hi '.$this->request->getPost('fullname').",<br><br>Thanks for registering at our website. Your account has been created "
                    . "successfully. Welcome aboard! <br><br> Please click the link below to activate your account<br><br>"
                    . "<a href='". base_url()."/registration_customer/activate/".$uniid."' target='_blank'>Activate Now</a><br><br>Thanks,<br>Team Subeza";
                    
                    
                    $email->setTo($to);
                    $email->setFrom('system@subeza.com', 'Subeza');
                    // $email->setBCC('somebcc@mail.com');
                    // $email->setCC('somecc@mail.com');
                    $email->setSubject($subject);
                    $email->setMessage($message);
                    // $filepath = 'public/assets/img/logo-3.png';
                    // $this->email->attach($filepath);
                    
                    if ($email->send()) {
                        // die('asdas');
                        $session = session();
                        $session->setFlashdata('successfull', 'Successfully created your account. Please activate your account.');
                        return redirect()->to('/customer/login');
                        
                    } else {
                        $data = $email->printDebugger(['headers']);
                        
                        $this->session->setFlashdata('error', 'Account created successfully. Sorry! unable to send activation link. Contact Admin');
                        return redirect()->to('/customer/login');
                    }
                } else {
                

                    //show error message that the data was not stored, 
                    $data['validation'] = $this->validator;
                    echo view('registration', $data);
                }
            } 
            else {
              $session = session();
              $session->setFlashdata('fail', 'Invalid credentials!');
                $data['validation'] = $this->validator;
                return view('registration', $data);
            }
        }
    }
    public function activate($uniid=null)
    {
        helper(['form', 'url']);
        $model = new Customer_Model();
        $this->session = \Config\Services::session();
        $email = \Config\Services::email();
        $data=[];
        if(!empty($uniid))
        {

            $userdata = $model->verifyUniid($uniid);
            // print_r($userdata);
            // die('dasd');
            if($userdata)
            {
                if($this->verifyExpiryTime($userdata->activation_date))
                {
                    // die('dasdas');
                    if($userdata->status == 'inactive')
                    {
                        $status = $model->updateStaus($uniid);
                        if($status == true)
                        {
                            $data['success'] = 'Your account has been activated successfully. Welcome aboard! Close the tab and return to login page.';
                        }
                    }
                    else
                    {
                        $data['success'] = 'Your account is already activated';
                    }
                    }
                    else
                {
                        $data['error'] = 'Sorry! Activation link was expired!';
                }
            }
            else
            {
                $data['error'] = 'Sorry! We are Unable to find your account';
            }
            
        }
        else
        {
            $data['error'] = 'Sorry! Unable to process your request';
        }
      
        return view("activate",$data);
    }
    public function verifyExpiryTime($regTime)
    {
        helper(['date', 'url']);

     
        $currTime = now();
        $registerTime = strtotime($regTime);
        $diffTime = (int)$currTime - (int)$registerTime;
        if(3600 > $diffTime)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}
