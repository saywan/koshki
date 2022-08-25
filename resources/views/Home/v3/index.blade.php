<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="koshki Real Estate , koshkizinwe">
    <meta name="description" content="koshkizinwe - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
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

    <!-- Main Header Nav -->
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
                                       aria-controls="home" aria-selected="true">@lang('messages.login')</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="tab-content container" id="myTabContent">
                        <div class="row mt25 tab-pane fade show active" id="home" role="tabpanel"
                             aria-labelledby="home-tab">
                            <div class="col-lg-6 col-xl-6">
                                <div class="login_thumb">
                                    <img class="img-fluid w100" src="{{asset("Content/images/resource/login.jpg")}}"
                                         alt="login.jpg">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="login_form">
                                    <form action="#">
                                        <div class="heading">
                                            <h4>@lang('messages.login')</h4>
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
                                    <img class="img-fluid w100" src="{{asset("Content/images/resource/regstr.jpg")}}"
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
    <!-- Modal Search Button Bacground Overlay -->
    <div class="search_overlay dn-992">
        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
            <button class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></button>
            <div id="mk-fullscreen-search-wrapper">
                <form method="get" id="mk-fullscreen-searchform">
                    <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
                    <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <div class="main_logo_home2 text-center">
                    <img class="nav_logo_img img-fluid mt20" src="{{asset("/Content/images/koshkizinewlogo.jpeg")}}"
                         alt="header-logo2.png">

                </div>
                <ul class="menu_bar_home2">
                    <li class="list-inline-item list_s"><a href="{{route('login')}}"><span class="flaticon-user"></span></a>
                    </li>
                    <li class="list-inline-item">
                        <div class="search_overlay">
                            {{-- <div id="search-button-listener2" class="mk-search-trigger style2 mk-fullscreen-trigger">
                                 <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                             </div>--}}
                            <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                                <button class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i
                                        class="fa fa-times"></i></button>
                                <div id="mk-fullscreen-search-wrapper2">
                                    <form method="get" id="mk-fullscreen-searchform2">
                                        <input type="text" value="" placeholder="Search courses..."
                                               id="mk-fullscreen-search-input2">
                                        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value=""
                                                                                                           type="submit"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                </ul>
            </div>
        </div><!-- /.mobile-menu -->


        <nav id="menu" class="stylehome1">
            <ul>
                <li>
                    <a href="{{url('contactus')}}">

                        @lang('messages.menu5')
                    </a>
                </li>


                <li>
                    <a href="{{url('about')}}">

                        @lang('messages.menu4')
                    </a>

                </li>


                {{--<li>
                    <a href="#">

                        @lang('messages.menu6')
                    </a>
                </li>--}}
                <li>
                    <a href="{{url('project')}}">
                        @lang('messages.menu3')
                    </a>

                </li>
                <li>
                    <a href="{{url('')}}">
            <span class="title">
                 @lang('messages.menu2')
            </span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('EstateProperties/sale')}}">

                                @lang('messages.menu21')
                            </a>
                        </li>
                        <li>
                            <a href="{{url('EstateProperties/rent')}}">
                                @lang('messages.menu22')

                            </a>
                        </li>
                    </ul>
                </li>

                <li >
                    <a href="#">
                   <span class="title">
                      @if(str_replace('_', '-', app()->getLocale()) == 'en')
                           English
                       @elseif(session()->get('locale') == 'ku')
                           Kurdish
                       @endif
                         </span>
                    </a>
                    <ul class="langee">
                        {{--<li>
                            <a href="#" >
                                English
                            </a>
                        </li>
                        <li>
                            <a href="#" >
                                Kurdish
                            </a>
                        </li>--}}

                        <li><a href="#" data-lantext="en">English</a></li>
                        <li><a href="#" data-lantext="ku">Kurdish</a></li>


                    </ul>
                </li>

                <li class="list-inline-item list_s">
                    <a href="{{route('login')}}" class="btn flaticon-user">
                        <span class="dn-lg">@lang('messages.login')</span>
                    </a>
                </li>



            </ul>
        </nav>


    </div>

    <!-- 6th Home Design -->
    <section class="home-six home6-overlay">
        <div class="container">
            <div class="row posr">
                <div class="col-lg-12">
                    <div class="home_content home6">
                        <div class="home-text home6 text-center">
                            <h2 class="fz55"> @lang('messages.h4v2')</h2>
                            <p class="fz18"> @lang('messages.h4p')</p>
                        </div>
                        <div class="home_adv_srch_opt home6">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                       role="tab" aria-controls="pills-home"
                                       aria-selected="true">   @lang('messages.BUY')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                       role="tab" aria-controls="pills-profile"
                                       aria-selected="false">   @lang('messages.RENT')   </a>
                                </li>
                            </ul>
                            <div class="tab-content home1_adsrchfrm" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <div class="home1-advnc-search home6">
                                        <ul class="h1ads_1st_list mb0">
                                            <li class="list-inline-item">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputName1"
                                                           placeholder=" @lang('messages.RENT')">
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
                                                <div class="small_dropdown2 home6">
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

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item">
                                                <div class="search_option_button">
                                                    <button type="submit" class="btn btn-thm">
                                                        @lang('messages.Search')
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">
                                    <div class="home1-advnc-search home6">
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
                                                <div class="small_dropdown2 home6">
                                                    <div id="prncgs2" class="btn dd_btn">
                                                        <span>@lang('messages.Price')</span>
                                                        <label for="exampleInputEmail4"><span
                                                                class="fa fa-angle-down"></span></label>
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
                                                    <button type="submit"
                                                            class="btn btn-thm">@lang('messages.Search')</button>
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
        </div>
    </section>

    <!-- Feature Properties -->
    <section id="feature-property" class="feature-property-home6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title mb40">
                        <h2> @lang('messages.Sponsored')</h2>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="feature_property_home6_slider">
                        @foreach($estate as $itemestate)

                            <div class="item">
                                <div class="properti_city home6">
                                    <div class="thumb">
                                        {{\App\Helpers\Helper::GetImagesFirst($itemestate->id)}}
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        @if($itemestate->advType == 'rent')
                                                            @lang('messages.RENT')
                                                        @else
                                                            @lang('messages.sale')
                                                        @endif
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="{{url('Estate/'.$itemestate->TrackingCode)}}">  @lang('messages.SponsoredM')</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <div class="details">
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
                                            <h4>
                                                {{\App\Helpers\Helper::EstateType($itemestate->EstateTypeId)}}
                                                |
                                                {{\App\Helpers\Helper::EstatetypeRegion($itemestate->RegionId)}}
                                            </h4>
                                            <ul class="prop_details mb0">
                                                <li class="list-inline-item">
                                                    <a href="{{url('Estate/'.$itemestate->TrackingCode)}}">
                                                        @lang('messages.beds'): {{$itemestate->RoomNumber}}
                                                    </a>
                                                </li>

                                                <li class="list-inline-item">
                                                    <a href="{{url('Estate/'.$itemestate->TrackingCode)}}">
                                                        @lang('messages.Area'): {{$itemestate->LandTotalSquare}}</a>
                                                </li>
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

    <!-- Whatare you looking for -->
    <section class="you-looking-for">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center mb30">
                        <h2>
                            @lang('messages.lookingfor')
                        </h2>
                        <p>@lang('messages.lookingforp').</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Cities -->
    <section id="property-city" class="property-city pb30">
        <div class="container">
            <div class="row features_row">
                <div class="col-sm-6 col-lg-3 col-xl-3 p0">
                    <div class="why_chose_us home6">
                        <div class="icon">
                            <span class="flaticon-house-1"></span>
                        </div>
                        <div class="details">
                            <h4> @lang('messages.villa')</h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-xl-3 p0">
                    <div class="why_chose_us home6">
                        <div class="icon">
                            <span class="flaticon-house"></span>
                        </div>
                        <div class="details">
                            <h4> @lang('messages.House')</h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-xl-3 p0">
                    <div class="why_chose_us home6">
                        <div class="icon">
                            <span class="flaticon-house-2"></span>
                        </div>
                        <div class="details">
                            <h4> @lang('messages.TownHouse')</h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-xl-3 p0">
                    <div class="why_chose_us home6 bdrrn">
                        <div class="icon">
                            <span class="flaticon-building"></span>
                        </div>
                        <div class="details">
                            <h4> @lang('messages.Appertment')</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>@lang('messages.h4v2')</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="property_city_home6">
                        <div class="thumb"><img class="w100" src="{{asset("Content/images/property/pc18.jpg")}}"
                                                alt="pc18.jpg">
                        </div>
                        <div class="details">
                            <h4>   @lang('messages.Erbil')</h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="property_city_home6">
                        <div class="thumb"><img class="w100" src="{{asset("Content/images/property/pc19.jpg")}}"
                                                alt="pc19.jpg">
                        </div>
                        <div class="details">
                            <h4>   @lang('messages.Sulaymaniyah')</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="property_city_home6">
                        <div class="thumb"><img class="w100" src="{{asset("Content/images/property/pc20.jpg")}}"
                                                alt="pc20.jpg">
                        </div>
                        <div class="details">
                            <h4>   @lang('messages.Kirkuk')</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="property_city_home6">
                        <div class="thumb"><img class="w100" src="{{asset("Content/images/property/pc21.jpg")}}"
                                                alt="pc21.jpg">
                        </div>
                        <div class="details">
                            <h4>   @lang('messages.Baghdad')</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="property_city_home6">
                        <div class="thumb"><img class="w100" src="{{asset("Content/images/property/pc22.jpg")}}"
                                                alt="pc22.jpg">
                        </div>
                        <div class="details">
                            <h4>   @lang('messages.Basrah')</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="property_city_home6">
                        <div class="thumb"><img class="w100" src="{{asset("Content/images/property/pc23.jpg")}}"
                                                alt="pc23.jpg">
                        </div>

                        <div class="details">
                            <h4>   @lang('messages.力stanbul')</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern Apertment -->
    <section class="modern-apertment pt100 pb90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modern_apertment mt30">
                        <h2 class="title">
                            @lang('messages.Finding')
                        </h2>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Agents -->
    <section id="our-agents" class="our-agents pt40 pb15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title mb30">
                        <h2>
                            @lang('messages.OurAgents')
                        </h2>
                        <p>

                            @lang('messages.OurAgentsText')

                            <a class="float-right" href="#"> @lang('messages.ViewAllAgence') <span
                                    class="flaticon-next"></span></a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="our_agents_home6_slider">
                        <div class="item">
                            <div class="our_agent">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{asset("Content/images/team/5.jpg")}}"
                                         alt="5.jpg">
                                    <div class="overylay">
                                        <ul class="social_icon">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h4> @lang('messages.namecompany')</h4>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="our_agent">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{asset("Content/images/team/6.jpg")}}"
                                         alt="6.jpg">
                                    <div class="overylay">
                                        <ul class="social_icon">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h4>
                                        @lang('messages.namecompany')
                                    </h4>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="our_agent">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{asset("Content/images/team/7.jpg")}}"
                                         alt="7.jpg">
                                    <div class="overylay">
                                        <ul class="social_icon">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h4> @lang('messages.namecompany')</h4>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="our_agent">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{asset("Content/images/team/8.jpg")}}"
                                         alt="8.jpg">
                                    <div class="overylay">
                                        <ul class="social_icon">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h4> @lang('messages.namecompany')</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="our_agent">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{asset("Content/images/team/9.jpg")}}"
                                         alt="9.jpg">
                                    <div class="overylay">
                                        <ul class="social_icon">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h4> @lang('messages.namecompany')</h4>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="our_agent">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{asset("Content/images/team/10.jpg")}}"
                                         alt="10.jpg">
                                    <div class="overylay">
                                        <ul class="social_icon">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h4> @lang('messages.namecompany')</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Blog -->


    <!-- Our Footer -->
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
                            <li class="list-inline-item"><a href="https://www.facebook.com/koshki_zinwe_realestate/"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/koshki_zinwe_realestate/"><i
                                        class="fa fa-instagram"></i></a></li>

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
<script type="text/javascript" src="{{asset("Content/js/slider.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/pricing-slider.js")}}"></script>
<script type="text/javascript" src="{{asset("Content/js/timepicker.js")}}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{asset("Content/js/script.js")}}"></script>
<script>
    $(".langee li a").on('click', function (e) {


        var url = "{{ route('changeLang') }}";
        e.preventDefault();
        var thdatlantext = $(this).data("lantext");

        //$(".lang-item li a").removeClass("current-lan");
        // $(this).addClass("current-lan");
        //  $(".lang-item h4 span  ").text(thdatlantext);
        window.location.href = 'lang/change' + "?lang=" + $(this).data("lantext");
    });
</script>
</body>
</html>
