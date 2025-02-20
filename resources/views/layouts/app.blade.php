<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />

  <!-- Custom styles for this template -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <header class="header_section">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="#">
                <span>
                  CONGLEE
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""></span>
              </button>
      
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('shop')}}">
                      Shop
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('why')}}">
                      Why Us
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('testimonial')}}">
                      Testimonial
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <div class="user_option">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
      
                  <a href="">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>Cart</span>
                  </a>
                  <form class="form-inline ">
                    <button class="btn nav_search-btn" type="submit">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </form>
                </div>
              </div>
            </nav>
          </header>

        <main class="py-4">
            @yield('content')


            <section class="info_section  layout_padding2-top">
                <div class="social_container">
                  <div class="social_box">
                    <a href="">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="info_container ">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h6>
                          ABOUT US
                        </h6>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                          adipiscing elit, sed doLorem ipsum dolor sit amet,
                        </p>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="info_form ">
                          <h5>
                            Newsletter
                          </h5>
                          <form action="#">
                            <input type="email" placeholder="Enter your email">
                            <button>
                              Subscribe
                            </button>
                          </form>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h6>
                          NEED HELP
                        </h6>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                          adipiscing elit, sed doLorem ipsum dolor sit amet,
                        </p>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h6>
                          CONTACT US
                        </h6>
                        <div class="info_link-box">
                          <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span> Gb road 123 london Uk </span>
                          </a>
                          <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>+01 12345678901</span>
                          </a>
                          <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span> demo@gmail.com</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- footer section -->
                <footer class=" footer_section">
                  <div class="container">
                    <p>
                      &copy; <span id="displayYear"></span> All Rights Reserved By
                      <a href="https://html.design/">Free Html Templates</a>
                    </p>
                  </div>
                </footer>
                <!-- footer section -->
            
              </section>
        </main>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="js/custom.js"></script>
</body>
</html>