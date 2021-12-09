<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    public function index(){
       $data= Product::latest()->paginate(11);
     return view('admin.product.index',compact('data')); }

    public function edit($id_product)
    {
        $product = Product::find($id_product);
        return view('admin.product.edit',compact('product'));
    
    }
    public function create()
    {return view('admin.product.create');
    
    }
    public function store(Request $request){
        $product = new Product();
        $product-> name = $request->name;
        $product-> price = $request->price;

        if($request->hasFile('image')){
            $filename = Str::random(11).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $product->image = $filename ;
        }else{
            $product->image = 'NOPIC.JPG';
        }

        $product->save();
        return redirect()->route('product') 
                            ->with('success','สร้างสินค้าสำเร็จเเล้ว');
    }
    
    public function update(Request $request, $id_product){
        
        if($request->hasFile('image')){
            $product = Product::find($id_product);
            if($product->image != 'NOPIC.JPG'){
                File::delete(public_path().'admin/images'.$product->image);
            }
            $filename = Str::random(11).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $product->image = $filename ;
            $product-> name = $request->name;
            $product-> price = $request->price;
        }else{
            $product = Product::find($id_product);
            $product-> name = $request->name;
            $product-> price = $request->price;
        }

        $product->save();
        return redirect()->route('product') 
                            ->with('success','แก้ไขสินค้าสำเร็จเเล้ว');
    }
    public function destroy($id_product){
        Product::destroy($id_product);
        return Redirect()->route('product')
                        ->with('success','ลบสินค้าสำเร็จเเล้ว');   
    }
    
  
}


