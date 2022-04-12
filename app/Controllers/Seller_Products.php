<?php

namespace App\Controllers;

use App\Models\Seller_Products_Model;
use App\Models\Categories_Model;
use App\Models\Sub_Categories_Model;
use App\Models\Brands_Model;
use App\Models\Add_Product_Model;
use App\Models\Product_Colors_Model;
use App\Models\Contact_Model;
use App\Models\Footer_Model;
use App\Models\Links_Model;
use App\Models\Logos_Model;


class Seller_Products extends BaseController
{

    
    public function index()
    {
        helper('form');
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $data['title'] = 'Products';
        $user_id = session('id');
        if ($user_id) {
            $products = new Seller_Products_Model();
            $products->where('user_id', $user_id);
            $data['products'] = $products->select()->join('categories','products.cat_id=categories.cat_id')->paginate();
            $data['pager'] = $products->pager;
            return view('panel/seller/products', $data);
        } else {
            return view('seller/login');
        }
    }

    public function addProductView()
    {

        $categ = new Categories_Model();
        $brand = new Brands_Model();
        $sub = new Sub_Categories_Model();
        $color = new Product_Colors_Model();
        $data['cat'] = $categ->findAll();
        $data['brands'] = $brand->findAll();
        $data['color'] = $color->findAll();
        $data['title'] = 'Add Product';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        // $data['categories'] = $categ->findAll();
        // $data['subcategories'] = $sub->findAll();

        $data['categories'] = $categ->findAll();
        foreach($data['categories'] as $key =>$val){
            $subcats = $sub->where('cat_id',$val['cat_id'])->findAll();
            if($subcats){
                $data['sub_cat'][$val['cat_id']] = $subcats;
            } 
        }
        
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();

        return view('panel/seller/add_product', $data);
    }
    public function edit_product($id)
    {
        $categ = new Categories_Model();
        $brand = new Brands_Model();
        $sub = new Sub_Categories_Model();
        $color = new Product_Colors_Model();
        $data['cat'] = $categ->findAll();
        $data['brands'] = $brand->findAll();
        $data['color'] = $color->findAll();
        $data['title'] = 'Edit Product';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
         $user_id = session('id');
         if($user_id){
        $data['categories'] = $categ->findAll();
        foreach ($data['categories'] as $key => $val) {
            $subcats = $sub->where('cat_id', $val['cat_id'])->findAll();
            if ($subcats) {
                $data['sub_cat'][$val['cat_id']] = $subcats;
            }
        }
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $products = new Seller_Products_Model();
        $data['products'] = $products->select()->join('categories','products.cat_id=categories.cat_id');
        $data['products'] = $products->find($id);
        // $data['sub_categories'] = $sub->findAll();
        // $data['sub_categories'] = $categ->select()->where('cat_id',$sub['cat_id']);
        // $data['categories'] = $categ->findAll();
        return view('panel/seller/edit_product', $data);
             
         }
         else{
             return view('panel/seller/login_form');
         }
    }
    public function update_product($id)
    {
        $categ = new Categories_Model();
        $brand = new Brands_Model();
        $sub = new Sub_Categories_Model();
        $color = new Product_Colors_Model();
        $data['cat'] = $categ->findAll();
        $data['brands'] = $brand->findAll();
        $data['color'] = $color->findAll();
        $data['title'] = 'Add Product';
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();
        $data['categories'] = $categ->findAll();
        foreach ($data['categories'] as $key => $val) {
            $subcats = $sub->where('cat_id', $val['cat_id'])->findAll();
            if ($subcats) {
                $data['sub_cat'][$val['cat_id']] = $subcats;
            }
        }
        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        if ($this->request->getMethod() == 'post') {

            //validation rules
            $rules = [
                'prod_name' => [
                    'rules'  => 'required|min_length[5]|max_length[100]|',
                    'errors' =>
                    [
                        'required' => 'full name is required',
                        'min_length' => 'Product name must have atleast 5 character in length',
                        'max_length' => 'Product cannot have more than 100 character in length',
                    ]
                ],

                'prod_qty' => [
                    'rules'  => 'required|min_length[1]|max_length[500]',
                    'errors' => [
                        'required'   =>   'Quantity is required',
                        'min_length' =>   'minimum quanity is 1.',
                        'max_length' =>   'maximum quanity is 500.',
                    ]
                ],
                // 'gallery_photo' => [
                //     'label' => 'Image File',
                //     'rules' => 'uploaded[gallery_photo]'
                //         . '|is_image[gallery_photo]'
                //         . '|ext_in[gallery_photo,gallery_photo/jpg,gallery_photo/jpeg,gallery_photo/gif,gallery_photo/png,gallery_photo/webp]'
                //         . '|max_size[gallery_photo,100]'
                //         . '|max_dims[gallery_photo,2048,768]',
                // ]
                // 'prod_tags' => [
                //     'rules'  => 'required|min_length[3]|max_length[25]',
                //     'errors' => [
                //         'required'  => 'Tag(s) is required',
                //         'min_length' => 'Tag must have atleast 3 character in length',
                //         'max_length' => 'Tag can have maximun 25 character in length',
                //     ]
                // ]

            ];

            if ($this->validate($rules)) {
        $products = new Seller_Products_Model();


        $prod_model = new Seller_Products_Model();
        $product_name = $this->request->getPost('prod_name');
        $old_price = $this->request->getPost('old_price');
        $new_price = $this->request->getPost('new_price');
        $product_cat = $this->request->getPost('categ_id');
        $product_brand = $this->request->getPost('brand_id');
        $product_qty = $this->request->getPost('prod_qty');
        $product_tags = $this->request->getPost('prod_tags[]');
        $product_video = $this->request->getPost('video_link');
        $product_desc = $this->request->getPost('prod_description');
        $user_id = session('id');
        // echo $user_id;
        // $file = $this->request->getFiles();
        // $p = $file['gallery_photo'][0]->getName();

        $data = [
            'prod_name' => $product_name,
            'cat_id' => $product_cat,
            'brand_id' => $product_brand,
            'prod_qty' => $product_qty,
            'prod_tags' => $product_tags,
            'prod_video' => $product_video,
            'prod_description' => $product_desc,
            'old_price' => $old_price,
            'new_price' => $new_price,
            'user_id' => $user_id

        ];
        $query = $prod_model->update($id, $data);
        if ($query) {
            // session()->set('prod_name', $product_name);
            // session()->set('prod_qty', $product_qty);
            // session()->set('prod_video', $product_video);
            // session()->set('old_price', $old_price);
            // session()->set('new_price', $new_price);
            session()->setFlashdata('update-product', 'Successfully updated your product.');
            return redirect()->to('seller/products');
        } else {
            //show error message that the data was not stored, 
            session()->setFlashdata('update-product-failed', 'Error occured while updating your product.');
            $data['validation'] = $this->validator;
            echo view('seller/products', $data);
        }}
            else{
                 $data['cat'] = $categ->findAll();
                $data['link'] = $link->first();
                $data['footer'] = $Footer->first();
                $data['contact'] = $contact->first();
                $data['logo'] = $logo->first();
                $data['brands'] = $brand->findAll();
                $data['title'] = "Add Products";
                $data['validation'] = $this->validator;
                echo view('/panel/seller/edit_product', $data);
            }
        }
    }
    public function add_product()
    {
        // echo 'add product method';
        helper(['form', 'url']);
        $id = session('id');
        $categ = new Categories_Model();
        $brand = new Brands_Model();
        $data['cat'] = $categ->findAll();
        $data['brands'] = $brand->findAll();
        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();


        if ($this->request->getMethod() == 'post') {

            //validation rules
            $rules = [
                'prod_name' => [
                    'rules'  => 'required|min_length[5]|max_length[100]|',
                    'errors' =>
                    [
                        'required' => 'full name is required',
                        'min_length' => 'Product name must have atleast 5 character in length',
                        'max_length' => 'Product cannot have more than 100 character in length',
                    ]
                ],

                'prod_qty' => [
                    'rules'  => 'required|min_length[1]|max_length[500]',
                    'errors' => [
                        'required'   =>   'Quantity is required',
                        'min_length' =>   'minimum quanity is 1.',
                        'max_length' =>   'maximum quanity is 500.',
                    ]
                ],
                // 'gallery_photo' => [
                //     'label' => 'Image File',
                //     'rules' => 'uploaded[gallery_photo]'
                //         . '|is_image[gallery_photo]'
                //         . '|ext_in[gallery_photo,gallery_photo/jpg,gallery_photo/jpeg,gallery_photo/gif,gallery_photo/png,gallery_photo/webp]'
                //         . '|max_size[gallery_photo,100]'
                //         . '|max_dims[gallery_photo,2048,768]',
                // ]
                // 'prod_tags' => [
                //     'rules'  => 'required|min_length[3]|max_length[25]',
                //     'errors' => [
                //         'required'  => 'Tag(s) is required',
                //         'min_length' => 'Tag must have atleast 3 character in length',
                //         'max_length' => 'Tag can have maximun 25 character in length',
                //     ]
                // ]

            ];

            if ($this->validate($rules)) {
                $prod_model = new Seller_Products_Model();
                $product_name = $this->request->getPost('prod_name');
                $old_price = $this->request->getPost('old_price');
                $new_price = $this->request->getPost('new_price');
                $sub_cat = $this->request->getPost('sub_category_id');
                $product_cat = $this->request->getPost('categ_id');
                $product_brand = $this->request->getPost('brand_id');
                $product_qty = $this->request->getPost('prod_qty');
                $product_tags = $this->request->getPost('prod_tags[]');
                $product_video = $this->request->getPost('video_link');
                $product_desc = $this->request->getPost('prod_description');

                $user_id = session('id');
                // echo $user_id;
                $file = $this->request->getFiles();
                $p = $file['gallery_photo'][0]->getName();

                $data = [
                    'prod_name' => $product_name,
                    'cat_id' => $product_cat,
                    'sub_cat_id' => $sub_cat,
                    'brand_id' => $product_brand,
                    'prod_qty' => $product_qty,
                    'prod_tags' => $product_tags,
                    'prod_video' => $product_video,
                    'prod_description' => $product_desc,
                    'old_price' => $old_price,
                    'new_price' => $new_price,
                    'user_id' => $user_id

                ];
              
                $prod_model->set('prod_img', $p);
                $prod_model->where('prod_id', $id);
                $query = $prod_model->insert($data);
                if ($query) {
                    $add_prod_model = new Add_Product_Model;
                    $files = $this->request->getFiles();
                    foreach ($files['gallery_photo'] as $img) {
                        if ($img->isValid() && !$img->hasMoved()) {
                            $newName = $img->getName();
                            $img->move(FCPATH . 'public/uploads/products/',$newName);
                        }
                        $productData = [
                            'img_name' => $newName,
                            'prod_id'  => $query
                        ];

                        $query2 = $add_prod_model->insert($productData);
                    };

                    if ($query2) {
                        $data['link'] = $link->first();
                        $data['footer'] = $Footer->first();
                        $data['contact'] = $contact->first();
                        $data['logo'] = $logo->first();
                        $data['brands'] = $brand->findAll();
                        $data['cat'] = $categ->findAll();
                        $data['title'] = "Add Products";
                        session()->setFlashdata('successfull', 'Successfully added product!');
                        return redirect()->to('seller/add-product');
                    }
                } else {
                    $data['cat'] = $categ->findAll();
                    $data['link'] = $link->first();
                    $data['footer'] = $Footer->first();
                    $data['contact'] = $contact->first();
                    $data['logo'] = $logo->first();
                    $data['brands'] = $brand->findAll();
                    $data['title'] = "Add Products";
                    $data['validation'] = $this->validator;
                    echo view('panel/seller/add_product', $data);
                }
            } else {
                $data['cat'] = $categ->findAll();
                $data['link'] = $link->first();
                $data['footer'] = $Footer->first();
                $data['contact'] = $contact->first();
                $data['logo'] = $logo->first();
                $data['brands'] = $brand->findAll();
                $data['title'] = "Add Products";
                $data['validation'] = $this->validator;
                echo view('/panel/seller/add_product', $data);
            }
        }
    }
    // public function delete_product($id)
    // {
    //     $product = new Seller_Products_Model();
    //     $imgs = new Add_Product_Model;
    //     if ($id) {
    //         $info = $product->find($id);
    //         $prod_imgs = $imgs->where('prod_id', $info['prod_id'])->findAll();
    //         if (!empty($info['prod_img'])) {
        public function delete_product($id){
            $product = new Seller_Products_Model();
            $query = $product->delete($id);
            if($query){
                session()->setFlashdata('delete-product', 'Successfully deleted your product.');
                return redirect()->to('seller/products');
            }
            else{
                session()->setFlashdata('delete-product-failed', 'Error occured while deleting your product.');
                return redirect()->to('seller/products');
    
            }
    
        }
          //             unlink('public/uploads/products/' . $info['prod_img']);
    //         }
    //         // Remove files from the server  
    //         if (!empty($prod_imgs['img_name'])) {
    //             foreach ($prod_imgs['img_name'] as $img) {
    //                 unlink('public/uploads/products/' . $img['img_name']);
    //             }
    //         }

    //          $query = $product->delete($id);
    //         $imgs->where('prod_id', $info['prod_id'])->delete();
    //          $query = $product->delete($id);
    //          if ($query) {
    //              session()->setFlashdata('delete-product', 'Successfully deleted your product.');
    //              return redirect()->to('seller/products');
    //          } else {
    //              session()->setFlashdata('delete-product-failed', 'Error occured while deleting your product.');
    //              return redirect()->to('seller/products');
    //          }
            
    //     }

 


 

    // }

    public function subcategories()
    {
        $cat_id = $this->request->getPost('category_id');
        if(!empty($cat_id)){
            $cat = new Categories_Model(); 
            $sub = new Sub_Categories_Model(); 
            $subcategories = $sub->where('cat_id',$cat_id)->findAll();

            echo json_encode($subcategories);
        }
    }
}
