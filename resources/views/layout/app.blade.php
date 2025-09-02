<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>{{ config('app.name') }}</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset("frontend/assets/img/favicon.ico")}}" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!--== All Magnific Popup CSS ==-->
    <link href="{{ asset("frontend/assets/css/magnific-popup.min.css")}}" rel="stylesheet"/>
    <!--== All Animate CSS ==-->
    <link href="{{ asset("frontend/assets/css/animate.min.css")}}" rel="stylesheet"/>
    <!--== All FontAwesome CSS ==-->
    <link href="{{ asset("frontend/assets/css/font-awesome.min.css")}}" rel="stylesheet"/>
    <!--== All Material Icons CSS ==-->
    <link href="{{ asset("frontend/assets/css/materialdesignicons.min.css")}}" rel="stylesheet"/>
    <!--== All Helper CSS ==-->
    <link href="{{ asset("frontend/assets/css/helper.min.css")}}" rel="stylesheet"/>
    <!--== All Revolution CSS ==-->
    <link href="{{ asset("frontend/assets/css/settings.css")}}" rel="stylesheet"/>
    <!--== All Slicknav CSS ==-->
    <link href="{{ asset("frontend/assets/css/slicknav.min.css")}}" rel="stylesheet"/>
    <!--== All Timeline CSS ==-->
    <link href="{{ asset("frontend/assets/css/timeline.css")}}" rel="stylesheet"/>
    <!--== All Slick Slider CSS ==-->
    <link href="{{ asset("frontend/assets/css/slick.min.css")}}" rel="stylesheet"/>
    <!--== All BootStrap CSS ==-->
    <link href="{{ asset("frontend/assets/css/bootstrap.min.css")}}" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="{{ asset("frontend/assets/css/style.min.css")}}" rel="stylesheet"/>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--== Start Header Area Wrapper ==-->
<header class="header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-5 col-lg-2">
                <!-- Start Logo Area -->
                <div class="logo-area">
                    <a href="{{ route('home') }}"><img src="{{ asset("frontend/assets/logo.jpg") }}" alt="collines-Logo"></a>
                </div>
                <!-- End Logo Area -->
            </div>

            <div class="col-lg-7 d-none d-lg-block">
                <!-- Start Navigation Area -->
                <div class="navigation-area">
                <ul class="main-menu nav">
                    <li><a href="{{ route('home') }}">Home</a></li>

                    <li class="has-submenu"><a href="#">Pages</a>
                        <ul class="submenu-nav submenu-nav-mega">
                            <li class="mega-menu-item">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('faq') }}">F.A.Q</a></li>
                                </ul>
                            </li>
                            <li class="mega-menu-item">
                                <ul>
                                    <li><a href="{{ route('services') }}">Service</a></li>
                                    <li><a href="{{ route('teams') }}">Team</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="{{ route('services') }}">Service</a>
                        <ul class="submenu-nav">
                            <li><a href="{{ route('services') }}">Service</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="{{ route('teams') }}">Team</a>
                        <ul class="submenu-nav">
                            <li><a href="{{ route('teams') }}">Team</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
                </div>
                <!-- End Navigation Area -->
            </div>

            <div class="col-7 col-lg-3">
                <!-- Start Header Action Area -->
                <div class="header-action text-end">
                    <a href="tel:+254728312251" class="tel-no">+254728312251</a>
                    <button class="btn-cog"><i class="fa fa-cog"></i></button>
                    <button class="btn-menu d-lg-none"><i class="fa fa-bars"></i></button>
                </div>
                <!-- End Header Action Area -->
            </div>
        </div>
    </div>
</header>
<!--== End Header Area Wrapper ==-->

@yield('content')

<!--== Start Footer Area Wrapper ==-->
<footer class="footer-area sp-y">
    <div class="footer-top-wrap">
        <div class="container">
            <div class="footer-top-content">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-6">
                        <h2>Ready to Tell Your Story?</h2>
                        <p>Partner with us to create visuals that resonate, inspire, and connect — locally and globally.</p>
                    </div>
                    <div class="col-md-4 col-lg-6 text-md-end mt-sm-25">
                        <a href="{{ route('contact') }}" class="btn-outline">Book a Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget-area sm-top-wt">
        <div class="container">
            <div class="row mtn-40">
                <div class="col-lg-4 order-4 order-lg-0">
                    <div class="widget-item">
                        <div class="about-widget">
                            <a href="index.html"><img src="frontend/assets/logo.jpg" alt="Logo"/></a>
                            <p>Collines Communications is a visual storytelling studio helping brands and individuals share powerful, authentic narratives across Kenya and beyond.</p>

                            <div class="copyright-txt">
                                <p>&copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    {{ config('app.name') }}. All Rights Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 ms-auto">
                    <div class="widget-item">
                        <h4 class="widget-title">Information</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="{{ route('about') }}">Our company</a></li>
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                                <li><a href="{{ route('services') }}">Our services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 ms-auto">
                    <div class="widget-item">
                        <h4 class="widget-title">Quick Links</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="https://instagram.com/collinescomms" target="_blank" rel="noopener">Instagram</a></li>
                                <li><a href="https://twitter.com/CollinesComms" target="_blank" rel="noopener">X (Twitter)</a></li>
                                <li><a href="https://www.youtube.com/@collinescomms" target="_blank" rel="noopener">YouTube</a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=254728312251" target="_blank" rel="noopener">WhatsApp</a></li>
                                <li><a href="mailto:info@collinecommunications.com" target="_blank" rel="noopener">Email</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="widget-item">
                        <h4 class="widget-title">Contact</h4>
                        <div class="widget-body">
                            <address>
                                    Nairobi, Kenya
                                    <br>
                                    info@collinecommunication.com
                                    <br>
                                    (+254) 728312251
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--== End Footer Area Wrapper ==-->

<!-- Scroll Top Button -->
<button class="btn-scroll-top"><i class="mdi mdi-chevron-up"></i></button>

<!-- Start Off Canvas Menu Wrapper -->
<aside class="off-canvas-wrapper off-canvas-cog">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <div class="close-btn">
            <button class="btn-close"><i class="mdi mdi-close"></i></button>
        </div>

        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content mb-sm-30">
            <div class="off-canvas-item">
                <div class="log-in-content-wrap">
                    <h2>Login</h2>
                    <div class="login-form mtn-15">
                        <form action="#" method="post">
                            <div class="form-input-item">
                                <label for="username" class="sr-only">Username</label>
                                <input type="text" id="username" placeholder="Username" required>
                            </div>

                            <div class="form-input-item">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" id="password" placeholder="Password" required>
                            </div>

                            <div class="form-input-item">
                                <button type="submit" class="btn-submit">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="sign-up-notification">
                        <p>Not Resisted? <a href="#">Create Account Now.</a></p>
                    </div>
                </div>
            </div>

            <div class="off-canvas-item mt-sm-30">
                <div class="social-icons">
                    <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://dribbble.com" target="_blank"><i class="fa fa-dribbble"></i></a>
                    <a href="https://pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a>
                </div>
                <div class="copyright-content">
                    <p>&copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        {{ config('app.name') }}. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- End Off Canvas Menu Wrapper -->

<!-- Start Off Canvas Menu Wrapper -->
<aside class="off-canvas-wrapper off-canvas-menu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <!-- Start Off Canvas Header -->
        <div class="close-btn">
            <button class="btn-close"><i class="mdi mdi-close"></i></button>
        </div>

        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content">
            <div class="res-mobile-menu">

            </div>
        </div>
    </div>
</aside>
<!-- End Off Canvas Menu Wrapper -->

<!--=======================Javascript============================-->
<script src="{{ asset("frontend/assets/js/modernizr-3.6.0.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/jquery.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/jquery-migrate.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/bootstrap.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/plugins/waypoint.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/plugins/counterup.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/plugins/instafeed.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/plugins/jquery.appear.js")}}"></script>
<script src="{{ asset("frontend/assets/js/plugins/jquery.slicknav.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/plugins/parallax.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/plugins/slick.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/plugins/magnific-popup.min.js")}}"></script>

<!--=== Active Js ===-->
<script src="{{ asset("frontend/assets/js/active.min.js")}}"></script>

<!-- REVOLUTION JS FILES -->
<script src="{{ asset("frontend/assets/js/revslider/jquery.themepunch.tools.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/revslider/jquery.themepunch.revolution.min.js")}}"></script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset("frontend/assets/js/revslider/extensions/revolution.extension.actions.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/revslider/extensions/revolution.extension.carousel.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/revslider/extensions/revolution.extension.kenburn.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/revslider/extensions/revolution.extension.layeranimation.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/revslider/extensions/revolution.extension.migration.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/revslider/extensions/revolution.extension.navigation.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/revslider/extensions/revolution.extension.parallax.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/revslider/extensions/revolution.extension.slideanims.min.js")}}"></script>
<script src="{{ asset("frontend/assets/js/revslider/extensions/revolution.extension.video.min.js")}}"></script>

<!--=== REVOLUTION JS ===-->
<script src="{{ asset("frontend/assets/js/revslider/rev-active.js")}}"></script>

</body>

</html>