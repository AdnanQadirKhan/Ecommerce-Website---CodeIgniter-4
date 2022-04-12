<?php

namespace App\Controllers;

class Seller_Review extends BaseController
{
    public function index()
    {
        $data['title'] = 'Review';
        return view('panel/seller/reviews');
    }
    
}
