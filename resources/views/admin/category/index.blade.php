@extends('layouts.admin.admin')
@section('content')

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
       
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Hat Yai Style Fried Chicken Shop Website</a>.
                </div>
            </div>
            <!-- #Footer -->
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3 style="text-align: center;">ตารางผู้จัดทำ</h3>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <a href="{{url('admin/category/create')}}" class="btn btn-success"style="position:relative; right: -1035px; bottom:-25px;">เพิ่มข้อมูล</a>
                            <h2>
                                ตารางผู้จัดทำ
                                <small>ตารางผู้จัดทำของเว็บไซต์ไก่ทอดสูตรหาดใหญ่</small>
                            </h2>
                            @if($massage = Session::get('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{$massage}}
                            </div>
                        @endif
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>ประเภทสินค้า</th>
                                        <th>เเก้ไขข้อมูล</th>
                                        <th>ลบข้อมูล</th>
                                    </tr>
                                </thead>
                                @foreach ($category as $categories)
                                    <tbody>
                                    <tr>
                                        <td>{{$categories->id}}</td>
                                        <td>{{$categories->category}}</td>
                                        <form action="{{url('admin/category/index','$cetegories->id')}}" method="POST">
                                            <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{url('admin/category/edit/'.$categories->id)}}" class="btn btn-success">แก้ไขข้อมูล</a>  
                                            </div>
                                        </td>
                                        <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/category/destroy/'.$categories->id)}}" class="btn btn-danger">ลบข้อมูล</a>  
                                        </div>
                                        </td>
                                        </form>
                                        
                                        
                                    </tr>                         
                                    </tr>  
                                </tbody>  
                                @endforeach
           
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
            <!-- #END# With Material Design Colors -->
        </div>
    </section>