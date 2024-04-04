<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rental Mobil</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet" />


  <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}" />

  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}" />

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
</head>

<body>
  <div class="site-wrap" id="home-section">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-3"></div>
          <div class="col-9 text-right">
            <span class="d-inline-block d-lg-none"><a href="#" class="site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto">
                <li class="active">
                  <a href="{{ url('/') }}" class="nav-link text-white">Home</a>
                </li>
                <li><a href="{{ url('daftar-mobil') }}" class="nav-link text-white">Daftar Mobil</a></li>
                </li>
                <li><a href="{{ url('pengembalian-mobil') }}" class="nav-link text-white">Pengembalian Mobil</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    @yield('content')
  </div>

  <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('frontend/js/aos.js') }}"></script>

  <script src="{{ asset('frontend/js/main.js') }}"></script>
  @stack('script-alt')
</body>

</html>