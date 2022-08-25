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
    <link
        href="{{asset("styleone/css/css2.css?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap")}}"
        rel="stylesheet">

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


    <!-- preloader -->
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
    <!-- preloader end -->


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


    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="styleone/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
    </div><!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-section" style="background-image: url({{asset("styleone/images/banner/banner-1.jpg")}});">
        <div class="auto-container">
            <div class="inner-container">
                <div class="content-box centred">
                    <h2>

                        @lang('messages.h4v2')
                    </h2>
                    <p>
                        @lang('messages.h4p')
                    </p>
                </div>
                <div class="search-field">
                    <div class="tabs-box">
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons centred clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-1">
                                    @lang('messages.BUY')
                                </li>
                                <li class="tab-btn" data-tab="#tab-2">
                                    @lang('messages.RENT')
                                </li>
                            </ul>
                        </div>
                        <div class="tabs-content info-group">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <div class="top-search">
                                        <form action="index.html" method="post" class="search-form">
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>
                                                            @lang('messages.titleSearchBox')
                                                        </label>
                                                        <div class="field-input">
                                                            <i class="fas fa-search"></i>
                                                            <input type="search" name="search-field"
                                                                   placeholder=" @lang('messages.titleSearchBox')"
                                                                   required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>  @lang('messages.location') </label>
                                                        <div class="select-box">
                                                            <i class="far fa-compass"></i>
                                                            <select class="wide">
                                                                <option
                                                                    data-display="@lang('messages.location')"> @lang('messages.location')</option>
                                                                <option value="1">New York</option>
                                                                <option value="2">California</option>
                                                                <option value="3">London</option>
                                                                <option value="4">Maxico</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>@lang('messages.PropertyType')</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                                <option data-display="@lang('messages.AllType')">
                                                                    @lang('messages.AllType')
                                                                </option>
                                                                <option value="1">Laxury</option>
                                                                <option value="2">Classic</option>
                                                                <option value="3">Modern</option>
                                                                <option value="4">New</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-btn">
                                                <button type="submit"><i class="fas fa-search"></i>
                                                    @lang('messages.searchbtn')
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="inner-box">
                                    <div class="top-search">
                                        <form action="{{url('/v2')}}" method="post" class="search-form">
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>
                                                            @lang('messages.titleSearchBox')
                                                        </label>
                                                        <div class="field-input">
                                                            <i class="fas fa-search"></i>
                                                            <input type="search" name="search-field"
                                                                   placeholder="@lang('messages.titleSearchBox')"
                                                                   required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>@lang('messages.location')</label>
                                                        <div class="select-box">
                                                            <i class="far fa-compass"></i>
                                                            <select class="wide">
                                                                <option data-display="@lang('messages.location')">
                                                                    @lang('messages.location')
                                                                </option>
                                                                <option value="1">New York</option>
                                                                <option value="2">California</option>
                                                                <option value="3">London</option>
                                                                <option value="4">Maxico</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>
                                                            @lang('messages.PropertyType')
                                                        </label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                                <option data-display="@lang('messages.PropertyType')">
                                                                    @lang('messages.PropertyType')
                                                                </option>
                                                                <option value="1">Laxury</option>
                                                                <option value="2">Classic</option>
                                                                <option value="3">Modern</option>
                                                                <option value="4">New</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-btn">
                                                <button type="submit"><i class="fas fa-search"></i>
                                                    @lang('messages.Search')
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="switch_btn_one ">
                                        <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">
                                            @lang('messages.AdvancedSearch')
                                            <i class="fas fa-angle-down"></i></button>
                                        <div class="advanced-search">
                                            <div class="close-btn">
                                                <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Distance from Location</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                                <option data-display="Distance from Location">Distance
                                                                    from Location
                                                                </option>
                                                                <option value="1">Max Bath</option>
                                                                <option value="2">Within 1 Mile</option>
                                                                <option value="3">Within 2 Mile</option>
                                                                <option value="4">Within 3 Mile</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Bedrooms</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                                <option data-display="Max Rooms">Max Rooms</option>
                                                                <option value="1">One Rooms</option>
                                                                <option value="2">Two Rooms</option>
                                                                <option value="3">Three Rooms</option>
                                                                <option value="4">Four Rooms</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Sort by</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                                <option data-display="Most Popular">Most Popular
                                                                </option>
                                                                <option value="1">Top Rating</option>
                                                                <option value="2">New Rooms</option>
                                                                <option value="3">Classic Rooms</option>
                                                                <option value="4">Luxry Rooms</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Floor</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                                <option data-display="Select Floor">Select Floor
                                                                </option>
                                                                <option value="1">One Floor</option>
                                                                <option value="2">Two Floor</option>
                                                                <option value="3">Three Floor</option>
                                                                <option value="4">Four Floor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Bath</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                                <option data-display="Max Bath">Max Bath</option>
                                                                <option value="1">Max Bath</option>
                                                                <option value="2">Max Bath</option>
                                                                <option value="3">Max Bath</option>
                                                                <option value="4">Max Bath</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Agencies</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                                <option data-display="Any Agency">Any Agency</option>
                                                                <option value="1">Any Agency</option>
                                                                <option value="2">Agency 01</option>
                                                                <option value="3">Agency 02</option>
                                                                <option value="4">Agency 03</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="range-box">
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="price-range">
                                                            <h6>Select Price Range</h6>
                                                            <div class="range-input">
                                                                <div class="input"><input type="text"
                                                                                          class="property-amount"
                                                                                          name="field-name" readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="price-range-slider"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="area-range">
                                                            <h6>Select Area</h6>
                                                            <div class="range-input">
                                                                <div class="input"><input type="text" class="area-range"
                                                                                          name="field-name" readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="area-range-slider"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- category-section -->
    <section class="category-section centred">
        <div class="auto-container">
            <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <ul class="category-list clearfix">
                    <li>
                        <div class="category-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-1"></i></div>
                                <h5><a href="property-details.html">
                                        @lang('messages.Residential')
                                    </a></h5>
                                <span>52</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="category-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-2"></i></div>
                                <h5><a href="property-details.html">

                                        @lang('messages.Commercial')
                                    </a></h5>
                                <span>20</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="category-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-3"></i></div>
                                <h5><a href="property-details.html">
                                        @lang('messages.Appertment')

                                    </a></h5>
                                <span>35</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="category-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-4"></i></div>
                                <h5><a href="property-details.html">@lang('messages.Industrial')</a></h5>
                                <span>10</span>
                            </div>
                        </div>
                    </li>

                </ul>
                <div class="more-btn"><a href="categories.html"
                                         class="theme-btn btn-one">@lang('messages.AllCategories')</a></div>
            </div>
        </div>
    </section>
    <!-- category-section end -->


    <!-- feature-section -->
    <section class="feature-section sec-pad bg-color-1">
        <div class="auto-container">
            <div class="sec-title centred">

                <h2>
                    @lang('messages.FeaturedProperty')
                </h2>

            </div>
            <div class="row clearfix">
                @foreach($estate as $itemestate)
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="styleone/images/feature/feature-1.jpg" alt="">
                                    </figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">
                                        @lang('messages.SponsoredM')
                                    </span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        {{\App\Helpers\Helper::EstateType($itemestate->EstateTypeId)}}
                                        <div class="buy-btn pull-right"><a href="property-details.html">
                                                @if($itemestate->advType == 'rent')
                                                    @lang('messages.RENT')
                                                @else
                                                    @lang('messages.BUY')
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                    <div class="title-text">
                                        <h4>
                                            <a href="{{url('v2/Estate/'.$itemestate->TrackingCode)}}">
                                                {{\App\Helpers\Helper::EstatetypeRegion($itemestate->RegionId)}}
                                                -
                                                @if(session()->get('locale') == 'en')
                                                    {{$itemestate->Address}}
                                                @elseif(session()->get('locale') == 'ku')
                                                    {{$itemestate->address_ku}}
                                                @endif
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">

                                            <h4>
                                                @if($itemestate->advType=='rent')
                                                    @if(empty($itemestate->RentAmount))
                                                        {{number_format($itemestate->price_rahan)}}
                                                    @else
                                                        {{number_format($itemestate->RentAmount)}}
                                                    @endif
                                                @else
                                                    {{number_format($itemestate->price)}}
                                                @endif
                                            </h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li>
                                                <a href="{{url('v2/Estate/'.$itemestate->TrackingCode)}}"><i class="icon-12"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{url('v2/Estate/'.$itemestate->TrackingCode)}}"><i class="icon-13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        @if(session()->get('locale') == 'en')
                                            {{substr($itemestate->ComplimentalDescription,0,30)}}
                                        @elseif(session()->get('locale') == 'ku')
                                            {{substr($itemestate->ComplimentalDescriptionKu,0,80)}}

                                        @endif

                                    </p>
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>{{$itemestate->RoomNumber}} @lang('messages.beds')</li>
                                        <li><i class="icon-16"></i> {{$itemestate->LandTotalSquare}}   @lang('messages.Ft')</li>
                                    </ul>
                                    <div class="btn-box">
                                        <a href="{{url('v2/Estate/'.$itemestate->TrackingCode)}}" class="theme-btn btn-two">

                                            @lang('messages.Details')
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="more-btn centred"><a href="property-list.html" class="theme-btn btn-one">
                    @lang('messages.All')
                </a>
            </div>
        </div>
    </section>
    <!-- feature-section end -->


    <!-- video-section -->
    <section class="video-section centred" style="background-image: url(styleone/images/background/video-1.jpg);">
        <div class="auto-container">
            <div class="video-inner">
                <div class="video-btn">
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&t=28s" class="lightbox-image"
                       data-caption=""><i class="icon-17"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- video-section end -->











    <!-- place-section -->
    <section class="place-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">

                <h2>@lang('messages.pouplar')</h2>
                <p>
                    @lang('messages.pouplarText')
                </p>
            </div>
            <div class="sortable-masonry">
                <div class="items-container row clearfix">
                    <div
                        class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="styleone/images/resource/place-1.jpg" alt="">
                                </figure>
                                <div class="text">
                                    <h4><a href="categories.html">  @lang('messages.Erbil')</a></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand illustration print software logo">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="styleone/images/resource/place-2.jpg" alt="">
                                </figure>
                                <div class="text">
                                    <h4><a href="categories.html"> @lang('messages.Sulaymaniyah')</a></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="styleone/images/resource/place-3.jpg" alt="">
                                </figure>
                                <div class="text">
                                    <h4><a href=""> @lang('messages.Baghdad')</a></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-8 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="styleone/images/resource/place-4.jpg" alt="">
                                </figure>
                                <div class="text">
                                    <h4><a href="">  @lang('messages.Karbala') </a></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- place-section end -->


    <!-- team-section -->
    <section class="team-section sec-pad centred bg-color-1">
        <div class="pattern-layer" style="background-image: url({{asset("styleone/images/shape/shape-1.png")}});"></div>
        <div class="auto-container">
            <div class="sec-title">
                <h5>@lang('messages.Agencies')</h5>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="styleone/images/team/team-1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="agents-details.html">@lang('messages.namecompany')</a></h4>

                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="styleone/images/team/team-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="agents-details.html">@lang('messages.namecompany')</a></h4>

                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="styleone/images/team/team-3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="agents-details.html">@lang('messages.namecompany')</a></h4>

                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="styleone/images/team/team-4.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="agents-details.html">@lang('messages.namecompany')</a></h4>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="styleone/images/team/team-5.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="agents-details.html">@lang('messages.namecompany')</a></h4>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end -->


    <!-- cta-section -->
    <section class="cta-section bg-color-2">
        <div class="pattern-layer" style="background-image: url(styleone/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="text pull-left">
                    <h2>@lang('messages.Finding')</h2>
                </div>
                <div class="btn-box pull-right">
                    <a href="property-details.html" class="theme-btn btn-three">@lang('messages.RENT')</a>
                    <a href="index.html" class="theme-btn btn-one">@lang('messages.BUY')</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->





    <!-- download-section -->
    <section class="download-section bg-color-3">
        <div class="pattern-layer" style="background-image: url({{asset("styleone/images/shape/shape-3.png")}});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image image-1 wow fadeInUp animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms"><img src="styleone/images/resource/download-1.png" alt="">
                        </figure>
                        <figure class="image image-2 wow fadeInUp animated" data-wow-delay="300ms"
                                data-wow-duration="1500ms"><img src="styleone/images/resource/download-2.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                    <div class="content_block_1">
                        <div class="content-box">
                            <span>Download</span>
                            <h2>@lang('messages.FindingText')</h2>
                            <div class="download-btn">
                                <a href="" class="app-store">
                                    <i class="fab fa-apple"></i>
                                    <p>Download on</p>
                                    <h4>App Store</h4>
                                </a>
                                <a href="" class="google-play">
                                    <i class="fab fa-google-play"></i>
                                    <p>Get It On</p>
                                    <h4>Google Play</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- download-section end -->


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget about-widget">
                            <div class="widget-title">
                                <h3>@lang('messages.menu4')</h3>
                            </div>
                            <div class="text">
                              <p>
                                  @lang('messages.AboutUs')
                              </p>
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
                                    <li><a href="">@lang('messages.menu4')</a></li>
                                    <li><a href="">@lang('messages.menu5')</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <div class="widget-title">
                                <h3>@lang('messages.menu5')</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>

                                    </li>
                                    <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305) 587-3407</a>
                                    </li>
                                    <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@koshkizinwe.com</a>
                                    </li>
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
                    <figure class="footer-logo"><a href="index.html"><img src="styleone/images/footer-logo.png" alt=""></a>
                    </figure>
                    <div class="copyright pull-left">
                        <p><a href="#">koshkizinwe</a> &copy; 2022 All Right Reserved</p>
                    </div>

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
<script>
    $(".languagepart li a").on('click', function (e) {


        var url = "{{ route('changeLang') }}";
        e.preventDefault();
        var thdatlantext = $(this).data("lantext");
        window.location.href = '/lang/change' + "?lang=" + $(this).data("lantext");
    });
</script>
</body>

</html>
