<?php

namespace App\Http\Controllers;

use App\contents;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Image;
use File;


class ContentController extends Controller
{
    
    public function index(){
        $data = contents::latest()->paginate(11);
        return view ('admin.content.index',compact('data'));
    }
    public function edit($id_content){
        $content = contents::find($id_content);
        return view('admin.content.edit',compact('content'));
    
    }
    public function create(){
        return view ('admin/content/create');
    }

    public function store(Request $request){
        
        $content = new contents;
        $content -> text = $request-> name ;
        $content->  head = $request -> head ;
        
        if ($request->hasFile('image')){
            $filename = Str::random(11).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images',$filename);
            Image::make(public_path().'/admin/images'.$filename);
            $content->image=$filename;
        }else{
            $content->image = 'NOPIC.JPG';
        }
        $content->save();
        return redirect('/admin/content/index')
                        ->with('success','สร้างสินค้าสำเร็จแล้ว');
    }
    public function update(Request $request, $id_contents){
        if($request->hasFile('image')){
            $content = contents::find($id_contents);
            if($content->image != 'NOPIC.JPG'){
                File::delete(public_path().'admin/images'.$content->image);
            }
            $filename = Str::random(11).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $content->image = $filename ;
            $content -> head = $request ->head;
            $content-> text = $request->name;
        }else{
            $content = contents::find($id_contents);
            $content -> head = $request->head;
            $content-> text = $request->name;
            
        }

        $content->save();
        return redirect()->route('content') 
                            ->with('success','แก้ไขสินค้าสำเร็จเเล้ว');
    
    }
    public function destroy($id_contents){
        contents::destroy($id_contents);
        return Redirect()->route('content')
                        ->with('success','ลบสินค้าสำเร็จเเล้ว');   
    }
    }
    


