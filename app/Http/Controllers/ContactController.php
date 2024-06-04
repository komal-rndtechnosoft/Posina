<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Contactus;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index()
    {
        $contacts=Contact::all();
        return view('admin.Contact.list',compact('contacts'));
    }
    public function contact()
    {
        $contacts=Contactus::all();
        return view('admin.Contact.show',compact('contacts'));
    }
    
   
}
