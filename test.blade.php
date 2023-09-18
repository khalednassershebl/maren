<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="{{ asset("assets/teacher_assets/app-assets/css/all.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/landing_assets/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{ asset("assets/landing_assets/css/animate.min.css")}}">
  <link rel="stylesheet" href="{{ asset("assets/landing_assets/css/owl.carousel.min.css")}}">
  <link rel="stylesheet" href="{{ asset("assets/landing_assets/css/owl.theme.default.min.css")}}">
  <link rel="stylesheet" href="{{ asset("assets/landing_assets/css/jquery.fancybox.min.css")}}">
  <link rel="stylesheet" href="{{ asset("assets/landing_assets/fonts/icomoon/style.css")}}">
  <link rel="stylesheet" href="{{ asset("assets/landing_assets/fonts/flaticon/font/flaticon.css")}}">
  <link rel="stylesheet" href="{{ asset("assets/landing_assets/css/aos.css")}}">
  <link rel="stylesheet" href="{{ asset("assets/landing_assets/css/style-landing_page.css")}}">

  <title>Maren Education System</title>
  <link rel="shortcut icon" href="{{ asset("assets/student_assets/images/m icon.png") }}" />
  <style>
    body{
        font-family: "Inter", sans-serif;
    line-height: 1.6;
    background-color: #ffffff;
    overflow-x: hidden;
    font-size: 16px;
    left: 0;
    color: #666;
    position: relative;
    }

    .mobile{
        background-color: #004fec;
        width: 100%;
        /* margin: auto; */
    }

    .mobile-menu {
        list-style: none;
        text-decoration: none;
        display: flex;
        align-items: center;
        position: fixed;
        bottom: 0;
        z-index: 99999;
        background: black;
        color: white;
        left: 0;
        padding: 12px 6px;;
        margin: 0;
        width: 100%;
        justify-content: space-around;
    }

    .mobile-menu a{
        color:white;
        font-size: 16px;
        display: flex;
        text-decoration: none;
        flex-direction: column;
        align-items: center;
    }
    html {
        scroll-behavior: smooth;
    }
  </style>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-9">
            <a href="#" class="small mr-3" style="margin-right: 20px;"><span class="icon-question-circle-o mr-2"></span> <span class="d-none d-lg-inline-block">Have a questions?</span></a>
            <a href="#" class="small mr-3" style="margin-right: 20px;"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">01091536978</span></a>
            <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">info@maren.com</span></a>
          </div>

          <div class="col-6 col-lg-3 text-right">

            @auth
            <a href="{{ route("student_dashboard") }}" class="small mr-3">
                <span class="icon-lock"></span>
                لوحة التحكم
                </a>
            @else
            <a href="{{ route("login") }}" class="small mr-3">
            <span class="icon-lock"></span>
            Log In
            </a>
            <a href="{{ route("register") }}" class="small">
            <span class="icon-person"></span>
            Register
            </a>
            @endauth
          </div>



        </div>
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="index.html" class="logo menu-absolute m-0">Maren Academy<span class="text-primary">.</span></a>

          <ul class="js-clone-nav d-lg-inline-block site-menu d-none">
            <li>
                <a href="#contact">
                    تواصل معنا
                </a>
            </li>
            <li>
                <a href="#our_services">
                    خدماتنا
                </a>
            </li>
            <li>
                <a href="#teachers">
                    المدرسين
                </a>
            </li>
            <li>
                <a href="#about_us">
                   من نحن
                </a>
            </li>
            <li class="active">
                <a href="#home">
                    الصفحة الرئيسية
                </a>
            </li>
          </ul>

          <!--<a href="{{ route("student_dashboard") }}" class="btn-book btn btn-secondary btn-sm menu-absolute">لوحة التحكم</a>-->

          {{-- <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a> --}}

        </div>
      </div>
    </div>
  </nav>


  <div class="untree_co-hero overlay" style="background-image: url("{{ asset("assets/landing_assets/images/hero-img-1-min.jpg") }}">


    <div class="container" id="home">
      <div class="row align-items-center justify-content-center">

        <div class="col-12">

          <div class="row justify-content-center ">

            <div class="col-lg-6 text-center ">
              <a href="#" href="https://vimeo.com/342333493" data-fancybox data-aos="fade-up" data-aos-delay="0" class="caption mb-4 d-inline-block">
                مرن أكاديميى
                </a>

              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">
                مرحبا بك فى منصة مرن
              </h1>
              <p class="mb-4 text-white" data-aos="fade-up" data-aos-delay="300">من أجل مستقبل أفضل سجل معنا واتعلم مع أفضل مدرسين لدينا</p>
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">سجل معنا</a></p>
            </div>

          </div>
        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div>


  <div class="untree_co-section" id="about_us">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">مرن أكاديميى</h2>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4 box-shadow-2" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-atom"></i>
            </div>
            <div>
              <h3>المنشورات</h3>
              <span>{{ App\Models\Post::count() }}</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-briefcase"></i>
            </div>
            <div>
              <h3>الطلاب</h3>
              <span>{{ App\Models\User::count() }}</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-calculator"></i>
            </div>
            <div>
              <h3>المدرسين</h3>
              <span>{{ App\Models\Teacher::count() }}</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-pen"></i>
            </div>
            <div>
              <h3>الامتحانات</h3>
              <span>{{ App\Models\Exam::count() }}</span>
            </div>
          </a>
        </div>


        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-music"></i>
            </div>
            <div>
              <h3>بنك الاسالة</h3>
              <span>{{ App\Models\Question::count() }}</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-chart-pie"></i>
            </div>
            <div>
              <h3>كتب وملخصات</h3>
              <span>{{ App\Models\Media::count() }} courses</span>
            </div>
          </a>
        </div>
        {{-- <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-camera"></i>
            </div>
            <div>
              <h3>Photography</h3>
              <span>7,991 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-circle-layer"></i>
            </div>
            <div>
              <h3>Animation</h3>
              <span>6,491 courses</span>
            </div>
          </a>
        </div> --}}


      </div>

      {{-- <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
        <div class="col-lg-8 text-center">
          <p>We have more category here. <a href="#">Browse all</a></p>
        </div>
      </div> --}}
    </div>
  </div>

  <div class="services-section" id="teachers">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <figure class="img-wrap-2">
            <img src="{{ asset("assets/teacher_assets/app-assets/images/logo/teachers.jpg") }}" alt="Image" class="img-fluid">
            <div class="dotted"></div>
          </figure>

        </div>
        <div class="col-lg-4 mb-5 mb-lg-0 justify-content-end align-items-center">

            <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
              <h2 class="line-bottom text-right mb-4">تعرف على المدرسين لدينا</h2>
            </div>

            <p data-aos="fade-up" class="text-right" data-aos-delay="100">
              منصة مرن لديها مدرسين ذوى طابع خاص فى تقديم محتوى تعليمى يليق بك طالب
            </p>

            <ul class="ul-check list-unstyled mb-5 primary text-right" data-aos="fade-up" data-aos-delay="200">
              <li>سهولة التعلم</li>
              <li>امتحانات دورية</li>
              <li>فيديوهات مسجلة</li>
              <li>منشورات رقمية</li>
               <li>كتب مجانية</li>
            </ul>


            <p data-aos="fade-up" data-aos-delay="300"><a href="{{ route("register") }}" class="btn btn-primary text-right">سجل معنا الان</a></p>
          </div>
      </div>
    </div>
  </div>



  <div class="untree_co-section" id="our_services">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">منصة مرن</h2>
          <p>ما يمكن أن تقدمه لك منصة مرن</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="feature">
            <span class="uil uil-book-alt"></span>
            <h3>متابعة قوية</h3>
            {{-- <p>
                لدينا فريق عمل مختص يقوم بمتابعتك باستمرار لتحسين من جودتك
            </p> --}}
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-book-alt"></span>
            <h3>بنك أسئلة</h3>
            <p>

            </p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-book-alt"></span>
            <h3>امتحانات دورية</h3>
            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
          </div>
        </div>


        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
          <div class="feature">
            <span class="uil uil-book-open"></span>
            <h3>كتب ومراجع</h3>
            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-book-open"></span>
            <h3>منشورات دراسية</h3>
            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-book-alt"></span>
            <h3>فيديوهات مستمرة</h3>
            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
          </div>
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->


  <div class="untree_co-section pt-0 bg-img overlay" style="background-image: url("{{ asset("assets/landing_assets/images/img-school-1-min.jpg") }}">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">مرن أكاديميى</h2>
          <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">من أجل تعليم أفضل سجل معنا الان</p>
          <p><a href="{{ route("register") }}" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">سجل الارن</a></p>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 mb-5">
          <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">عنا</h2>
          <p data-aos="fade-up" data-aos-delay="100">منصة مرن لتعليم الشباب والتقدم بمستواهم التعليمى من خلال الاتى</p>
          <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>فيديوهات شرح مسجلة</li>
            <li>امتحانات مستمرة</li>
            <li>مراجع شاملة</li>
          </ul>

          <div class="row count-numbers mb-5">
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <span class="counter d-block"><span data-number="1000">0</span><span>+</span></span>
              <span class="caption-2">عدد  الطلاب</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="2">0</span><span></span></span>
              <span class="caption-2">المدرسين</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="12">0</span><span></span></span>
              <span class="caption-2">سنوات الخبرة</span>
            </div>
          </div>

          <p data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route("register") }}" class="btn btn-primary mr-1">سجل الان</a>
            <a href="mailto:info@maren.com" class="btn btn-outline-primary">تواصل معنا</a>
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          {{-- <div class="bg-1"></div> --}}
          <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
            <span class="play-wrap"><span class="icon-play"></span></span>
            <img src="{{ asset("assets/landing_assets/images/img-school-4-min.jpg") }}" alt="Image" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  {{-- <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">School News</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="{{ asset("assets/landing_assets/images/img-school-1-min.jpg") }}" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Education for Tomorrow's Leaders</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="200">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="{{ asset("assets/landing_assets/images/img-school-2-min.jpg") }}" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Enroll Your Kids This Summer to get 30% off</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section --> --}}

  {{-- <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">

          <h3 class="line-bottom mb-4">Testimonials</h3>
          <div class="owl-carousel wide-slider-testimonial">
            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                <div class="author">
                  <img src="{{ asset("assets/landing_assets/images/person_1.jpg") }}" alt="Free template by TemplateUX">
                  <h3>John Doe</h3>
                  <p class="position">CEO, Founder</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>
                <div class="author">
                  <img src="{{ asset("assets/landing_assets/images/person_2.jpg") }}" alt="Free template by TemplateUX">
                  <h3>James Woodland</h3>
                  <p class="position">Designer at Facebook</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                &ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                <div class="author">
                  <img src="{{ asset("assets/landing_assets/images/person_3.jpg") }}" alt="Free template by TemplateUX">
                  <h3>Rob Smith</h3>
                  <p class="position">Product Designer at Twitter</p>
                </div>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> --}}


  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mr-auto mb-5 mb-lg-0"  data-aos="fade-up" data-aos-delay="0">
          <img src="{{ asset("assets/teacher_assets/app-assets/images/logo/img.jpg") }}" alt="image" class="img-fluid">
        </div>
        <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <h3 class="line-bottom mb-4">Why Choose Us</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>

          <div class="custom-accordion" id="accordion_1">
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Good Teachers and Staffs</button>
              </h2>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="{{ asset("assets/landing_assets/images/img-school-1-min.jpg") }}" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                      <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">We Value Good Characters</button>
              </h2>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="{{ asset("assets/landing_assets/images/img-school-2-min.jpg") }}" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                      <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Your Children are Safe</button>
              </h2>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="{{ asset("assets/landing_assets/images/img-school-3-min.jpg") }}" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                      <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div> <!-- .accordion-item -->

          </div>

        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="site-footer">
    <div class="container">

      <div class="row flex-row-reverse">
        <div class="col-lg-3 mr-auto">
          <div class="widget">
            <h3>عنا<span class="text-primary">.</span> </h3>
            <p>
                مرن أكاديميى للتعليم الاساسى خبرة 10 سنوات فى تلعيم الطلاب وانتاج جيل  مؤهل ل افتحام المستقبل
            </p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-2 ml-auto">

        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-3">
          <div class="widget">
            <h3>منوعات</h3>
            <ul class="instafeed instagram-gallery list-unstyled">
              <li><a class="instagram-item" href="{{ asset("assets/landing_assets/images/gal_1.jpg") }}" data-fancybox="gal">
                <img src="{{ asset("assets/landing_assets/images/gal_1.jpg") }}" alt="" width="72" height="72"></a>

                </li>
              <li><a class="instagram-item" href="{{ asset("assets/landing_assets/images/gal_2.jpg") }}" data-fancybox="gal"><img src="{{ asset("assets/landing_assets/images/gal_2.jpg") }}" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="{{ asset("assets/landing_assets/images/gal_3.jpg") }}" data-fancybox="gal"><img src="{{ asset("assets/landing_assets/images/gal_3.jpg") }}" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="{{ asset("assets/landing_assets/images/gal_4.jpg") }}" data-fancybox="gal"><img src="{{ asset("assets/landing_assets/images/gal_4.jpg") }}" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="{{ asset("assets/landing_assets/images/gal_5.jpg") }}" data-fancybox="gal"><img src="{{ asset("assets/landing_assets/images/gal_5.jpg") }}" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="{{ asset("assets/landing_assets/images/gal_6.jpg") }}" data-fancybox="gal"><img src="{{ asset("assets/landing_assets/images/gal_6.jpg") }}" alt="" width="72" height="72"></a>
              </li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->


        <div class="col-lg-3">
          <div class="widget">
            <h3>تواصل</h3>
            <address>43 Raymouth Rd. Baltemoer, Tanta</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://11234567890">01091536978</a></li>
              <li><a href="mailto:info@maren.com">info@maren.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          {{-- <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. كل الحقوق محفزظة لدينا --}}
            
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only"></span>
      </div>
    </div>

    <div class="mobile d-lg-none">
        <ul class="mobile-menu">
            <li class="active">
                <a href="#home" class="row-a">
                    <i class="fa fa-home"></i>
                    الرئيسية
                </a>
            </li>
            <li>
                <a href="#about_us" class="row-a">
                    <i class="fa fa-user"></i>
                    من نحن
                </a>
            </li>
            <li>
                <a href="#our_services" class="row-a">
                    <i class="fa fa-cogs"></i>
                    خدماتنا
                </a>
            </li>
            <li>
                <a href="#teachers" class="row-a">
                    <i class="fa fa-user"></i>
                    المدرسين
                </a>
            </li>
            <li>
                <a href="#" class="row-a">
                    <i class="fa fa-phone"></i>
                    Contact
                </a>
            </li>
          </ul>
    </div>

    <script src="{{ asset("assets/landing_assets/js/jquery-3.4.1.min.js") }}"></script>
    <script src="{{ asset("assets/landing_assets/js/popper.min.js") }}"></script>
    <script src="{{ asset("assets/landing_assets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/landing_assets/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("assets/landing_assets/js/jquery.animateNumber.min.js") }}"></script>
    <script src="{{ asset("assets/landing_assets/js/jquery.waypoints.min.js") }}"></script>
    <script src="{{ asset("assets/landing_assets/js/jquery.fancybox.min.js") }}"></script>
    <script src="{{ asset("assets/landing_assets/js/jquery.sticky.js") }}"></script>
    <script src="{{ asset("assets/landing_assets/js/aos.js") }}"></script>
    <script src="{{ asset("assets/landing_assets/js/custom.js") }}"></script>
  </body>
  </html>
