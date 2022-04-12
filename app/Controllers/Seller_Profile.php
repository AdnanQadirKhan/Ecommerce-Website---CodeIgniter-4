<?php
 namespace App\Controllers;
use App\Libraries\Validation; // Import library
//  use App\Models\Customer_Model;
 use App\Models\Seller_Model;
 use App\Models\Contact_Model;
use App\Models\Footer_Model;
use App\Models\Links_Model;
use App\Models\Logos_Model;

 class Seller_Profile extends BaseController{
    public function index(){
        $data = [];
        $data['title'] = 'Profile';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        return view('panel/seller/profile',$data);
    }

    public function failMesg(){
        $data['validation'] = $this->validator; 
        session()->setFlashdata('failed', 'Profile picture not updated.');
        // return redirect()->to('seller/profile'); 
        return view('seller/profile',$data); 

    }
    public function updateInfo(){
        helper(['form', 'url']);
        $data = []; 

        if ($this->request->getMethod() == 'post') {
            // validation
            
            $rules = [
                'name' => [
                    'rules'  => 'required|min_length[5]|max_length[40]',
                    'errors' => 'Your full name is required'
                ],
                'phone' => [
                    'rules'  => 'required|min_length[9]|max_length[12]',
                    'errors' => 'Your phone number is required'
                ],
                'address' => [
                    'rules'  => 'required|min_length[5]|max_length[200]',
                    'errors' => 'Your address name is required'
                ],


            ];
            if ($this->validate($rules)) {
                $model = new Seller_Model();

                $seller_name = $this->request->getPost('name');
                $seller_phone = $this->request->getPost('phone');
                $seller_address = $this->request->getPost('address');

                $model->set('seller_name',$seller_name);

                $model->set('seller_phone',$seller_phone);
                $model->set('seller_address',$seller_address);
                $id = session('id'); 
                $model->where('seller_id',$id);

                $query = $model->update();
                if ($query) {             
                        session()->set('phone',$seller_phone);       
                        session()->set('name',$seller_name);       
                        session()->set('address',$seller_address);       
                        session()->setFlashdata('update-info', 'Successfully updated your info.');
                        return redirect()->to('seller/profile');

                } else {
                    //show error message that the data was not stored, 
                    session()->setFlashdata('update-info-failed', 'Error occured while updating your info.');
                    $data['validation'] = $this->validator;
                    echo view('seller/profile', $data);
                }


            } else {
                $data['validation'] = $this->validator;
                return view('panel/seller/profile',$data);

            }
        }
    }
    public function updatePic(){
        $id = session('id'); 
        $validationRule = [
            'profile_photo' => [ 
                'rules'=>[
                    'uploaded[profile_photo]',
                    'mime_in[profile_photo,image/jpg,image/jpeg,image/gif,image/png]',
                ]
            ],
        ];
        
        if (! $this->validate($validationRule)) { 
            $this->failMesg();
        }else{
            if($file = $this->request->getFile('profile_photo')){
                if($file->isValid() && !$file->hasMoved()){
                    $old_pic = session('pic');
                    
                    $path = './public/uploads/profile/';
                    if($old_pic!='avatar.jpg'){
                    if(file_exists($path.$old_pic)){
                        unlink($path.$old_pic); 
                    }}
                    $name = $file->getName();
                    $ext = $file->getClientExtension();
                    $newName = $file->getRandomName();
                    $file->move($path,$newName);
                    $seller = new Seller_Model();
                    // gives UPDATE `mytable` SET `field` = 'field' WHERE `id` = ?
                    $seller->set('seller_pic',$newName);
                    $seller->where('seller_id',$id);
                    $query = $seller->update(); 
                    if($query){ 
                        session()->set('pic',$newName);
                        session()->setFlashdata('uploaded', 'Profile picture successfully updated.');
                        return redirect()->to('seller/profile'); 
                    }else{
                        $this->failMesg();
                    }
                }else{
                    $this->failMesg();
                }
            }else{
                $this->failMesg();
            }
        }
    }
    public function changePassword(){
        helper(['form', 'url']);
        $data = []; 
        $data['title'] = 'Profile';
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
                'old_password' => [
                    'rules'  => 'required|max_length[255]',
                    'errors' => [
                        'required'  => 'Old password is required', 
                    ]
                ],
                'new_password' => [
                    'rules'  => 'required|min_length[8]|max_length[255]',
                    'errors' => [
                        'required'  => 'New password is required',
                        'min_length' => 'Password must have atleast 8 character in length',
                    ]
                ],


            ];

            if ($this->validate($rules)) {
                $model = new Seller_Model(); 
                $admin_info = $model -> where ('seller_id', session('id'))->first();
                if(password_verify($this->request->getPost('old_password'),$admin_info['seller_password'])){
                    $pass = Validation::make($this->request->getPost('new_password')); 
                    
                    $model->set('seller_password',$pass);
                    $id = session('id'); 
                    $model->where('seller_id',$id);
                    $query = $model->update();
                                    if ($query) {             
                        session()->setFlashdata('update-info', 'Successfully updated your password.');
                        return redirect()->to('customer/profile');

                        } else {
                            //show error message that the data was not stored, 
                            session()->setFlashdata('update-info-failed', 'Error occured while updating your info.');
                            $data['validation'] = $this->validator;
                            echo view('panel/seller/profile', $data);
                        }
                }else{
                    session()->setFlashdata('invalid', 'Enter your correct password.');
                    $data['validation'] = $this->validator;
                    echo view('panel/seller/profile', $data);
                }
            

            } else {
                $data['validation'] = $this->validator;
                return view('panel/seller/profile',$data);

            }
        }
    }

 }



?>