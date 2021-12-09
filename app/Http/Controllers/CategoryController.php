<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    }
    public function add(){
        return view('admin/category/create');   
    }
    public function create(Request $request)
    {
        $category = new Category;
        $category->category = $request->name;
        $category->save();
        return redirect('/admin/category/index')
                ->with('success','เพิ่มประเภทสินค้าเรียบร้อย');

    }

   public function edit($id){
       $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
   }
   public function update(Request $request, $id){
       $category = Category::find($id);
       $category->category = $request->name;
       $category->save();
       return Redirect('/admin/category/index')
                ->with('success','แก้ไขประเภทสินค้าเรียบร้อย');
   }
   public function destroy($id){
       $category = Category::destroy($id);
       return Redirect('admin/category/index')
                ->with('success','ลบประเภทสินค้าเรียบร้อย');

   }
}
