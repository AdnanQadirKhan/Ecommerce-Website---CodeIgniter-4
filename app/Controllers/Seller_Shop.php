<?php

namespace App\Controllers;

use App\Models\Shop_Model;
use App\Models\Contact_Model;
use App\Models\Footer_Model;
use App\Models\Links_Model;
use App\Models\Logos_Model;

class Seller_Shop extends BaseController
{
            
    public function index(){
        $model = new Shop_Model();
        $data = [];
        $data['title'] = 'Shop Setting';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        
        $data['shop'] = $model->where('user_id',session('id'))->first();
        
        return view('panel/seller/shops',$data);
    }
    public function updateInfo()
    {
        $data['title'] = 'Shop Setting';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        if ($this->request->getMethod() == 'post') {
            $model = new Shop_Model();

            $name = $this->request->getPost('name');
            $phone = $this->request->getPost('phone');
            $addr = $this->request->getPost('address');
            $model->set('shop_name',$name);
            $model->set('shop_phone',$phone);
            $model->set('address',$addr);

            $model->where('user_id',session('id'));
            $query = $model->update();  
            $data['shop'] = $model->where('user_id',session('id'))->first();
            if($query){  
                return view('panel/seller/shops',$data);
    
            }else{
                return redirect()->back();
            }

        }else{
            return redirect()->back();
        }

    }
    public function shopLogoUpdate()
    { 
        $data['title'] = 'Shop Setting';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        $validationRule = [
            'logo' => [ 
                'rules'=>[
                    'uploaded[logo]', 
                    ]
                ],
            ];
            
            if (! $this->validate($validationRule)) 
            { 
                $data['title'] = "Seller Shop";
                session()->setFlasData('update-info-failed','Shop logo was not updated, Try Again!');
                return view('panel/seller/shops',$data);
            }
            
            else{

                if($file = $this->request->getFile('logo')){
                    $id = session('id'); 

                    if($file->isValid() && !$file->hasMoved()){
                        $old_pic = $this->request->getPost('old_logo');

                        $path = 'public/uploads/logos/';
                        if($old_pic!="avatar.jpg"){
                            if(file_exists($path.$old_pic)){
                                unlink($path.$old_pic); 
                            }
                        } 
                        $newName = $file->getRandomName();
                        $file->move($path,$newName);
                        $model = new Shop_Model();
                        // gives UPDATE `mytable` SET `field` = 'field' WHERE `id` = ?
                        $model->set('shop_logo',$newName);
                        
                        $model->where('user_id',$id);
                        $query = $model->update();  
                        if($query){  
                            $data['shop'] = $model->where('user_id',session('id'))->first();
                            $data['link'] = $link->first();
                            $data['footer'] = $Footer->first();
                            $data['contact'] = $contact->first();
                            $data['logo'] = $logo->first();
                            session()->setFlashdata('update-info', 'Shop logo successfully updated.');
                            return view('panel/seller/shops',$data); 
                        }else{
                            return redirect()->back();
                        }
                    }else{
                        return redirect()->back();
                    }
                }else{

                    return redirect()->back();
                }
        }
    }
    public function shopBannerUpdate()
    { 
        $model = new Shop_Model();
        $data['title'] = 'Shop Setting';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        $validationRule = [
            'banner' => [ 
                'rules'=>[
                    'uploaded[banner]', 
                    ]
                ],
            ];
            if (! $this->validate($validationRule)) 
            {    
                $data['link'] = $link->first();
                $data['footer'] = $Footer->first();
                $data['contact'] = $contact->first();
                $data['logo'] = $logo->first();
                $data['shop'] = $model->where('user_id',session('id'))->first();

                session()->setFlasData('update-info-failed','Shop banner was not updated, Try Again!');
                return view('panel/seller/shops',$data);

            }
            
            else{ 

                if($file = $this->request->getFile('banner')){
                    $id = session('id'); 

                    if($file->isValid() && !$file->hasMoved()){
                        $old_pic = $this->request->getPost('old_banner');

                        $path = 'public/uploads/banners/';
                        if($old_pic!="banner.jpg"){
                            if(file_exists($path.$old_pic)){
                                unlink($path.$old_pic); 
                            }
                        } 
                        $newName = $file->getRandomName();
                        $file->move($path,$newName);
                        $model = new Shop_Model();
                        // gives UPDATE `mytable` SET `field` = 'field' WHERE `id` = ?
                        $model->set('shop_banner',$newName); 
                        
                        $model->where('user_id',$id);
                        $query = $model->update();  
                        if($query){  
                            $data['shop'] = $model->where('user_id',session('id'))->first();
                            $data['link'] = $link->first();
                            $data['footer'] = $Footer->first();
                            $data['contact'] = $contact->first();
                            $data['logo'] = $logo->first();
                            session()->setFlashdata('update-info', 'Shop banner successfully updated.');
                            return view('panel/seller/shops',$data); 
                        }else{
                            return redirect()->back();
                        }
                    }else{
                        return redirect()->back();
                    }
                }else{

                    return redirect()->back();
                }
        }
    }
   
}
