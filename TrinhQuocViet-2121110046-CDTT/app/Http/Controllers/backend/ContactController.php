<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $list = Contact::where('status', '!=', 0)->orderBy('created_at', 'desc')->get();
        return view("backend.contact.index", compact("list"));
    }
}
