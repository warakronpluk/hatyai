<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Hat Yai Style Fried chicken shop</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{url('admin/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{url('admin/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{url('admin/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{url('admin/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css --> 
    <link href="{{url('admin/css/style.css')}}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('admin/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid"style="background-color: #FF5722 ;">
            <div class="navbar-header">
                <a href = "{{route('home')}}" class="navbar-brand text-black" >Hat Yai Style Fried Chicken Shop Website</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            </div>
        </div>
    </nav>
  <section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{asset('admin/images/admin rit.jpg')}}" width="45" height="52" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chavapol Tosuk</div>
                <div class="email">admin1234@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
           
                <li class="">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>หน้า สินค้า</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('product')}}">หน้าสินค้า</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>หน้า contents</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('content')}}">หน้า contents</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>หน้า admin</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('admin')}}">หน้า admin</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>หน้า homepage</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('homepage')}}">หน้า homepage</a>
                        </li>
                        
                    </ul>

                <a href="javascript:void(0);" class="">
                        <i class="material-icons">subdirectory_arrow_left</i>
                        <span>ออกจากระบบ</span>
                    </a>
               
                    
        </div>
        </aside>
        <!-- #Menu -->
        <!-- #Footer -->

    <!-- #END# Left Sidebar -->
</section>
@yield('content')
</body>
<!-- Jquery Core Js -->
<script src="{{url('admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{url('admin/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{url('admin/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{url('admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{url('admin/plugins/node-waves/waves.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{url('admin/plugins/jquery-cadmin/ountto/jquery.countTo.js')}}"></script>

<!-- Morris Plugin Js -->
<script src="{{url('admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('admin/plugins/morrisjs/morris.js')}}"></script>

<!-- ChartJs -->
<script src="{{url('admin/plugins/chartjs/Chart.bundle.js')}}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{url('admin/plugins/flot-charts/jquery.flot.js')}}"></script>
<script src="{{url('admin/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{url('admin/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{url('admin/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
<script src="{{url('admin/plugins/flot-charts/jquery.flot.time.js')}}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{url('admin/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

<!-- Custom Js -->
<script src="{{url('admin/js/admin.js')}}"></script>
<script src="{{url('admin/js/pages/index.js')}}"></script>

<!-- Demo Js -->
<script src="{{url('admin/js/demo.js')}}"></script>
</body>

</html>