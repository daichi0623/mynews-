<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    pubric function add()
    {
        return view('admin.profile.create');
    }
    
    pubric function create add()
    {
        return redirect('admin/profile/create'):
    }
    
    
    pubric function edit()
    {
        return view('admin.profile.edit');
    }
    
    pubric function update()
    {
        return redirect('admin/profile/edit');
    }
    
}

