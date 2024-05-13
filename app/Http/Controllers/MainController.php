<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
     return view('Frontend.index');
    }
    public function aboutus()
    {
     return view('Frontend.aboutus');
    }
    public function products()
    {
     return view('Frontend.product');
    }
    public function productsdetails()
    {
     return view('Frontend.product-detail');
    }
    public function blogs()
    {
     return view('Frontend.blogs');
    }
    public function blogdetails()
    {
     return view('Frontend.blog-details');
    }
    public function contact()
    {
     return view('Frontend.Contact');
    }
    
}
