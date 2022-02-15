<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function client()
    {
        return view('admin.client');
    }
}
