<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>
        koshki Real Estate
    </title>

    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=" koshki Real Estate"/>
    <meta name="description" content=" koshki Real Estate"/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset("Content/css/plugins.css")}}">
    <link type="text/css" rel="stylesheet" href="{{asset("Content/css/style.css")}}">
    <link type="text/css" rel="stylesheet" href="{{asset("Content/css/color.css")}}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset("Content/images/favicon.ico")}}">
</head>
<body>
<!--loader-->
<div class="loader-wrap">
    <div class="loader-inner">
        <svg>
            <defs>
                <filter id="goo">
                    <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur" />
                    <fecolormatrix in="blur"   values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey" />
                    <fecomposite in="SourceGraphic" in2="gooey" operator="atop"/>
                </filter>
            </defs>
        </svg>
    </div>
</div>
<!--loader end-->
<!-- main -->
<div id="main">

    @include('Home.v1.Header')
    <div id="wrapper">
        <!-- content -->
        <div class="content">
            <!--  section  -->
            <section class="hidden-section single-par2  " data-scrollax-parent="true">
                <div class="bg-wrap bg-parallax-wrap-gradien">
                    <div class="bg par-elem "  data-bg="{{asset("Content/images/bg/12.jpg")}}" data-scrollax="properties: { translateY: '30%' }"></div>
                </div>
                <div class="container">
                    <div class="section-title center-align big-title">
                        <h2><span>@lang('messages.AboutUs')</span></h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h4>
                    </div>
                    <div class="scroll-down-wrap">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll Down To Discover</span>
                    </div>
                </div>
            </section>
            <!--  section  end-->
            <!-- breadcrumbs-->
            <div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap">
                <div class="container">
                    <div class="breadcrumbs-list">
                       <span>@lang('messages.AboutUs')</span>
                    </div>

                </div>
            </div>
            <!-- breadcrumbs end -->
            <!-- section -->
            <section class="gray-bg small-padding">
                <div class="container">
                    <div class="row">
                        <!-- services-item -->
                        <div class="col-md-4">
                            <div class="services-item fl-wrap">
                                <i class="fal fa-headset"></i>
                                <h4>@lang('messages.Support') <span>01</span></h4>



                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- section end-->
            <!-- section -->
            <section>
                <div class="container">
                    <!--about-wrap -->
                    <div class="about-wrap">
                        <div class="row">
                            <div class="col-md-12">

                               <p style="line-height: 50px; text-align: right">
                                   @lang('messages.abouttext')
                               </p>


                            </div>


                        </div>
                    </div>
                    <!-- about-wrap end  -->
                </div>
            </section>




        </div>


        <footer class="main-footer fl-wrap">
            <div class="footer-inner fl-wrap">
                <div class="container">
                    <div class="row">
                        <!-- footer widget-->
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <div class="footer-widget-logo fl-wrap">
                                    <img src="Content/images/logo333.png" alt="logo">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                    Nulla finibus lobortis pulvinar.</p>
                                <div class="fw_hours fl-wrap">
                                    <span>Monday - Friday:<strong> 8am - 6pm</strong></span>
                                    <span>Saturday - Sunday:<strong> 9am - 3pm</strong></span>
                                </div>
                            </div>
                        </div>
                        <!-- footer widget end-->
                        <!-- footer widget-->
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <div class="footer-widget-title fl-wrap">
                                    <h4>@lang('messages.Important')</h4>
                                </div>
                                <ul class="footer-list fl-wrap">
                                    <li><a href="about.html">About Our Company</a></li>
                                    <li><a href="blog.html">Our last News</a></li>
                                    <li><a href="pricing.html">Pricing Plans</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="help.html">Help Center</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer widget end-->
                        <!-- footer widget-->
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <div class="footer-widget-title fl-wrap">
                                    <h4>@lang('messages.Support')</h4>
                                </div>
                                <ul class="footer-contacts fl-wrap">
                                    <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a>
                                    </li>
                                    <li><span><i class="fal fa-map-marker"></i> Adress :</span><a href="#"
                                                                                                  target="_blank">USA
                                            27TH Brooklyn NY</a></li>
                                    <li><span><i class="fal fa-phone"></i> Phone :</span><a
                                            href="#">+7(111)123456789</a></li>
                                </ul>
                                <div class="footer-social fl-wrap">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- footer widget end-->
                        <!-- footer widget-->
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <div class="footer-widget-title fl-wrap">
                                    <h4>@lang('messages.Featured')</h4>
                                </div>
                                <p>Start working with that can provide everything you need </p>
                                <div class="api-links fl-wrap">
                                    <a href="#" class="api-btn color-bg"><i class="fab fa-apple"></i> App Store</a>
                                    <a href="#" class="api-btn color-bg"><i class="fab fa-google-play"></i> Play Market</a>
                                </div>
                            </div>
                        </div>
                        <!-- footer widget end-->
                    </div>
                </div>
            </div>
            <!--sub-footer-->
            <div class="sub-footer gray-bg fl-wrap">
                <div class="container">
                    <div class="copyright"> &#169; 2022 . All rights reserved.</div>
                    <div class="subfooter-nav">
                        <ul class="no-list-style">
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--sub-footer end -->
        </footer>
        <!-- footer end -->
    </div>
    <!-- wrapper end -->
    <!--register form -->
    <div class="main-register-wrap modal">
        <div class="reg-overlay"></div>
        <div class="main-register-holder tabs-act">
            <div class="main-register-wrapper modal_main fl-wrap">
                <div class="main-register-header color-bg">
                    <div class="main-register-logo fl-wrap">
                        <img src="images/white-logo.png" alt="">
                    </div>
                    <div class="main-register-bg">
                        <div class="mrb_pin"></div>
                        <div class="mrb_pin mrb_pin2"></div>
                    </div>
                    <div class="mrb_dec"></div>
                    <div class="mrb_dec mrb_dec2"></div>
                </div>
                <div class="main-register">
                    <div class="close-reg"><i class="fal fa-times"></i></div>
                    <ul class="tabs-menu fl-wrap no-list-style">
                        <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                        <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                    </ul>
                    <!--tabs -->
                    <div class="tabs-container">
                        <div class="tab">
                            <!--tab -->
                            <div id="tab-1" class="tab-content first-tab">
                                <div class="custom-form">
                                    <form method="post"  name="registerform">
                                        <label>Username or Email Address  * <span class="dec-icon"><i class="fal fa-user"></i></span></label>
                                        <input name="email" type="text"    onClick="this.select()" value="">
                                        <div class="pass-input-wrap fl-wrap">
                                            <label >Password  * <span class="dec-icon"><i class="fal fa-key"></i></span></label>
                                            <input name="password" type="password"  autocomplete="off" onClick="this.select()" value="" >
                                            <span class="eye"><i class="fal fa-eye"></i> </span>
                                        </div>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                        <div class="filter-tags">
                                            <input id="check-a3" type="checkbox" name="check">
                                            <label for="check-a3">Remember me</label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit"  class="log_btn color-bg"> LogIn </button>
                                    </form>
                                </div>
                            </div>
                            <!--tab end -->
                            <!--tab -->
                            <div class="tab">
                                <div id="tab-2" class="tab-content">
                                    <div class="custom-form">
                                        <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                            <label >Full Name  * <span class="dec-icon"><i class="fal fa-user"></i></span></label>
                                            <input name="name" type="text"    onClick="this.select()" value="">
                                            <label>Email Address  * <span class="dec-icon"><i class="fal fa-envelope"></i></span></label>
                                            <input name="email" type="text"    onClick="this.select()" value="">
                                            <div class="pass-input-wrap fl-wrap">
                                                <label >Password  * <span class="dec-icon"><i class="fal fa-key"></i></span></label>
                                                <input name="password" type="password"  autocomplete="off"  onClick="this.select()" value="" >
                                                <span class="eye"><i class="fal fa-eye"></i> </span>
                                            </div>
                                            <div class="filter-tags ft-list">
                                                <input id="check-a2" type="checkbox" name="check">
                                                <label for="check-a2">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms and Conditions</a></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <button type="submit"     class="log_btn color-bg"> Register </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--tab end -->
                        </div>
                        <!--tabs end -->
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div class="soc-log fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#" class="facebook-log"> Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->
    <!--secondary-nav -->

    <!--secondary-nav end -->
    <a class="to-top color-bg"><i class="fas fa-caret-up"></i></a>
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("Content/js/jquery.min.js")}}"></script>
<script src="{{asset("Content/js/plugins.js")}}"></script>
<script src="{{asset("Content/js/scripts.js")}}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places"></script>
<script src="{{asset("Content/js/map-single.js")}}"></script>
</body>

</html>
