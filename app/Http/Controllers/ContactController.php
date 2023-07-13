<?php

namespace App\Http\Controllers;

use App\Models\Abk;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    
}