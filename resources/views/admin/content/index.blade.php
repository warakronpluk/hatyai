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
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
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
                <h3 style="text-align: center;">ตารางคอนเทนต์</h3>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <a href="{{url('admin/content/create')}}" class="btn btn-success" style="position:relative; right: -1200px; bottom:-25px;">เพิ่มข้อมูล</a>
                            <h2>
                                ตารางคอนเทนต์
                                <small>ตารางคอนเทนต์ของเว็บไซต์ไก่ทอดสูตรหาดใหญ่</small>
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
                                        <th>id_content</th>
                                        <th>ชื่อเรื่อง</th>
                                        <th>เนื้อหา</th>
                                        <th>รูปประกอบเนื้อหา</th>
                                        <th>เเก้ไขข้อมูล</th>
                                        <th>ลบข้อมูล</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($data as $key =>$content)
                                    <tr> 
                                         <td>{{$content->id_contents}}</td>
                                         <td>{{$content->head}}</td>
                                        <td>{{$content->text}}</td>
                                        <th><img src="{{asset('/admin/images/'.$content->image)}}" style="height: 100px"></th>
                                        <td>
                                        <div class="d-flex align-items-center">
                                        <form action='{{url('admin/content/index','$content->id_contents')}}' method="POST">
                                            @csrf
                                        <a href="{{url('admin/content/edit/'.$content->id_contents)}}" class="btn btn-success">แก้ไขข้อมูล</a>  
                                                </div>
                                        </td>
                                        <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('/admin/content/delete/'.$content->id_contents)}}" class="btn btn-danger">ลบข้อมูล</a>  
                                  
                                    </tr> 
                                @endforeach 
                                </tbody>
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
    
@endsection