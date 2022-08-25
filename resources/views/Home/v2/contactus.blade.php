<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>
        koshki Real Estate
    </title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{asset("styleone/images/favicon.ico")}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="{{asset("styleone/css/css2.css?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap")}}" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{asset("styleone/css/font-awesome-all.css")}}" rel="stylesheet">
    <link href="{{asset("styleone/css/flaticon.css")}}" rel="stylesheet">
    <link href="{{asset("styleone/css/owl.css")}}" rel="stylesheet">
    <link href="{{asset("styleone/css/bootstrap.css")}}" rel="stylesheet">
    <link href="{{asset("styleone/css/jquery.fancybox.min.css")}}" rel="stylesheet">
    <link href="{{asset("styleone/css/animate.css")}}" rel="stylesheet">
    <link href="{{asset("styleone/css/jquery-ui.css")}}" rel="stylesheet">
    <link href="{{asset("styleone/css/nice-select.css")}}" rel="stylesheet">
    <link href="{{asset("styleone/css/color/theme-color.css")}}" id="jssDefault" rel="stylesheet">
    <link href="{{asset("styleone/css/switcher-style.css")}}" rel="stylesheet">
    <link href="{{asset("styleone/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("styleone/css/responsive.css")}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

<div class="boxed_wrapper">


    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close"><i class="far fa-times"></i></div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                        <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                        <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                        <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                        <span data-text-preloader="k" class="letters-loading">
                               k
                            </span>
                        <span data-text-preloader="o" class="letters-loading">
                               o
                            </span>
                        <span data-text-preloader="s" class="letters-loading">
                               s
                            </span>
                        <span data-text-preloader="h" class="letters-loading">
                               h
                            </span>
                        <span data-text-preloader="k" class="letters-loading">
                               k
                            </span>
                        <span data-text-preloader="i" class="letters-loading">
                               i
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- switcher menu -->
    <div class="switcher">
        <div class="switch_btn">
            <button><i class="fas fa-palette"></i></button>
        </div>
        <div class="switch_menu">
            <!-- color changer -->
            <div class="switcher_container">
                <ul id="styleOptions" title="switch styling">
                    <li>
                        <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end switcher menu -->



@include('Home.v2.Header')

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{asset("styleone/images/background/page-title.jpg")}});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>@lang('messages.menu5')</h1>
                <ul class="bread-crumb clearfix">

                    <li>@lang('messages.menu5')</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-info-section -->
    <section class="contact-info-section sec-pad centred">
        <div class="auto-container">
            <div class="sec-title">
                <h5>@lang('messages.menu5')</h5>

            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-32"></i></div>
                            <h4>Email Address</h4>
                            <p><a href="mailto:info@example.com">info@example.com</a><br><a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-33"></i></div>
                            <h4>Phone Number</h4>
                            <p><a href="tel:+23055873407">+2(305) 587-3407</a><br><a href="tel:+23055873408">+2(305) 587-3408</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-34"></i></div>
                            <h4>Office Address</h4>
                            <p>214 West Arnold St. New York, <br>NY 10002</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->


    <!-- contact-section -->
    <section class="contact-section bg-color-1">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h5>Contact</h5>
                            <h2>Contact Us</h2>
                        </div>
                        <div class="form-inner">
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                    <div class="google-map-area">
                        <div class="google-map" id="contact-google-map" data-map-lat="40.712776" data-map-lng="-74.005974" data-icon-path="assets/images/icons/map-marker.png" data-map-title="Brooklyn, New York, United Kingdom" data-map-zoom="12" data-markers='{
                                    "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                }'>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->






    <footer class="main-footer">
        <div class="footer-top bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget about-widget">
                            <div class="widget-title">
                                <h3>@lang('messages.AboutUs')</h3>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor amet consetetur adi pisicing elit sed eiusm tempor in cididunt ut labore dolore magna aliqua enim ad minim venitam</p>
                                <p>Quis nostrud exercita laboris nisi ut aliquip commodo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-70">
                            <div class="widget-title">
                                <h3>@lang('messages.Support')</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list class">
                                    <li><a href="index.html">About Us</a></li>
                                    <li><a href="index.html">Listing</a></li>
                                    <li><a href="index.html">How It Works</a></li>
                                    <li><a href="index.html">Our Services</a></li>
                                    <li><a href="index.html">Our Blog</a></li>
                                    <li><a href="index.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget post-widget">
                            <div class="widget-title">
                                <h3>@lang('messages.Featured')</h3>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                    <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                    <p>Mar 25, 2020</p>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                    <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
                                    <p>Mar 24, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <div class="widget-title">
                                <h3>@lang('messages.Support')</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                    <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                    <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                    <div class="copyright pull-left">
                        <p><a href="index.html">Realshed</a> &copy; 2021 All Right Reserved</p>
                    </div>
                    <ul class="footer-nav pull-right clearfix">
                        <li><a href="index.html">Terms of Service</a></li>
                        <li><a href="index.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fal fa-angle-up"></span>
    </button>
</div>


<!-- jequery plugins -->
<script src="{{asset("styleone/js/jquery.js")}}"></script>
<script src="{{asset("styleone/js/popper.min.js")}}"></script>
<script src="{{asset("styleone/js/bootstrap.min.js")}}"></script>
<script src="{{asset("styleone/js/owl.js")}}"></script>
<script src="{{asset("styleone/js/wow.js")}}"></script>
<script src="{{asset("styleone/js/validation.js")}}"></script>
<script src="{{asset("styleone/js/jquery.fancybox.js")}}"></script>
<script src="{{asset("styleone/js/appear.js")}}"></script>
<script src="{{asset("styleone/js/scrollbar.js")}}"></script>
<script src="{{asset("styleone/js/isotope.js")}}"></script>
<script src="{{asset("styleone/js/jquery.nice-select.min.js")}}"></script>
<script src="{{asset("styleone/js/jQuery.style.switcher.min.js")}}"></script>
<script src="{{asset("styleone/js/jquery-ui.js")}}"></script>
<script src="{{asset("styleone/js/nav-tool.js")}}"></script>



<!-- main-js -->
<script src="{{asset("styleone/js/script.js")}}"></script>

</body><!-- End of .page_wrapper -->
</html>
