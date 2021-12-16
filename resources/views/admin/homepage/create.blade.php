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
                <h3 style="text-align: center;">หน้าเพิ่มhomepage</h3>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="body">
                        <form role="form" action="{{route('create.homepage')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h2 class="card-inside-title">หัวข้อ Homepage</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="text" class="form-control" placeholder="หัวข้อ homepage">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-row">
                                <section class="panel">
                                <div class="panel-body">
                                    
                                    <!-- <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" name='image' id="exampleInputFile">
                                    </div>
                                    <!-- <div class="checkbox">
                                        <label>
                                                            <input type="checkbox"> Check me out
                                                        </label>
                                    </div> -->
                                    <button type="submit" class="btn btn-warning btn-lg">เพิ่มhomepage</button>
                                    

                                </div>
                                </section>
                            </div>
                                </form>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection