<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilleController extends Controller
{
    //記入
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create()
    {
        return rediect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin/profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}





