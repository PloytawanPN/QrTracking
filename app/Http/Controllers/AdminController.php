<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function QrCode()
    {
        return view('Admin.qrcode');
    }
    public function login(){
        return view('Admin.login');
    }
}
