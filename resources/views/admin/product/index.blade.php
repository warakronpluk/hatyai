@extends('layouts.admin.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h3 style="text-align: center;">ตารางสินค้า</h3>
        </div>
        <!-- Basic Table -->
        <!-- #END# Basic Table -->
        <!-- Striped Rows -->
        
            @csrf
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                    <a href="{{url('/admin/product/create')}}" class="btn btn-success" style="position:relative; right: -975px; bottom:-25px;">เพิ่มข้อมูล</a>
                        <h2>
                            ตารางสินค้า
                            <small>ตารางสินค้าของเว็บไซต์ไก่ทอดสูตรหาดใหญ่</small>
                        </h2>
                        @if($massage = Session::get('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{$massage}}
                            </div>
                        @endif
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id_product</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>ราคาสินค้า</th>
                                    <th>รูปภาพสินค้า</th>
                                    <th>แก้ไขข้อมูล</th>
                                    <th>ลบข้อมูล</th>
                            </thead>
                            
                            @foreach ($data as $key =>$product)
                                <tr> 
                                     <td>{{$product->id_product}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <th><img src="{{asset('/admin/images/'.$product->image)}}" style="height: 100px"></th>
                                    <td>
                                    <div class="d-flex align-items-center">
                                    <form action="{{url('admin/product/index','$product->id_product')}}" method="POST">
                                        @csrf
                                    <a href="{{url('admin/product/edit/'.$product->id_product)}}" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{url('/admin/product/delete/'.$product->id_product)}}" class="btn btn-danger">ลบข้อมูล</a>  
                                        
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
  
        <!-- #END# With Material Design Colors -->
    </div>
</section>
@endsection