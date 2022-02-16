<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function serveur()
    {
        return view('admin.serveur.main');
    }

    public function user()
    {
        return view('admin.user.main');
    }

    public function utilisateurs()
    {
        return view('admin.utilisateurs.main');
    }

    public function images()
    {
        return view('admin.images.main');
    }

    public function gallerie()
    {
        return view('admin.gallerie.main');
    }

    public function categories()
    {
        return view('admin.categories.main');
    }
    
    public function avatars()
    {
        return view('admin.avatars.main');
    }
    
}
