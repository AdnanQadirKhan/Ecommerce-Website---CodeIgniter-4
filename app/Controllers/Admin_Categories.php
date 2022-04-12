<?php
namespace App\Controllers;


use CodeIgniter\Controller; 
use App\Models\Categories_Model;
use App\Models\Sub_Categories_Model;

class Admin_Categories extends BaseController
{ 
    public function index()
    { 
        $data = []; 
        $cat = new Categories_Model(); 
        if(session('type')=='admin'){ 
        $data['categories'] = $cat->findAll();
        $data = [
            'categories'=> $cat->paginate(6),
            'pager' =>$cat->pager,
        ];
        return view('admin/categories',$data);
    }else{
        return redirect()->to('./');
    }
    }
    public function addCategoriesView()
    {
        $data = [];
        $data['title'] = 'All Categories';
        $cat = new Categories_Model(); 
        $data['categories'] = $cat->findAll();
        
        return view('admin/add_categories',$data);
    }
    public function addSubCategoriesView()
    {
        $data['title'] = 'Sub Categories';
        $data = [];
        $cat = new Sub_Categories_Model(); 
        $data['categories'] = $cat->findAll();
        
        return view('admin/sub_categories',$data);
    }
    public function deleteCategory($id = null)
    {  
        $cat = new Categories_Model(); 
        $result = $cat->delete(['cat_id'=> $id]);
        if($result){
            $data = [];
            session()->setFlashdata('msg','Successfully deleted your record');
            return redirect()->back();
        } 
        return redirect()->back();

    }
    public function deleteSubCategory($id = null)
    {  
        $cat = new Sub_Categories_Model(); 
        $info = $cat -> where ('sub_cat_id', $id)->first();
        $old_pic = $info['cat_pic'];
        $path = './public/uploads/banners/';
        if(file_exists($path.$old_pic)){
            unlink($path.$old_pic); 
        }
        
        $result = $cat->delete(['sub_cat_id'=> $id]);
        if($result){
            $data = [];
            session()->setFlashdata('msg','Successfully deleted your record');
            return redirect()->back();
        } 
        return redirect()->back();

    }
    public function addCategories() 
    {
        helper(['form', 'uri']); 
        $cat = new Categories_Model(); 
        $data['categories'] = $cat->findAll(); 
        if ($this->request->getMethod() == 'post') 
        {
            // validation
            $rules = [
                'cat_name' => [
                    'rules'  => 'required|min_length[5]|max_length[100]|is_unique[categories.cat_name]',
                    'errors' => [
                        'required' => 'Category name is required',
                        'min_length' => 'Category name at least 5 character',
                        'max_length' => 'Category name not greater than 100 character',
                        'is_unique' => 'Category name already taken',
                    ]
                    
                ],
                'cat_banner' => [ 
                    'rules'=>[
                        'uploaded[cat_banner]', 
                    ]
                ],
                'parent_id' => [
                    'rules'  => 'required',
                    'errors' => 'Your phone number is required'
                ] 

            ]; 
            if ($this->validate($rules)) {
                $model = new Categories_Model(); 

                $name = $this->request->getPost('cat_name');
                $parent_id = $this->request->getPost('parent_id'); 
                if($file = $this->request->getFile('cat_banner')){
                    if($file->isValid() && !$file->hasMoved()){ 
                        $path = './public/uploads/banners/'; 
                        $newName = $file->getRandomName();
                        $file->move($path,$newName); 
                        if($parent_id == 0){ // no parent category
                            $newData = [
                            
                                'cat_name'  => $name, 
                                'cat_pic'   => $newName, // cat banner
                                'parent_id' => $parent_id, // if 0 it mean no parent 
    
                            ];
                            $query = $model->insert($newData);
                            session()->setFlashdata('msg','Successfully saved you category');
                            return redirect()->back();
                        }else{  // parent category
                            $sub_cat = new Sub_Categories_Model(); 
                            $model->set('have_sub_cat' , 1);
                            $model->where('cat_id',$parent_id);
                            $res = $model->update();
                            if($res){
                                $newData = [ 
                                    'sub_cat_name'  => $name, 
                                    'cat_pic'   => $newName, // cat banner 
                                    'cat_id'    => $parent_id, 

                                ];
                                $query = $sub_cat->insert($newData);
                                session()->setFlashdata('msg','Successfully saved you sub category');
                                return redirect()->to('admin/add-categories');
                                // return view('admin/add_categories',$data);
                            }else{
                                session()->setFlashdata('msg','Unknown error occured while saving category');
                                return redirect()->to('admin/add-categories');
                            }

                        }

                    }else{
                        return redirect()->back();
                    }
                }




            }else{
                $data['validation'] = $this->validator; 
                return view('admin/add_categories',$data);

            }

              
        }
        
    }

}
?>