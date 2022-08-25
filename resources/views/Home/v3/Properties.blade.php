<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content=" koshki Real Estate">
    <meta name="description" content="koshkizinwe - Real Estate HTML Template">
    <meta name="CreativeLayers" content=" koshki Real Estate">
    <!-- css file -->
    <link rel="stylesheet" href="{{asset("Content/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("Content/css/style.css")}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset("Content/css/responsive.css")}}">
    <!-- Title -->
    <title>
        koshki Real Estate
    </title>
    <!-- Favicon -->
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon"/>
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="preloader"></div>


    <header class="header-nav menu_style_home_one style2 style3 navbar-scrolltofixed stricky main-menu">
        <div class="container-fluid p0">
            <!-- Ace Responsive Menu -->
            <nav>

                <div class="menu-toggle">
                    <img class="nav_logo_img img-fluid" src="{{asset("/Content/images/koshkizinewlogo.jpeg")}}"
                         alt="header-logo.png" style="width: 50px">
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="#" class="navbar_brand float-left dn-smd">
                    <img class="logo1 img-fluid" src="{{asset("/Content/images/koshkizinewlogo.jpeg")}}"
                         alt="header-logo.png">
                    <img class="logo2 img-fluid" src="{{asset("/Content/images/koshkizinewlogo.jpeg")}}"
                         alt="header-logo2.png">

                </a>

                <div class="ht_left_widget float-left">
                    <ul>
                        {{-- <li class="list-inline-item dn-1440">
                             <div class="ht_search_widget">
                                 <div class="header_search_widget">
                                     <form class="form-inline mailchimp_form">
                                         <input type="text" class="form-control" id="inlineFormInputName2" placeholder="What are you looking for?">
                                         <button type="submit" class="btn btn-primary"><span class="flaticon-magnifying-glass"></span></button>
                                     </form>
                                 </div>
                             </div>
                         </li>--}}
                        <li class="list-inline-item list_s dib-1440 dn">
                            <div class="search_overlay">
                                <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                    <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                @include('Home.v3.Header')

            </nav>
        </div>
    </header>

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
                                    <img class="img-fluid w100" src="/Content/images/resource/login.jpg"
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
                                    <img class="img-fluid w100" src="/Content/images/resource/regstr.jpg"
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
                    <img class="nav_logo_img img-fluid mt20" src="/Content/images/header-logo2.png"
                         alt="header-logo2.png">
                    <span class="mt20">koshkizinwe</span>
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

    <!-- Listing Grid View -->

    <section class="our-listing bgc-f7 pb30-991">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="breadcrumb_content style2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> @lang('messages.House')</a></li>
                            <li class="breadcrumb-item active text-thm"
                                aria-current="page"> @lang('messages.PropertyList')</li>
                        </ol>
                        <h2 class="breadcrumb_title"> @lang('messages.PropertyList')</h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($estateInfo as $itemestate)

                            <div class="col-md-6 col-lg-4">
                                <div class="feat_property home7 style4">
                                    <div class="thumb">
                                        {{\App\Helpers\Helper::GetImagesFirstImageVersion($itemestate->id)}}
                                        <div class="thmb_cntnt style2">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item">
                                                    <a href="{{url('Estate/'.$itemestate->TrackingCode)}}">
                                                        @if($itemestate->advType == 'rent')
                                                            @lang('messages.RENT')
                                                        @else
                                                            @lang('messages.sale')
                                                        @endif
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="{{url('Estate/'.$itemestate->TrackingCode)}}">
                                                        @lang('messages.SponsoredM')
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="thmb_cntnt style3">

                                            <a class="fp_price" href="{{url('Estate/'.$itemestate->TrackingCode)}}">
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
                                            </a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p class="text-thm">
                                                {{\App\Helpers\Helper::EstateType($itemestate->EstateTypeId)}}
                                                |
                                                {{\App\Helpers\Helper::EstatetypeRegion($itemestate->RegionId)}}
                                            </p>
                                            <h4>
                                                @if (session()->get('locale') == 'ku')
                                                    {{$itemestate->address_ku}}
                                                @else
                                                    {{$itemestate->Address}}
                                                @endif
                                            </h4>
                                            <p><span class="flaticon-placeholder"></span>

                                                @if (session()->get('locale') == 'ku')
                                                    {{$itemestate->address_ku}}
                                                @else
                                                    {{$itemestate->Address}}
                                                @endif
                                            </p>
                                            <ul class="prop_details mb0">
                                                <li class="list-inline-item">
                                                    <a href="{{url('Estate/'.$itemestate->TrackingCode)}}">
                                                        @lang('messages.beds'): {{$itemestate->RoomNumber}}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="{{url('Estate/'.$itemestate->TrackingCode)}}">

                                                        @lang('messages.Area'): {{$itemestate->LandTotalSquare}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12 mt20">
                            <div class="mbp_pagination">
                                <ul class="page_navigation">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                                class="flaticon-left-arrow"></span> Prev</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">29</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer_one">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
                    <div class="footer_about_widget">
                        <h4>@lang('messages.AboutUs')</h4>
                        <p>
                            @lang('messages.lookingforp')
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_qlink_widget">
                        <h4>
                            @lang('messages.Important')
                        </h4>
                        <ul class="list-unstyled">
                            <li><a href="{{url('about')}}">@lang('messages.menu4')</a></li>
                            <li><a href="{{url('contactus')}}">@lang('messages.menu5')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_contact_widget">
                        <h4>@lang('messages.Support')</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">info@koshkizinwe.com</a></li>
                            <li><a href="#">@lang('messages.contactUs')</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_social_widget">
                        <h4>@lang('messages.menu5')</h4>
                        <ul class="mb30">
                            <li class="list-inline-item"><a href="https://www.facebook.com/koshki_zinwe_realestate/"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/koshki_zinwe_realestate/"><i class="fa fa-instagram"></i></a></li>

                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="{{asset("Content/js/jquery-3.3.1.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/jquery-migrate-3.0.0.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/popper.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/jquery.mmenu.all.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/ace-responsive-menu.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/bootstrap-select.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/snackbar.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/simplebar.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/parallax.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/scrollto.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/jquery-scrolltofixed-min.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/jquery.counterup.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/wow.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/progressbar.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/slider.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/pricing-slider.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/timepicker.js")}}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{asset("Content/js/script.js")}}"></script>
</body>
</html>
