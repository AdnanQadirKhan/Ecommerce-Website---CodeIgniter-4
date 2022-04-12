<?php

namespace App\Controllers;

use App\Models\Seller_Model;
use App\Models\Shop_Model;
use App\Libraries\Validation;
use App\Models\Contact_Model;
use App\Models\Links_Model;
use App\Models\Footer_Model;
use App\Models\Logos_Model;

class Registration_Seller extends BaseController
{
    public $email;
    public $session;
    public function __construct()
    {
        helper(['form', 'url']);
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
        $model = new Seller_Model();

    }
    public function index()
    { 
        $data = [];
        $data['title'] = 'Seller Registration';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        echo view('create', $data);
    }
 
    public function registerSeller()
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
        if ($this->request->getMethod() == 'post') 
        {
            // validation
            
            $rules = [
                'fullname' => [
                    'rules'  => 'required|min_length[5]|max_length[40]',
                    'errors' => 'Your full name is required'
                ],
                'phone' => [
                    'rules'  => 'required|min_length[9]|max_length[12]|is_unique[sellers.seller_phone]',
                    'errors' => [
                      'required' =>  'Your phone number is required',
                    'is_unique' => 'Phone number already exists'
                    ]
                ],
                'email' => [
                    'rules'  => 'required|min_length[6]|max_length[50]|valid_email|is_unique[sellers.seller_email]',
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
                ],
                'shop_name' => [
                    'rules'  => 'required|min_length[5]|max_length[200]|is_unique[shops.shop_name]',
                    'errors' => [
                        'required' => 'Email is required',
                        'is_unique' => 'Shop name already taken'
                    ]
                ],
                'address' => [
                    'rules'  => 'required|min_length[10]|max_length[400]',
                    'errors' => [
                        'required' => 'Shop address is required'
                    ]
                ],

            ];
            if ($this->validate($rules)) { 
                $model = new Seller_Model();
                $uniid = md5(str_shuffle('abcdefghiklmnoprstuvwxyz' . time()));
             
                $seller_name = $this->request->getPost('fullname');
                $seller_phone = $this->request->getPost('phone');
                $seller_email = $this->request->getPost('email');
                $seller_password = $this->request->getPost('password');
                $country_code = $this->request->getPost('country_code');
                $userData = [
                    'seller_name' => $seller_name,
                    'seller_phone' => $seller_phone,
                    'seller_email' => $seller_email,
                    'seller_password' => Validation::make($seller_password),
                    'country_code' => $country_code,
                    'uniid' => $uniid,
                    'activation_date' => date("Y-m-d h:i:s"),
                    // 'have_shop'  => 1

                ];
                
                $query = $model->insert($userData);
                if ($query) {
                    $shop = new Shop_Model(); 
                    $shopName = $this->request->getPost('shop_name');
                    $address = $this->request->getPost('address');
                    // $id = $query ;

                    $shopData = [
                        'shop_name' => $shopName,
                        'address' => $address,
                        'user_id' => $query                 
                    ];
                    $query2 = $shop->insert($shopData);
                    if($query2){
                        $data['title'] = 'Registration Seller';
                        //redirect to login page and show that the new seller account was created.
                        $to = $this->request->getPost('email');
                        $subject = 'Account Activation Link ';
                        $message = 'Hi '.$this->request->getPost('fullname').",<br><br>Thanks for registering at our website. Your account has been created "
                                . "successfully. Please click the link below to activate your account<br><br>"
                                . "<a href='". base_url()."/registration_seller/activate/".$uniid."' target='_blank'>Activate Now</a><br><br>Team,<br>Subeza";
    
                        // die('dasd');
                        $this->email->setTo($to);
                        $this->email->setFrom('system@subeza.com', 'Subeza');
                        // $email->setBCC('somebcc@mail.com');
                        // $email->setCC('somecc@mail.com');
                        $this->email->setSubject($subject);
                        $this->email->setMessage($message);
                        // $filepath = 'public/assets/img/logo-3.png';
                        // $this->email->attach($filepath);
                        if ($this->email->send()) {
                            $session = session();
                            $session->setFlashdata('successfull', 'Successfully created your account. Please activate your account.');
                            return redirect()->to('/seller/login');
                            // die('sadasd');
                        } else {
                            // $data = $this->email->printDebugger(['headers']);
                            // print_r($data);
    
                            $this->session->setTempdata('error', 'Account created successfully. Sorry! unable to send activation link. Contact Admin');
                            return redirect()->to(current_url());
                        }
                    } 
                    // --------------------- if query 2 ended -----------------
                    else{ 
                        // error occured 
                        $data['validation'] = $this->validator;
                        $data['title'] = 'Seller Registration';
                        return redirect()->to('seller/login');
                    }
                    // --------------------- else query 2 ended -----------------

                } else { 
                    //show error message that the data was not stored, 
                    $data['title'] = 'Seller Registration';
                    $data['validation'] = $this->validator;
                    return redirect()->back();
                }
            } 
            else 
            { 

                $data['title'] = 'Seller Registration';
                $data['validation'] = $this->validator; 
                return view('create', $data);
               }

            }
        }
        
     

    public function activate($uniid=null)
    {
        $model = new Seller_Model();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
        $data=[];
        if(!empty($uniid))
        {
            $userdata = $model->verifyUniid($uniid);
            // print_r($userdata);
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
                            $data['success'] = 'Account Activated successfully. Close the tab and return to login page.';
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
        // die('Activate');
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
            return true;
        }
        else
        {
            return false;
        }
    }
}