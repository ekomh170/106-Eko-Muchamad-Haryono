<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    
    public function index()
    {
        return view('admin_panel.pages.user_profile.index');
    }

    public function edit()
    {
        return view('admin_panel.pages.user_profile.edit');
    }
}
