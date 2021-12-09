<?php

namespace App\Http\Controllers;

use App\homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       $data = homepage::latest()->paginate(1);
            return view('admin/homepage/index',compact('data'));
            
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/homepage/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       //dd($request);
        $page = new homepage();
        $page->header = request('text');
        if($request->hasFile('image')){
            $filename = Str::random(11).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $page->image = $filename ;
        }else{
            $page->image = 'NOPIC.JPG';
        }
        $page->save();
        return redirect()->route('homepage')
                        ->with('success','สร้างสินค้าสำเร็จแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {   
        $homepage = homepage::find($id);
        return view('admin/homepage/edit',compact('homepage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile('image')){
            $homepage = homepage::find($id);
            if($homepage->image != 'NOPIC.JPG'){
                File::delete(public_path().'admin/images'.$homepage->image);
            }
            $filename = Str::random(11).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $homepage->image = $filename ;
            $homepage-> header = $request->name;
        }else{
            $homepage = homepage::find($id);
            $homepage -> header = $request->name;
        }

        $homepage->save();
        return redirect()->route('homepage') 
                            ->with('success','แก้ไขสำเร็จเเล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_homepages)
    {
        
        homepage::destroy($id_homepages);
        return Redirect()->route('homepage')
                        ->with('success','ลบสินค้าสำเร็จเเล้ว');
    }
}
