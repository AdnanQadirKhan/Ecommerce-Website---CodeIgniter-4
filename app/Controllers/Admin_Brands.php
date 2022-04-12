<?php
namespace App\Controllers;


use CodeIgniter\Controller; 
use App\Models\Brands_Model; 

class Admin_Brands extends BaseController
{ 
    public function index()
    {  
        $data = []; 
        $data['title'] = 'All Brands';
if(session('type')=='admin'){
        $b = new Brands_Model(); 
        $data['brands'] = $b->findAll();
        $data = [
            'brands'=> $b->paginate(6),
            'pager' =>$b->pager,
        ];
        return view('admin/brands',$data);
    }else{
        return redirect()->to('./');
    }
    }
    public function deleteBrand($id = null)
    {    $b = new Brands_Model(); 
        $info = $b -> where ('brand_id', $id)->first();
         
        $old_pic = $info['brand_pic'];
        $path = './public/uploads/brands/';
        if(file_exists($path.$old_pic)){
            unlink($path.$old_pic); 
        }
                        
        $result = $b->delete(['brand_id'=> $id]);
        if($result){
            $data = [];
            session()->setFlashdata('msg','Successfully deleted your record');
            $data['brands'] = $b->findAll();
           $data = [
            'brands'=> $b->paginate(6),
            'pager' =>$b->pager,
        ];
            return view('admin/brands',$data);
        } 
        return redirect()->back();

    }
    public function saveBrands(){
        helper(['form', 'url']);
        $data = []; 

        if ($this->request->getMethod() == 'post') 
        {
            // validation
            $data = []; 
            $b = new Brands_Model();  
            
            $rules = [ 
                'brandName' => [
                    'rules'  => 'required|min_length[2]|max_length[50]|is_unique[brands.brand_name]',
                    'errors' => [
                        'required' => 'Brand name is required', 
                        'min_length' => 'Brand name must be 5 characters', 
                        'is_unique' => 'Brand name is already taken'
                    ]
                ],
                'logo' => [ 
                    'rules'=>[
                        'uploaded[logo]', 
                    ]
                ],

            ];
            if ($this->validate($rules)) { 

                $name = $this->request->getPost('brandName');
                if($file = $this->request->getFile('logo')){
                    if($file->isValid() && !$file->hasMoved()){ 
                        $path = './public/uploads/brands/'; 
                        $newName = $file->getRandomName();
                        $file->move($path,$newName); 
                        $newData = [
                            
                            'brand_name'  => $name, 
                            'brand_pic'   => $newName, 

                        ];
                        $query = $b->insert($newData);
                        session()->setFlashdata('msg','Successfully saved you brand');
                        $data['brands'] = $b->findAll();
         
                        return redirect()->to('admin/brands');

                    }
                }

 
            
            
            }else{
                $data['brands'] = $b->findAll();
                $data['validation'] = $this->validator; 
                return view('admin/brands',$data);
            } 
        }
    }
    
    
}
?>