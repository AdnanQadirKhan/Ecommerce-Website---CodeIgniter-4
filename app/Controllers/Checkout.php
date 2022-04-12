<?php
namespace App\Controllers;

use App\Models\Contact_Model;
use App\Models\Logos_Model;
use App\Models\Admin_Model;
use App\Models\Footer_Model;
use App\Models\Seller_Products_Model; 
use App\Models\Links_Model; 
use App\Models\Customer_Model; 
use App\Models\Seller_Model; 
use App\Models\Orders_Model; 
use App\Models\Order_Details_Model; 
use CodeIgniter\Controller; 
use App\Models\Brands_Model; 

class Checkout extends BaseController
{ 
    public function index()
    { 
        $data = [];
        $data['title'] = "Checkout";

        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();  

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        $data['cart'] = $this->cart->contents();
        $data['cart_total'] = $this->cart->total();
        // dd($data['cart']);

        return view('checkout',$data);
    }
    public function updateDeliveryDetails(){
        if(!session('isLoggedIn')){
            return redirect()->to('./');
        }else{
            if(session('type')=='customer'){
                $id = session('id');
                $email = $this->request->getPost('email');

                $cust = new Customer_Model();
                $userdata = $cust->verifyEmail($email);

                $status = $cust->find($id);
                if(!$status){
                    return redirect()->to('./');
                }else{
                    $name = $this->request->getPost('name');
                   $total = !empty($this->cart->total()) ? $this->cart->total() : '';

                    
                    $email = session('email');
                    $phone = $this->request->getPost('phone');
                    $address = $this->request->getPost('address');
                    
                    $total_prouducts = count($this->cart->contents());
                   
                    $cart_items1 = $this->cart->contents();
                    foreach($cart_items1 as $item1){
                        $p_id = $item1['id'];
                        break;
                    } 
                    $produ = new Seller_Products_Model();
                    $info = $produ->where('prod_id',$p_id)->first();
                    $s_id = $info['user_id'];
                    
                    $seller = new Seller_Model();
                    $seller_email = $seller->where('seller_id',$s_id)->first();
                    $s_email = $seller_email['seller_email'];
                    $order = new Orders_Model();
                    $order_details = new Order_Details_Model();
                    $newData = [
                        'order_addr' => $address,
                        'order_total' => $total,
                        'num_of_products' => $total_prouducts,
                        'cust_id' => $id,
                        'seller_id' => $s_id,
                        'phone' => $phone,


                    ]; 
                    
                    $order = $order->insert($newData);
                    if(!empty($order)){

                        $cart_items = $this->cart->contents();
                        foreach($cart_items as $item){

                            $order_details_array = [
                            'cust_id' => $id,
                            'prod_id'=> $item['id'],
                            'order_id'=> $order,
                            'price' => $item['price'],
                            'qty' => $item['qty'],
                            ];
                            $order_details->insert($order_details_array);
                        }
                        if($order_details){
                           
                        $to = $email;
                        $to_seller=$s_email;
                        $subject = 'Order Placed!';
                        // return view('email_template.php',$cart_items);
                        $message = 'Hi! An order has been placed. <br><br>'
                            .'---------------------- Order Details ----------------------<br>'
                            .'Customer Name: '.$userdata['cust_name'].'<br>'
                            .'Order ID: '.$order.'<br>'
                            .'Address: '.$newData['order_addr'].'<br>'
                            .'Phone: '.$newData['phone'].'<br>'
                            .'Quantity: '.$item['qty'].'<br>'
                            .'Price: '.$item['price'].'<br>'
                            .'------------------------------------------------------------<br>'
                            . 'Thanks,<br>Team Subeza :)';
                        $email = \Config\Services::email();
                        $email->setTo([$to,$to_seller]);
                        $email->setFrom('system@subeza.com', 'Subeza');
                        $email->setSubject($subject);
                        $email->setMessage($message);
                        $email->send();
                        }
                        else{
                            $this->session->setTempdata('error', 'Sorry! Unable to send email. try again', 3);
                        return redirect()->to(current_url());
                        }
                       $this->cart->destroy();
                       return redirect()->to(base_url().'/order_success');
                    }
                    
                }
                }
        }

    }
    function orderSuccess(){
        $data = [];
        $data['title'] = "Checkout";

        $contact = new Contact_Model();
        $logo = new Logos_Model();
        $Footer = new Footer_Model();
        $link = new Links_Model();  

        $data['link'] = $link->first();
        $data['footer'] = $Footer->first();
        $data['contact'] = $contact->first();
        $data['logo'] = $logo->first();
        return view('success',$data);
    }
}