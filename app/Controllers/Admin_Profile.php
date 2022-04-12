<?php
 namespace App\Controllers;
use App\Libraries\Validation; // Import library
 use App\Models\Admin_Model;

 class Admin_Profile extends BaseController{
    public function index(){
        if(session('type')=='admin'){
        $data = [];
        $data['title'] = 'Profile';
        return view('admin/profile',$data);
    }else{
        return redirect()->to('./');
    }
    }

    private function failMesg(){
        $data['validation'] = $this->validator; 
        $data['title'] = 'Profile';
        session()->setFlashdata('failed', 'Profile picture not updated.');
        return view('admin/profile',$data); 

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
                $model = new Admin_Model(); 
                $admin_info = $model -> where ('admin_id', session('id'))->first();
                if(password_verify($this->request->getPost('old_password'),$admin_info['admin_password'])){
                    $Admin_name = $this->request->getPost('name'); 
                    $Admin_pass = Validation::make($this->request->getPost('new_password')); 
                    
                    $model->set('admin_name',$Admin_name);
                    $model->set('admin_password',$Admin_pass);
                    $id = session('id'); 
                    $model->where('admin_id',$id);
                    $query = $model->update();
                                    if ($query) {             
                        session()->set('name',$Admin_name);       
                        session()->setFlashdata('update-info', 'Successfully updated your info.');
                        return redirect()->to('admin/profile');

                        } else {
                            //show error message that the data was not stored, 
                            session()->setFlashdata('update-info-failed', 'Error occured while updating your info.');
                            $data['validation'] = $this->validator;
                            echo view('admin/profile', $data);
                        }
                }else{
                    session()->setFlashdata('invalid', 'Enter your correct password.');
                    $data['validation'] = $this->validator;
                    echo view('admin/profile', $data);
                }
            

            } else {
                $data['validation'] = $this->validator;
                return view('Admin/profile',$data);

            }
        }
    }
    public function updatePic(){;
        $validationRule = [
            'profile_photo' => [ 
                'rules'=>[
                    'uploaded[profile_photo]', 
                    ]
                ],
            ];
            
            if (! $this->validate($validationRule)) 
            { 
                $this->failMesg();
            }
            
            else{
                if($file = $this->request->getFile('profile_photo')){
                    $id = session('id'); 
                    if($file->isValid() && !$file->hasMoved()){
                        $old_pic = session('pic');
                        $path = './public/uploads/profile/';
                        if($old_pic!="avatar.jpg"){
                            if(file_exists($path.$old_pic)){
                                unlink($path.$old_pic); 
                            }
                        } 
                        $newName = $file->getRandomName();
                        $file->move($path,$newName);
                        $admin = new Admin_Model();
                        // gives UPDATE `mytable` SET `field` = 'field' WHERE `id` = ?
                        $admin->set('admin_pic',$newName);
                        
                        $admin->where('admin_id',$id);
                        $query = $admin->update(); 
                        // die('string');
                    if($query){ 
                        session()->set('pic',$newName);
                        session()->setFlashdata('uploaded', 'Profile picture successfully updated.');
                        return redirect()->to('admin/profile'); 
              
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


 }



?>