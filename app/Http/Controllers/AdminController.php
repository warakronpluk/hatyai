<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin.index');
    }
    public function edit(){
        return view('admin/admin/edit');
    }
    public function create(){
        return view('admin/admin/create');
    }
}
