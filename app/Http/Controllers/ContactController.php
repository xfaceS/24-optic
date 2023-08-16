<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        $contact = Contact::first();
        return view('pages.contact',compact('contact'));
    }
}
