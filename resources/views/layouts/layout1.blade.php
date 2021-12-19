<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            Medusa Money | @yield('title')
        </title>
        <!-- favicon -->
        <link rel=icon href=favicon.ico sizes="20x20" type="image/png">
        <!-- animate -->
        <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}">
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
        <!-- fontawesome -->
        <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
        <!-- flaticon -->
        <link rel="stylesheet" href="{{ url('assets/css/flaticon.css') }}">
        <!-- Hover CSS -->
        <link rel="stylesheet" href="{{ url('assets/css/hover-min.css') }}">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
        <!-- responsive Stylesheet -->
        <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">

        @yield('styles')
    </head>

    <body>
        <!-- back to top area start -->
        <div class="back-to-top">
            <span class="back-top"><i class="fa fa-angle-up"></i></span>
        </div>
        <!-- back to top area end -->
        <!-- Nav -->
        <div class="header-style-01">
            <!-- support bar area end -->
            <nav class="navbar navbar-area navbar-expand-lg nav-style-02">
                <div class="container nav-container startup-nav">
                    <div class="responsive-mobile-menu">
                        <div class="logo-wrapper">
                            <a href="/" class="logo">
                                <img src="{{ url('assets/img/logo-alt.png') }}" alt="">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                        <ul class="navbar-nav">
                            <li class="{{ request()->is('/') ? 'current-menu-item' : '' }}"><a href="/">Home</a></li>
                            <li class="menu-item-has-children {{ request()->is('price-action-oscillator') ? 'current-menu-item' : '' }}">
                                <a href="#">Trading Tools</a>
                                <ul class="sub-menu">
                                    <li><a href="/bar-range-oscillator">Bar Range Oscillator (BRO)</a></li>
                                    <li><a href="/price-action-oscillator">Price Action Oscillator (PAO)</a></li>
                                    <li><a href="/m-nas">M-NAS</a></li>
                                    <li><a href="/m-spy">M-SPY</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('faq') ? 'current-menu-item' : '' }}"><a href="/faq">FAQ</a></li>
                            <li><a href="#idea">Videos</a></li>
                        </ul>
                    </div>
                    <div class="nav-right-content">
                        <div class="btn-wrapper">
                            <a href="/buy-now" class="boxed-btn btn-startup blank">Buy Now</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar area end -->

        @section('content')
        @show

        <!-- footer area start -->
        <footer class="footer-area">
            <div class="footer-top style-02 padding-top-85 padding-bottom-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="footer-widget widget">
                                <div class="about_us_widget">
                                    <a href="/" class="footer-logo"> <img src="{{ url('assets/img/logo-02.png') }}" alt="footer logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="footer-widget widget widget_nav_menu">
                                <ul>
                                    <li><a href="#">Trading Tools</a></li>
                                    <li><a href="/faq">FAQ</a></li>
                                    <li><a href="#">Videos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="footer-widget widget widget_nav_menu">
                                <ul>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <div class="footer-widget widget widget_nav_menu">
                                <div class="download-link margin-top-20">
                                    <a href="#">
                                        <img src="assets/img/download/built-for.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area style-01">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-item">
                                <div class="copyright-area-inner">
                                    © Copyright 2021 Medusa Money. All rights reserved. -- <em>By using this website you are agree to our terms of use.</em>
                                </div>
                                <div class="widget widget_nav_menu">
                                    <ul class="social_share style-01">
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

        <!-- jquery -->
        <script src="{{ url('assets/js/jquery-2.2.4.min.js') }}"></script>
        <!-- bootstrap -->
        <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
        <!-- magnific popup -->
        <script src="{{ url('assets/js/jquery.magnific-popup.js') }}"></script>
        <!-- wow -->
        <script src="{{ url('assets/js/wow.min.js') }}"></script>
        <!-- owl carousel -->
        <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
        <!-- waypoint -->
        <script src="{{ url('assets/js/waypoints.min.js') }}"></script>
        <!-- counterup -->
        <script src="{{ url('assets/js/jquery.counterup.min.js') }}"></script>
        <!-- Water effect -->
        <script src="{{ url('assets/js/jquery.ripples-min.js') }}"></script>
        <!-- VanillaTilt effect -->
        <script src="{{ url('assets/js/tilt.jquery.js') }}"></script>
        <!-- imageloaded -->
        <script src="{{ url('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- isotope -->
        <script src="{{ url('assets/js/isotope.pkgd.min.js') }}"></script>
        <!-- parallax js -->
        <script src="{{ url('assets/js/parallax.js') }}"></script>
        <!-- main js -->
        <script src="{{ url('assets/js/main.js') }}"></script>

        @yield('scripts')
    </body>
</html>
