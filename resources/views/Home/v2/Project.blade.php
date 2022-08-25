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
    <section class="page-title-two bg-color-1 centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{asset("styleone/images/shape/shape-9.png")}});"></div>
            <div class="pattern-2" style="background-image: url({{asset("styleone/images/shape/shape-10.png")}});"></div>
        </div>
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>
                    @lang('messages.menu3')
                </h1>

            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- property-page-section -->
    <section class="property-page-section property-list">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="default-sidebar property-sidebar">
                        <div class="filter-widget sidebar-widget">
                            <div class="widget-title">
                                <h5>@lang('messages.menu3')</h5>
                            </div>
                            <div class="widget-content">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display=" @lang('messages.AllType')">
                                            @lang('messages.AllType')
                                        </option>
                                        <option value="1">Villa</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Residential</option>
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="@lang('messages.location')"> @lang('messages.location')</option>
                                        <option value="1">New York</option>
                                        <option value="2">California</option>
                                        <option value="3">London</option>
                                        <option value="4">Maxico</option>
                                    </select>
                                </div>

                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="@lang('messages.beds')">@lang('messages.beds')</option>
                                        <option value="1">2+ Rooms</option>
                                        <option value="2">3+ Rooms</option>
                                        <option value="3">4+ Rooms</option>
                                        <option value="4">5+ Rooms</option>
                                    </select>
                                </div>


                                <div class="filter-btn">
                                    <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;
                                        @lang('messages.Search')
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="category-widget sidebar-widget">
                            <div class="widget-title">
                                <h5>@lang('messages.Property')</h5>
                            </div>
                            <ul class="category-list clearfix">
                                <li><a href="property-details.html">@lang('messages.RENT') <span>(200)</span></a></li>
                                <li><a href="property-details.html">@lang('messages.BUY') <span>(700)</span></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left">
                                <h5>Search Reasults: <span>Showing 1-5 of 20 Listings</span></h5>
                            </div>
                            <div class="right-column pull-right clearfix">
                                <div class="short-box clearfix">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Sort by: Newest">Sort by: Newest</option>
                                            <option value="1">New Arrival</option>
                                            <option value="2">Top Rated</option>
                                            <option value="3">Offer Place</option>
                                            <option value="4">Most Place</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="short-menu clearfix">
                                    <button class="list-view on"><i class="icon-35"></i></button>
                                    <button class="grid-view"><i class="icon-36"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper list">
                            <div class="deals-list-content list-item">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/resource/deals-3.jpg" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$30,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="assets/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/resource/deals-4.jpg" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$20,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="assets/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/resource/deals-5.jpg" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$35,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="assets/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/resource/deals-6.jpg" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Apartment in Glasgow</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$45,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="assets/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="assets/images/resource/deals-7.jpg" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Family Home For Sale</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$40,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="assets/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                            <h6>Michael Bean</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$30,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="assets/images/feature/feature-2.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                                            <h6>Robert Niro</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$45,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="assets/images/feature/feature-3.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg" alt=""></figure>
                                                            <h6>Keira Mel</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$63,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="assets/images/feature/feature-4.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                            <h6>Michael Bean</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="property-details.html">Home in Merrick Way</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$30,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="assets/images/feature/feature-5.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                                            <h6>Robert Niro</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="property-details.html">Apartment in Glasgow</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$45,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="assets/images/feature/feature-6.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg" alt=""></figure>
                                                            <h6>Keira Mel</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="property-details.html">Family Home For Sale</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$63,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <li><a href="property-list.html" class="current">1</a></li>
                                <li><a href="property-list.html">2</a></li>
                                <li><a href="property-list.html">3</a></li>
                                <li><a href="property-list.html"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- property-page-section end -->


    <!-- subscribe-section -->
    <section class="subscribe-section bg-color-3">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div class="text">
                        <span>Subscribe</span>
                        <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                    <div class="form-inner">
                        <form action="contact.html" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email" required="">
                                <button type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget about-widget">
                            <div class="widget-title">
                                <h3>About</h3>
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
                                <h3>Services</h3>
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
                                <h3>Top News</h3>
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
                                <h3>Contacts</h3>
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
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fal fa-angle-up"></span>
    </button>
</div>


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
<script src="{{asset("styleone/js/product-filter.js")}}"></script>

<!-- main-js -->
<script src="{{asset("styleone/js/script.js")}}"></script>

</body><!-- End of .page_wrapper -->
</html>
