<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $list = User::where('status', '!=', 0)->orderBy('created_at', 'desc')->get();
        return view("backend.customer.index", compact("list"));
    }
}
