<?php

namespace App\Controllers;

use App\Models\Contact_Model;
use App\Models\Logos_Model; 
use App\Models\Links_Model; 
use App\Models\Admin_Model; 
use App\Models\Footer_Model; 

class Website_Setting extends BaseController
{
    public function Website_Setting(){

        $id = session('id'); 
        $a  = new Admin_Model();
        if(!$status){
            return redirect(base_url('./'));
        }else{
            $contact = new Contact_Model();
            $logos = new Logos_Model();
            $footer = new Footer_Model();
            $data['footer'] = $footer->first();


        }
    }

    public function index()
    {
        $c = new Contact_Model();
        $l = new Logos_Model();
        $id = session('id'); 
        $a  = new Admin_Model();
        $status = $a->where('admin_id',$id)->first();
        if(!$status){
            return redirect(base_url('./'));
        }else{
        $data['contacts'] = $c->first();
        $data['logos'] = $l->first();
        return view('admin/header_setting',$data);
        }
    }

    public function updateHeader()
    {
        $id = session('id'); 
        $a  = new Admin_Model();
        $status = $a->where('admin_id',$id)->first();
        if(!$status){ 
            return redirect('./');
        }else{
            $validationRule = [
                'logo' => [ 
                    'rules'=>[
                        'uploaded[logo]', 
                    ]
                ], 
            ];
            
            if (! $this->validate($validationRule)) { 
                $data['validation'] = $this->validator; 
                session()->setFlashdata('failed', 'Header setting not updated.'); 
                return redirect()->back(); 
            }else{
                  
                if($file = $this->request->getFile('logo')){
                    if($file->isValid() && !$file->hasMoved()){
                        $old_pic = $this->request->getPost('old_logo');
                        $path = './public/uploads/logos/';
                         
                            if(file_exists($path.$old_pic)){
                                unlink($path.$old_pic); 
                            }
                         
                        $newName = $file->getRandomName();
                        $file->move($path,$newName);

                        $l = new Logos_Model();
                        $c = new Contact_Model();
                        // gives UPDATE `mytable` SET `field` = 'field' WHERE `id` = ?
                        $l->set('header_logo',$newName); 
                        $query = $l->update(); 

                        if($query){   
                             
                            session()->setFlashdata('pass', 'Header setting successfully updated.');
                            return redirect()->back();
                        }
                        else{
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
    public function footer()
    {
        $c = new Contact_Model();
        $l = new Logos_Model();
        $links = new Links_Model();
        $footer = new Footer_Model();
        $id = session('id'); 
        $a  = new Admin_Model();
        $status = $a->where('admin_id',$id)->first();
        if(!$status){
            return redirect(base_url('./'));
        }else{

        $data['contacts'] = $c->first();
        $data['logos'] = $l->first();
        $data['link'] = $links->first();
        $data['footer'] = $footer->first();
        return view('admin/footer_setting',$data);

        }
    }
    public function updateFooterContact()
    {
         
        $c = new Contact_Model();  
        $id = session('id'); 
        $a  = new Admin_Model();
        $status = $a->where('admin_id',$id)->first();
        if(!$status){
            return redirect(base_url('./'));
        }else{

        $addr  = $this->request->getPost('contact_address');
        $phone  = $this->request->getPost('contact_phone');
        $email  = $this->request->getPost('contact_email');
        $c->set('contact_addr',$addr);
        $c->set('phone',$phone);
        $c->set('contact_email',$email);
        $query = $c->update(); 

        if($query){   
             
            session()->setFlashdata('msg', 'Footer setting successfully updated.');
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }

        return view('admin/footer_setting',$data);

        }
    }
    public function updateFooterLogo()
    {
        $l = new Footer_Model(); 
        $id = session('id'); 
        $a  = new Admin_Model();
        $status = $a->where('admin_id',$id)->first();
        if(!$status){
            return redirect(base_url('./'));
        }else{
            if($file = $this->request->getFile('logo')){
                if($file->isValid() && !$file->hasMoved()){
                    $old_pic = $this->request->getPost('old_logo');
                    $path = './public/uploads/logos/';
                     
                        if(file_exists($path.$old_pic)){
                            unlink($path.$old_pic); 
                        }
                     
                    $newName = $file->getRandomName();
                    $file->move($path,$newName);
                    $desc  = $this->request->getPost('about_us_description');
 
                    // gives UPDATE `mytable` SET `field` = 'field' WHERE `id` = ?
                    $l->set('footer_desc',$desc); 
                    $l->set('footer_logo',$newName); 
                    $query = $l->update(); 

                    if($query){   
                         
                        session()->setFlashdata('set', 'Footer setting successfully updated.');
                        return redirect()->back();
                    }
                    else{
                        return redirect()->back();
                    }
                }else{
                    return redirect()->back();
                }
            }else{
                return redirect()->back();
            }
            
            // return view('admin/header_setting',$data);
        }
    }
    public function updateFooterCopyright()
    {
        $footer = new Footer_Model();
        $link = new Links_Model();
        $id = session('id'); 
        $a  = new Admin_Model();
        $status = $a->where('admin_id',$id)->first();
        if(!$status){
            return redirect(base_url('./'));
        }else{
            
            $txt  = $this->request->getPost('copyright_text');
            $footer->set('copyright_text',$txt);
            $footer->update();

            $fb  = $this->request->getPost('facebook_link');
            $ins  = $this->request->getPost('instagram_link');
            $ut  = $this->request->getPost('youtube_link');
            $link->set('fb',$fb);
            $link->set('insta',$ins);
            $link->set('youtube',$ut);
            $query = $link->update(); 
    
            if($query){   
                 
                session()->setFlashdata('msge', 'Footer setting successfully updated.');
                return redirect()->back();
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function appearance()
    {
        $c = new Contact_Model();
        $l = new Logos_Model();
        $id = session('id'); 
        $a  = new Admin_Model();
        $status = $a->where('admin_id',$id)->first();
        if(!$status){
            return redirect(base_url('./'));
        }else{

        $data['contacts'] = $c->first();
        $data['logos'] = $l->first();
        return view('admin/appearance',$data);

        }
    }
}
?>