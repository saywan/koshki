<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
    <meta name="description" content="koshkizinwe - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="{{asset("stylethree/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("stylethree/css/style.css")}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Title -->
    <title>
        Koshki-Real Estate
    </title>
    <!-- Favicon -->
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon">
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="maxw1600 m0a">
<div class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->

@include('Home.v4.Header')
<!-- Modal -->
    <div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body container pb20">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile" aria-selected="false">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content container" id="myTabContent">
                        <div class="row mt25 tab-pane fade show active" id="home" role="tabpanel"
                             aria-labelledby="home-tab">
                            <div class="col-lg-6 col-xl-6">
                                <div class="login_thumb">
                                    <img class="img-fluid w100" src="/stylethree/images/resource/login.jpg"
                                         alt="login.jpg">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="login_form">
                                    <form action="#">
                                        <div class="heading">
                                            <h4>Login</h4>
                                        </div>
                                        <div class="row mt25">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-fb btn-block"><i
                                                        class="fa fa-facebook float-left mt5"></i> Login with Facebook
                                                </button>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-googl btn-block"><i
                                                        class="fa fa-google float-left mt5"></i> Login with Google
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                                                   placeholder="User Name Or Email">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="flaticon-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="input-group form-group">
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Password">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="flaticon-password"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                            <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                            <a class="btn-fpswd float-right" href="#">Lost your password?</a>
                                        </div>
                                        <button type="submit" class="btn btn-log btn-block btn-thm">Log In</button>
                                        <p class="text-center">Don't have an account? <a class="text-thm" href="#">Register</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="col-lg-6 col-xl-6">
                                <div class="regstr_thumb">
                                    <img class="img-fluid w100" src="/stylethree/images/resource/regstr.jpg"
                                         alt="regstr.jpg">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="sign_up_form">
                                    <div class="heading">
                                        <h4>Register</h4>
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-block btn-fb"><i
                                                        class="fa fa-facebook float-left mt5"></i> Login with Facebook
                                                </button>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-block btn-googl"><i
                                                        class="fa fa-google float-left mt5"></i> Login with Google
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" id="exampleInputName"
                                                   placeholder="User Name">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="flaticon-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="email" class="form-control" id="exampleInputEmail2"
                                                   placeholder="Email">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="password" class="form-control" id="exampleInputPassword2"
                                                   placeholder="Password">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="flaticon-password"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="password" class="form-control" id="exampleInputPassword3"
                                                   placeholder="Re-enter password">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="flaticon-password"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group ui_kit_select_search mb0">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="SelectRole">Single User</option>
                                                <option data-tokens="Agent/Agency">Agent</option>
                                                <option data-tokens="SingleUser">Multi User</option>
                                            </select>
                                        </div>
                                        <div class="form-group custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                                            <label class="custom-control-label" for="exampleCheck2">I have read and
                                                accept the Terms and Privacy Policy?</label>
                                        </div>
                                        <button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
                                        <p class="text-center">Already have an account? <a class="text-thm" href="#">Log
                                                In</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <div class="main_logo_home2 text-center">
                    <img class="nav_logo_img img-fluid mt20" src="{{asset("/stylethree/images/koshkiFinal.png")}}"
                         alt="header-logo2.png">
                    <span class="mt20">koshki zinwe</span>
                </div>
                <ul class="menu_bar_home2">
                    <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a>
                    </li>
                    <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                </ul>
            </div>
        </div><!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
            <ul>
                <li><span>Home</span>
                    <ul>
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index2.html">Home 2</a></li>
                        <li><a href="index3.html">Home 3</a></li>
                        <li><a href="index4.html">Home 4</a></li>
                        <li><a href="index5.html">Home 5</a></li>
                        <li><a href="index6.html">Home 6</a></li>
                        <li><a href="index7.html">Home 7</a></li>
                        <li><a href="index8.html">Home 8</a></li>
                        <li><a href="index9.html">Home 9</a></li>
                        <li><a href="index10.html">Home 10</a></li>
                    </ul>
                </li>
                <li><span>Listing</span>
                    <ul>
                        <li><span>Listing Grid</span>
                            <ul>
                                <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
                                <li><a href="page-listing-grid-v2.html">Grid v2</a></li>
                                <li><a href="page-listing-grid-v3.html">Grid v3</a></li>
                                <li><a href="page-listing-grid-v4.html">Grid v4</a></li>
                                <li><a href="page-listing-grid-v5.html">Grid v5</a></li>
                                <li><a href="page-listing-full-width-grid.html">Grid Fullwidth</a></li>
                            </ul>
                        </li>
                        <li><span>Listing Style</span>
                            <ul>
                                <li><a href="page-listing-parallax.html">Parallax Style</a></li>
                                <li><a href="page-listing-slider.html">Slider Style</a></li>
                                <li><a href="page-listing-map.html">Map Header</a></li>
                            </ul>
                        </li>
                        <li><span>Listing Half</span>
                            <ul>
                                <li><a href="page-listing-half-map-v1.html">Map V1</a></li>
                                <li><a href="page-listing-half-map-v2.html">Map V2</a></li>
                                <li><a href="page-listing-half-map-v3.html">Map V3</a></li>
                                <li><a href="page-listing-half-map-v4.html">Map V4</a></li>
                            </ul>
                        </li>
                        <li><span>Agent View</span>
                            <ul>
                                <li><a href="page-listing-agent-v1.html">Agent V1</a></li>
                                <li><a href="page-listing-agent-v2.html">Agent V2</a></li>
                                <li><a href="page-listing-agent-v3.html">Agent Details</a></li>
                            </ul>
                        </li>
                        <li><span>Agencies View</span>
                            <ul>
                                <li><a href="page-agencies-list-v1.html">Agencies V1</a></li>
                                <li><a href="page-agencies-list-v2.html">Agencies V2</a></li>
                                <li><a href="page-agencies-list-v3.html">Agencies Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><span>Property</span>
                    <ul>
                        <li><span>Property</span>
                            <ul>
                                <li><a href="page-dashboard.html">Dashboard</a></li>
                                <li><a href="page-my-properties.html">My Properties</a></li>
                                <li><a href="page-add-new-property.html">Add New Property</a></li>
                            </ul>
                        </li>
                        <li><span>Listing Single</span>
                            <ul>
                                <li><a href="page-listing-single-v1.html">Single V1</a></li>
                                <li><a href="page-listing-single-v2.html">Single V2</a></li>
                                <li><a href="page-listing-single-v3.html">Single V3</a></li>
                                <li><a href="page-listing-single-v4.html">Single V4</a></li>
                                <li><a href="page-listing-single-v5.html">Single V5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><span>Blog</span>
                    <ul>
                        <li><a href="page-blog-v1.html">Blog List 1</a></li>
                        <li><a href="page-blog-grid.html">Blog List 2</a></li>
                        <li><a href="page-blog-single.html">Single Post</a></li>
                    </ul>
                </li>
                <li><span>Pages</span>
                    <ul>
                        <li><span>Shop</span>
                            <ul>
                                <li><a href="page-shop.html">Shop</a></li>
                                <li><a href="page-shop-single.html">Shop Single</a></li>
                                <li><a href="page-shop-cart.html">Cart</a></li>
                                <li><a href="page-shop-checkout.html">Checkout</a></li>
                                <li><a href="page-shop-order.html">Order</a></li>
                            </ul>
                        </li>
                        <li><a href="page-about.html">About Us</a></li>
                        <li><a href="page-gallery.html">Gallery</a></li>
                        <li><a href="page-faq.html">Faq</a></li>
                        <li><a href="page-login.html">LogIn</a></li>
                        <li><a href="page-compare.html">Membership</a></li>
                        <li><a href="page-compare2.html">Membership 2</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-service.html">Service</a></li>
                        <li><a href="page-error.html">404 Page</a></li>
                        <li><a href="page-terms.html">Terms and Conditions</a></li>
                        <li><a href="page-ui-element.html">UI Elements</a></li>
                    </ul>
                </li>
                <li><a href="page-contact.html">Contact</a></li>
                <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
                <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
                <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span
                            class="flaticon-plus"></span> Create Listing</a></li>
            </ul>
        </nav>
    </div>

    <!-- Home Design -->
    <section class="home-three bg-img3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="home3_home_content text-center">
                        <h1>@lang('messages.h4v2')</h1>
                        <br>
                        <h4>@lang('messages.h4p')</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="home3_home_content">
                        <a class="popup_video_btn popup-iframe popup-youtube" href="../../watch.html?v=R7xbhKIiw4Y"><i
                                class="flaticon-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="home_adv_srch_opt home3">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                   role="tab" aria-controls="pills-home" aria-selected="true">@lang('messages.BUY')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                   role="tab" aria-controls="pills-profile"
                                   aria-selected="false">@lang('messages.RENT')</a>
                            </li>
                        </ul>
                        <div class="tab-content home1_adsrchfrm" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
                                <div class="home1-advnc-search home3">
                                    <ul class="h1ads_1st_list mb0">
                                        <li class="list-inline-item">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                       placeholder="@lang('messages.RENT')">
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>@lang('messages.PropertyList')</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail"
                                                       placeholder="@lang('messages.location')">
                                                <label for="exampleInputEmail"><span
                                                        class="flaticon-maps-and-flags"></span></label>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="small_dropdown2 home3">
                                                <div id="prncgs" class="btn dd_btn">
                                                    <span>@lang('messages.Price')</span>
                                                    <label for="exampleInputEmail2"><span
                                                            class="fa fa-angle-down"></span></label>
                                                </div>
                                                <div class="dd_content2">
                                                    <div class="pricing_acontent">
                                                        <span id="slider-range-value1"></span>
                                                        <span id="slider-range-value2"></span>
                                                        <div id="slider"></div>
                                                        <!-- <input type="text" class="amount" placeholder="$52,239">
                                                        <input type="text" class="amount2" placeholder="$985,14">
                                                        <div class="slider-range"></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-inline-item">
                                            <div class="search_option_button">
                                                <button type="submit" class="btn btn-thm3">
                                                    @lang('messages.Search')
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                 aria-labelledby="pills-profile-tab">
                                <div class="home1-advnc-search home3">
                                    <ul class="h1ads_1st_list mb0">
                                        <li class="list-inline-item">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputName2"
                                                       placeholder="@lang('messages.RENT')">
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>@lang('messages.PropertyList')</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail3"
                                                       placeholder="@lang('messages.location')">
                                                <label for="exampleInputEmail3"><span
                                                        class="flaticon-maps-and-flags"></span></label>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="small_dropdown2 home3">
                                                <div id="prncgs2" class="btn dd_btn">
                                                    <span>@lang('messages.Price')</span>
                                                    <label><span class="fa fa-angle-down"></span></label>
                                                </div>
                                                <div class="dd_content2">
                                                    <div class="pricing_acontent">
                                                        <input type="text" class="amount" placeholder="$52,239">
                                                        <input type="text" class="amount2" placeholder="$985,14">
                                                        <div class="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-inline-item">
                                            <div class="search_option_button">
                                                <button type="submit" class="btn btn-thm3">
                                                    @lang('messages.Search')
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- Feature Properties -->
    <section id="feature-property" class="feature-property mt80 pb50">
        <div class="container-fluid ovh">
            <br>
            <div class="row">

                <div class="col-lg-12">
                    <div class="main-title mb40 text-center">
                        <h2>@lang('messages.FeaturedProperty')</h2>
                        <p>
                            <a class="float-right" href="#">
                                @lang('messages.All')
                                <span class="flaticon-next"></span></a></p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="feature_property_home3_slider">

                        @foreach($estate as $itemestate)
                            <div class="item">
                                <div class="feat_property home3">
                                    <div class="thumb">
                                        {{--  <img class="img-whp" src="/stylethree/images/property/fp1.jpg" alt="fp1.jpg">--}}
                                        {{\App\Helpers\Helper::GetImageEstate($itemestate->id)}}
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">
                                                        @if($itemestate->advType == 'rent')
                                                            @lang('messages.RENT')
                                                        @else
                                                            @lang('messages.BUY')
                                                        @endif
                                                    </a></li>
                                                <li class="list-inline-item">
                                                    <a href="{{url('v3/Estate/'.$itemestate->TrackingCode)}}">  @lang('messages.SponsoredM')</a>
                                                </li>
                                            </ul>
                                            <ul class="icon mb0">
                                                <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-transfer-1"></span></a></li>
                                                <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-heart"></span></a></li>
                                            </ul>
                                            <a class="fp_price" href="#">
                                                $

                                                @if($itemestate->advType=='rent')
                                                    @if(empty($itemestate->RentAmount))
                                                        {{number_format($itemestate->price_rahan)}}
                                                    @else
                                                        {{number_format($itemestate->RentAmount)}}
                                                    @endif
                                                @else
                                                    {{number_format($itemestate->price)}}
                                                @endif

                                                <small>/mo</small></a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p class="text-thm">
                                                {{\App\Helpers\Helper::EstateType($itemestate->EstateTypeId)}}
                                            </p>
                                            <h4>
                                                @if(session()->get('locale') == 'en')
                                                    {{$itemestate->Address}}
                                                @elseif(session()->get('locale') == 'ku')
                                                    {{$itemestate->address_ku}}
                                                @endif
                                            </h4>
                                            <p><span class="flaticon-placeholder"></span>
                                                {{\App\Helpers\Helper::EstatetypeRegion($itemestate->RegionId)}}

                                            </p>
                                            <ul class="prop_details mb0">
                                                <li class="list-inline-item"><a
                                                        href="{{url('v3/Estate/'.$itemestate->TrackingCode)}}">@lang('messages.beds')
                                                        : {{$itemestate->RoomNumber}}</a></li>

                                                <li class="list-inline-item"><a
                                                        href="{{url('v3/Estate/'.$itemestate->TrackingCode)}}">@lang('messages.Area ')
                                                        : {{$itemestate->LandTotalSquare}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Cities -->
    <section id="property-city" class="property-city pt0 pb30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h2>@lang('messages.Finding')</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb"><img class="img-fluid w100" src="/stylethree/images/property/pc7.jpg"
                                                alt="pc7.jpg"></div>
                        <div class="overlay">
                            <div class="details">
                                <h4>@lang('messages.Erbil')</h4>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb"><img class="img-fluid w100" src="/stylethree/images/property/pc8.jpg"
                                                alt="pc8.jpg"></div>
                        <div class="overlay">
                            <div class="details">
                                <h4>@lang('messages.Sulaymaniyah')</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb"><img class="img-fluid w100" src="/stylethree/images/property/pc9.jpg"
                                                alt="pc9.jpg"></div>
                        <div class="overlay">
                            <div class="details">
                                <h4>@lang('messages.Baghdad')</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb"><img class="img-fluid w100" src="/stylethree/images/property/pc10.jpg"
                                                alt="pc10.jpg"></div>
                        <div class="overlay">
                            <div class="details">
                                <h4>@lang('messages.Baghdad')</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb"><img class="img-fluid w100" src="/stylethree/images/property/pc11.jpg"
                                                alt="pc11.jpg"></div>
                        <div class="overlay">
                            <div class="details">
                                <h4>@lang('messages.Kirkuk')</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Search -->
    <section id="property-search" class="property-search bg-img4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="search_smart_property text-center">
                        <h2>
                            @lang('messages.lookingfor')
                        </h2>
                        <p>
                            @lang('messages.lookingforp')
                        </p>
                        <button class="btn ssp_btn">  @lang('messages.Search')</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Cities -->
    <section id="best-property" class="best-property pt100 pb0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h2>
                            @lang('messages.Sponsored')
                        </h2>
                        <p>
                            @lang('messages.SponsoredText')
                            <a class="float-right" href="#">@lang('messages.All')
                                <span class="flaticon-next"></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($estate as $itemestate)

                    <div
                        class="col-sm-6 col-lg-4  @if(session()->get('locale') == 'en') text-left @else text-right @endif">
                        <div class="feat_property home3">
                            <div class="thumb">
                                {{-- <img class="img-whp" src="/stylethree/images/property/fp4.jpg" alt="fp4.jpg">--}}
                                {{\App\Helpers\Helper::GetImageEstate($itemestate->id)}}
                                <div class="thmb_cntnt">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">
                                                @if($itemestate->advType == 'rent')
                                                    @lang('messages.RENT')
                                                @else
                                                    @lang('messages.BUY')
                                                @endif
                                            </a></li>
                                        <li class="list-inline-item dn"></li>
                                    </ul>
                                    <ul class="icon mb0">
                                        <li class="list-inline-item"><a href="#"><span
                                                    class="flaticon-transfer-1"></span></a></li>
                                        <li class="list-inline-item"><a href="#"><span
                                                    class="flaticon-heart"></span></a>
                                        </li>
                                    </ul>
                                    <a class="fp_price" href="#">
                                        $
                                        @if($itemestate->advType=='rent')
                                            @if(empty($itemestate->RentAmount))
                                                {{number_format($itemestate->price_rahan)}}
                                            @else
                                                {{number_format($itemestate->RentAmount)}}
                                            @endif
                                        @else
                                            {{number_format($itemestate->price)}}
                                        @endif
                                        <small>/mo</small></a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p class="text-thm">
                                        {{\App\Helpers\Helper::EstateType($itemestate->EstateTypeId)}}
                                    </p>
                                    <h4>
                                        @if(session()->get('locale') == 'en')
                                            {{$itemestate->Address}}
                                        @elseif(session()->get('locale') == 'ku')
                                            {{$itemestate->address_ku}}
                                        @endif
                                    </h4>
                                    <p><span class="flaticon-placeholder"></span>
                                        {{\App\Helpers\Helper::EstatetypeRegion($itemestate->RegionId)}}
                                    </p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a
                                                href="{{url('v3/Estate/'.$itemestate->TrackingCode)}}">@lang('messages.beds')
                                                : {{$itemestate->RoomNumber}}</a></li>

                                        <li class="list-inline-item"><a
                                                href="{{url('v3/Estate/'.$itemestate->TrackingCode)}}">@lang('messages.beds')
                                                : {{$itemestate->LandTotalSquare}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Agents -->
    <section id="our-agents" class="our-agents pt40 pb30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h2> @lang('messages.OurAgents')</h2>
                        <p>
                            @lang('messages.OurAgentsText')
                            <a class="float-right" href="#"> @lang('messages.All') <span
                                    class="flaticon-next"></span></a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div class="our_agent">
                        <div class="thumb">
                            <img class="img-fluid w100" src="/stylethree/images/team/5.jpg" alt="5.jpg">
                            <div class="overylay">
                                <ul class="social_icon">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="details">
                            <h4>@lang('messages.namecompany')</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div class="our_agent">
                        <div class="thumb">
                            <img class="img-fluid w100" src="/stylethree/images/team/6.jpg" alt="6.jpg">
                            <div class="overylay">
                                <ul class="social_icon">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="details">
                            <h4>@lang('messages.namecompany')</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div class="our_agent">
                        <div class="thumb">
                            <img class="img-fluid w100" src="/stylethree/images/team/7.jpg" alt="7.jpg">
                            <div class="overylay">
                                <ul class="social_icon">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="details">
                            <h4>@lang('messages.namecompany')</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div class="our_agent">
                        <div class="thumb">
                            <img class="img-fluid w100" src="/stylethree/images/team/8.jpg" alt="8.jpg">
                            <div class="overylay">
                                <ul class="social_icon">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="details">
                            <h4>@lang('messages.namecompany')</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div class="our_agent">
                        <div class="thumb">
                            <img class="img-fluid w100" src="/stylethree/images/team/9.jpg" alt="9.jpg">
                            <div class="overylay">
                                <ul class="social_icon">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="details">
                            <h4>@lang('messages.namecompany')</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div class="our_agent">
                        <div class="thumb">
                            <img class="img-fluid w100" src="/stylethree/images/team/10.jpg" alt="10.jpg">
                            <div class="overylay">
                                <ul class="social_icon">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="details">
                            <h4>@lang('messages.namecompany')</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer -->
    <section class="footer_one home3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg col-xl">
                    <div class="footer_about_widget home3">
                        <h4>@lang('messages.AboutUs')</h4>
                        <p>@lang('messages.AboutUs')</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg col-xl">
                    <div class="footer_qlink_widget home3">
                        <h4>@lang('messages.Important')</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">@lang('messages.menu4')</a></li>
                            <li><a href="#">@lang('messages.menu5')</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg col-xl">
                    <div class="footer_contact_widget home3">
                        <h4>@lang('messages.Support')</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">info@koshkizinwe.com</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg col-xl">
                    <div class="footer_social_widget home3">
                        <h4>@lang('messages.Featured')</h4>
                        <ul class="mb30">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <a class="scrollToHome text-thm3" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="{{asset("/stylethree/js/jquery-3.3.1.js")}}"></script>
<script type="text/javascript" src="{{asset("/stylethree/js/jquery-migrate-3.0.0.min.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/popper.min.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/jquery.mmenu.all.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/ace-responsive-menu.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/bootstrap-select.min.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/isotop.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/snackbar.min.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/simplebar.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/parallax.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/scrollto.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/jquery-scrolltofixed-min.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/jquery.counterup.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/wow.min.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/slider.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/pricing-slider.js")}}"></script>
<script type="text/javascript" src="{{asset("stylethree/js/timepicker.js")}}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{asset("stylethree/js/script.js")}}"></script>
</body>
</html>
