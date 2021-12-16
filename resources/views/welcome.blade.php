@extends('layouts.main.index')
@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          @foreach ($data as $homepage)
          <h1>Welcome to <br><span>{{$homepage->header}}</span></h1>
          @endforeach

          <h2>Best Chicken in the Nonthaburi</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu</a>
          </div>
        </div>


      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('main/img/chicken')}} -bg.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2 style="color: goldenrod;">เกี่ยวกับเรา</h2>
            <p>
              สำหรับวันนี้เราจะมานำเสนอ อาหารไทย เมนูอาหารยอดนิยมของไทย<br>
              เมนูไก่ทอด หากกล่าวถึงไก่ทอด ทุกคนก็ต้องนึกถึง ไก่ทอดหาดใหญ่
              <br>ซึ่งเป็นเมนูที่มีต้นตำหรับมาจากทางภาคใต้ของประเทศไทย
              <br>ไก่ทอดสูตรหาดใหญ่ มีเคล็ดลับความอร่อย อยู่ที่วัตถุดิบที่มีคุณภาพ
              <br>การหมักเนื้อไก่ แป้งที่ใช้ในการทอด การทอดหอมเจียว การทำไก่ทอดสูตรหาดใหญ่นั้นเป็นเรื่องที่ง่ายกว่าที่หลายคนคิด

            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Recommended menu of the shop</h2>
          <p>เมนูแนะนำของร้าน</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>Menu 01</span>
              <h4>น่องไก่ทอด</h4>
              <b>
                <p>ราคา 40 บาท</p>
              </b>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>Menu 02</span>
              <h4>อกไก่ทอด</h4>
              <b>
                <p>ราคา 70 บาท</p>
              </b>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>Menu 03</span>
              <h4>สะโพกไก่ทอด</h4>
              <b>
                <p>ราคา 40 บาท</p>
              </b>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Our Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter=".filter-starters">
                <h3>
                  Chicken
                </h3>
                
              </li>
              
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($product as $key =>$chicken)
          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('/admin/images/'.$chicken->image)}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">{{$chicken->name}}</a><span>{{$chicken->price}}</span>
            </div>
            {{-- <div class="menu-ingredients">
              Fried Chicken Drumsticks
            </div> --}}
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>bit of knowledge</h2>
          <p>เกร็ดความรู้</p>
        </div>
        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($a as $key =>$content)
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="{{asset('/admin/images/'.$content->image)}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>{{$content->head}}</h3>
                  <p>
                    {{$content->text}}
                  </p>
                </div>
              </div>
            </div>
            @endforeach 
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Events Section -->



    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Menu</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="{{asset('main/img/gallery/1.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('main/img/gallery/1.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="{{asset('main/img/gallery/2.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('main/img/gallery/2.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="{{asset('main/img/gallery/3.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('main/img/gallery/3.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="{{asset('main/img/gallery/8.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('main/img/gallery/8.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="{{asset('main/img/gallery/5.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('main/img/gallery/5.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="{{asset('main/img/gallery/6.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('main/img/gallery/6.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>






        </div>

      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Project Members</h2>
          <p>Teams</p>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{asset('main/img/chefs/dordeer.jpg')}}" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Nattakant Kansophon</h4>
                      <span>Competency adivisor</span>
                    </div>
                    <div class="social">
    
                      <a href="https://www.facebook.com/chavapol.tosuk"><i class="bi bi-facebook"></i></a>
                      <a href="https://www.instagram.com/ritzcvp/?hl=th"><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{asset('main/img/chefs/rit.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Chavapol Tosuk</h4>
                  <span>Front - end</span>
                </div>
                <div class="social">

                  <a href="https://www.facebook.com/chavapol.tosuk"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/ritzcvp/?hl=th"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('main/img/chefs/pluk.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Warakron khueanmueang</h4>
                  <span>Back - end</span>
                </div>
                <div class="social">

                  <a href="https://www.facebook.com/profile.php?id=100011578398190"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/imyourplukkkkkk/?hl=th"><i class="bi bi-instagram"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{asset('main/img/chefs/tae.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tanakit Mahamat</h4>
                  <span>Tester</span>
                </div>
                <div class="social">

                  <a href="https://www.facebook.com/Tanakit.0610320970"><i class="bi bi-facebook"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:3; width: 100%; height: 400px;" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.3651609881304!2d100.40920555065436!3d13.877100711836059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b2e266b2e45%3A0xafa399a6f2dd3b80!2z4Lit4Li04LiZ4LmA4LiU4LmH4LiB4LiL4LmMIOC4peC4tOC4n-C4p-C4tOC5iOC4h-C4oeC4reC4peC4peC5jCDguKrguLLguILguLLguJrguLLguIfguYPguKvguI3guYggKEluZGV4IExpdmluZyBNYWxsKQ!5e0!3m2!1sth!2sth!4v1628564682596!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="container" .data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-3">
            <div class="address">

              <h4>Location :</h4>
              <p>Hat Yai Style Fried Chicken Shop <br>at index livingmall <br>Central Westgate Nonthaburi</p>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="open-hours">

              <h4>Open Hours :</h4>
              <p>Monday - Friday :<br>13:00 AM - 20:00 PM</p>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="phone">

              <h4>Call :</h4>
              <p>คุณบุญมา มหามาตย์ <br>โทร. 063 - 814 -8621</p>
            </div>
          </div>
          

          <div class="col-lg-3">
            <div class="footer-info">
              <h3>Hat Yai Fried Chicken Shop</h3>
              <p>
                Hat Yai Style Fried Chicken Shop <br>at index livingmall <br>Central Westgate Nonthaburi<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>


    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection

   <!-- <body>
        <div class="flex-center position-ref full-height">
            if (Route::has('login'))
                <div class="top-right links">
                    auth
                        <a href="{ url('/home') }}">Home</a>
                    else
                         <a href="{ url('/about') }}">about</a>
                        <a href="{ route('login') }}">Login</a>

                        if (Route::has('register'))
                            <a href="{ route('register') }}">Register</a>
                        endif
                    endauth
                </div>
            endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>-->
