<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Medusa Money | @yield('title')</title>
    <!-- favicon -->
    <link rel=icon href=favicon.ico sizes="20x20" type="image/png">

    <link rel="stylesheet" href="{{ url('assets/css/core.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/thesaas.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    @yield('styles')

    @yield('pre-scripts')
  </head>

  <body id="home">

    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md">
      <div class="container">

        <div class="topbar-left">
          <a class="topbar-brand" href="/">
            <img id="logo-default" class="logo-default" src="{{ url('assets/img/logo-small.png') }}" alt="logo">
            <img id="logo-inverse" class="logo-inverse" src="{{ url('assets/img/logo-light.png') }}" alt="logo">
          </a>
        </div>
      </div>
    </nav>
    <!-- END Topbar -->

    @yield('content')

    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-12 col-lg-2">
            <p class="text-center text-lg-left">
              <a href="index.html"><img id="footer-logo" src="{{ url('assets/img/logo-02.png') }}" alt="logo-2"></a>
            </p>
          </div>

          <div class="col-12 col-lg-8 mt-30">
            <ul id="footer-nav" class="nav nav-primary nav-hero">
              <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/#section-intro') }}">Intro</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/#section-features') }}">Features</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/#section-overview') }}">Overview</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/#section-pricing') }}">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/#section-insights') }}">Insights</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/#section-faq') }}">FAQ</a></li>
            </ul>
          </div>

          <div class="col-12 col-lg-2 mt-30">
            <div class="social text-center text-lg-right">
              <a class="social-icon" href="https://www.tradingview.com/" target="_blank"><div id="trading-view-icon"></div></a>
              <a class="social-icon" href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
              <a class="social-icon" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <hr />
        <div id="footer-bottom">
          <p>
            <small>&copy; Copyright 2022 Medusa Software Ltd. | Your use of this site and our products is governed by our <a href="{{ url('terms-of-use') }}">Terms of Use & Disclaimer</a></small>
          </p>
        </div>
      </div>

    </footer>
    <!-- END Footer -->

    <script src="{{ url('assets/js/core.min.js') }}"></script>

    <script src="{{ url('assets/js/thesaas.min.js') }}"></script>

    <script src="{{ url('assets/js/script.js') }}"></script>

    @yield('scripts')
  </body>
</html>
