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
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container">

        <div class="topbar-left">
          <button class="topbar-toggler">&#9776;</button>
          <a class="topbar-brand" href="/">
            <img id="logo-default" class="logo-default" src="{{ url('assets/img/logo-small.png') }}" alt="logo">
            <img id="logo-inverse" class="logo-inverse" src="{{ url('assets/img/logo-light.png') }}" alt="logo">
          </a>
        </div>

        <div class="topbar-right">
          <ul class="topbar-nav nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/#section-intro">Introduction</a></li>
            <li class="nav-item"><a class="nav-link" href="/#section-features">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="/components">Components</a></li>
            <li class="nav-item"><a class="nav-link" href="/insights">Insights</a></li>
            <li class="nav-item"><a class="nav-link" href="/#section-pricing">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="/faq">FAQ</a></li>
          </ul>
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
              <a href="index.html"><img src="{{ url('assets/img/logo-02.png') }}" alt="logo"></a>
            </p>
          </div>

          <div class="col-12 col-lg-8">
            <ul class="nav nav-primary nav-hero">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="block-feature.html">Features</a>
              </li>
              <li class="nav-item hidden-sm-down">
                <a class="nav-link" href="page-pricing.html">Pricing</a>
              </li>
              <li class="nav-item hidden-sm-down">
                <a class="nav-link" href="page-contact.html">Contact</a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-lg-2">
            <div class="social text-center text-lg-right">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>
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
