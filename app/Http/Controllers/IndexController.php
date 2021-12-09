<?php

namespace App\Http\Controllers;

use App\homepage;
use App\contents;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       $data = homepage::latest()->paginate(1);
            $a = contents::latest()->paginate(11);
            $product = product::latest()->paginate(11);
            return view('welcome',compact('data','a','product'));
            
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
}
