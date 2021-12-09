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
                <h3 style="text-align: center;">หน้าเพิ่มข้อมูลcontents</h3>
            </div>
            <section class="panel">
              <div class="panel-body">
                <form action ="{{Route('create.content')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">head :</label>
                        <input type="text" name="head" class="form-control" id="exampleInputName" placeholder="Enter Content">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">เนื้อหา :</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter Content">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                             <input type="file" id="exampleInputFile" name="image">
                        <p class="help-block"> Example block-level help text here.</p>
                    </div>
                
                  <button type="submit" class="btn btn-warning btn-lg">เพิ่มข้อมูล contents</button>
                </form>
                
              </div>
            </section>
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