<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hat Yai Style Fried Chicken Shop Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons --> 
  <link href="{{url('main/img/chicken-leg.png')}}" rel="icon"> 
  <link href="{{url('main/img/chicken-leg.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('main/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('main/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('main/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('main/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('main/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('main/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('main/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('main/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>Call : 063 - 814 - 8621</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon - Fri : 13:00AM - 20:00PM</span></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="/">Hat Yai Fried Chicken Shop</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#events">Knowledge</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Project Members</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
             </li>
          @endif  
          @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li>
                    <a href="{{ route('logout') }}"  
                    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                    </a>
                  </li>
                  <li><a href="{{route('home')}}">My Account</a></li>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
              </ul>
            </li>
          @endguest
          


            <!--<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>-->

          
            
          
          
          <!--@guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="dropdown">
              <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown" aria-labelledby="navbarDropdown">
                  <ul class="dropdown" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
              </ul>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest-->
                                  
            
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

  </header>
  @yield('content')

  <footer id="footer">
    <div class="container">
<div class="copyright">
  &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
</div>
<div class="credits">
</div>
</div>

  </div>
</div>
</div>


</footer>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{url('main/vendor/aos/aos.js')}}"></script>
<script src="{{url('main/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('main/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{url('main/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{url('main/vendor/php-email-form/validate.js')}}"></script>
<script src="{{url('main/vendor/swiper/swiper-bundle.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{url('main/js/main.js')}}"></script>

</body>
  