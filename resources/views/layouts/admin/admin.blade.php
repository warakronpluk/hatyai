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

    <div class="theme-red">
        <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href = "{{route('home')}}" class="navbar-brand" style="color: white" >Hat Yai Style Fried Chicken Shop Website</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            </div>
        </div>
    </nav>
    </div>

  <section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{asset('admin/images/admin rit.jpg')}}" width="45" height="52" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                <div class="email">{{Auth::user()->email}}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="{{route('home')}}"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
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
                        <span>???????????? ??????????????????</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('product')}}">??????????????????????????????</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>???????????? contents</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('content')}}">???????????? contents</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>???????????? homepage</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('homepage')}}">???????????? homepage</a>
                        </li>
                        
                    </ul>
               
                    
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