@extends('layouts.admin.admin')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <h3 style="text-align: center;">หน้าแก้ไข homepage</h3>
            </div>
            <!-- Input -->
            <form role="form" action="{{route('update_homepage',$homepage->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="body">
                            <h2 class="card-inside-title">เนื้อหา homepage</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" value="{{$homepage->header}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

        <div class="col-row">
            <img src="{{asset('admin/images/'.$homepage->image)}}" id="showImage" alt="" style="width: 200px">
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name="image" id="image" class="form-control-file ml-3">
                    <p class="help-block"></p>
                  </div>
                  <button type="submit" class="btn btn-warning btn-lg">แก้ไขข้อมูล homepage</button>
                </form>
          </div>
        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection