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
                    <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur"/>
                    <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey"/>
                    <fecomposite in="SourceGraphic" in2="gooey" operator="atop"/>
                </filter>
            </defs>
        </svg>
    </div>
</div>
<!--loader end-->
<!-- main -->
<div id="main">
    <!-- header -->

@include('Home.Header')
<!-- header end  -->
    <!-- wrapper  -->
    <div id="wrapper" >
        <!-- content -->
        <div class="content" id="app">
            <!--  section  -->
            <section class="no-padding-section" >
                <div class="hero-slider-wrap carousel-wrap fl-wrap">
                    <div class="hero-slider carousel">
                        <!-- hero-slider-item -->
                        <div class="hero-slider-item hero-slider-item_first fl-wrap">
                            <div class="bg" data-bg="{{asset("Content/images/bg/1.jpg")}}"></div>
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row" >
                                    <div class="col-md-6">
                                        <div class="hero-title ht-column fl-wrap">

                                            <h2>@lang('messages.textsliderSecond')<br> </h2>

                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <div class="main-search-input-wrap shadow_msiw msiw-column fl-wrap">
                                            <div class="msiw-column_title">
                                                @lang('messages.searchTitleBox')
                                            </div>
                                            <div class="main-search-input fl-wrap">
                                                <form autocomplete="off" id="filters" action="{{ url('Search') }}"
                                                      method="get" class="search-wrapper">


                                                    <div class="main-search-input-item">
                                                        <input type="text" placeholder="@lang('messages.minprice')"
                                                               id="price_low" name="price_low"/>
                                                    </div>

                                                    <div class="main-search-input-item">
                                                        <input type="text" placeholder="@lang('messages.amxprice')"
                                                               id="price_high" name="price_high"/>
                                                    </div>

                                                    <div class="main-search-input-item">
                                                        <select data-placeholder="All Categories"
                                                                class="chosen-select no-search-select" name="typeestate">

                                                            <option value="rent">
                                                                @lang('messages.menuSallselect')
                                                               </option>
                                                            <option value="sale">

                                                                @lang('messages.menubuyselect')
                                                              </option>
                                                        </select>
                                                    </div>

                                                    <button class="main-search-button color-bg"
                                                            onclick="window.location.href='listing.html'">
                                                        @lang('messages.searchbtn')
                                                        <i
                                                            class="far fa-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="scroll-down-wrap">
                                    <div class="mousey">
                                        <div class="scroller"></div>
                                    </div>
                                    <span>Scroll Down To Discover</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="hs-btn hs-btn_prev color-bg swiper-button-prev"><i class="far fa-angle-left"></i></div>
                    <div class="hs-btn hs-btn_next color-bg swiper-button-next"><i class="far fa-angle-right"></i></div>
                </div>
            </section>

            <section class="gray-bg small-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-title fl-wrap">

                                <h2>
                                    @lang('messages.LatestProperties')

                                </h2>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"></div>

                    <div class="grid-item-holder gallery-items gisp fl-wrap">
                        @foreach($estate as $itemestate)
                            <div class="gallery-item for_sale">
                                <!-- listing-item -->
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img fl-wrap">

                                            {{\App\Helpers\Helper::GetImageEstate($itemestate->id)}}

                                            <div class="geodir-category-location">
                                                <a href="#" class="single-map-item tolt" data-newlatitude="40.72956781"
                                                   data-newlongitude="-73.99726866" data-microtip-position="top-left"
                                                   data-tooltip="On the map"><i class="fas fa-map-marker-alt"></i>
                                                    <span>

                                                </span></a>
                                            </div>
                                            <ul class="list-single-opt_header_cat">
                                                <li><a href="#" class="cat-opt blue-bg">
                                                        @if($itemestate->advType == 'rent')
                                                            @lang('messages.rent')
                                                        @else
                                                            @lang('messages.sale')
                                                        @endif
                                                    </a></li>
                                                <li><a href="#" class="cat-opt color-bg">
                                                        {{\App\Helpers\Helper::EstateType($itemestate->EstateTypeId)}}


                                                    </a>
                                                </li>
                                            </ul>


                                        </div>
                                        <div class="geodir-category-content fl-wrap">
                                            <h3 class="title-sin_item"><a
                                                    href="{{url('Estate/'.$itemestate->TrackingCode)}}">
                                                    {{\App\Helpers\Helper::EstatetypeRegion($itemestate->RegionId)}}
                                                    -
                                                    @if(session()->get('locale') == 'en')
                                                       {{$itemestate->Address}}
                                                    @elseif(session()->get('locale') == 'ku')
                                                        {{$itemestate->address_ku}}
                                                    @endif

                                                </a></h3>
                                            <div class="geodir-category-content_price">

                                                @if($itemestate->advType=='rent')
                                                    @if(empty($itemestate->RentAmount))
                                                        {{number_format($itemestate->price_rahan)}}
                                                    @else
                                                        {{number_format($itemestate->RentAmount)}}
                                                    @endif
                                                @else
                                                    {{number_format($itemestate->price)}}
                                                @endif

                                            </div>
                                            <p>
                                                {{$itemestate->ComplimentalDescription}}
                                            </p>
                                            <div class="geodir-category-content-details">
                                                <ul>
                                                    <li><i class="fal fa-bed"></i><span>

                                                         {{$itemestate->RoomNumber}}

                                                    </span></li>
                                                    <li><i class="fal fa-cube"></i><span>
                                                        {{$itemestate->LandTotalSquare}}
                                                    </span></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end-->
                            </div>
                        @endforeach
                    </div>
                    <!-- grid-item-holder-->
                    <a href="{{url('AllEstate')}}" class="btn float-btn small-btn color-bg">
                        @lang('messages.ViewAllProperties')
                    </a>
                </div>
            </section>
            <!-- section end-->
            <!-- section -->


        </div>
        <!-- content end -->
        <!-- subscribe-wrap -->
        <div class="subscribe-wrap fl-wrap">
            <div class="container">
                <div class="subscribe-container fl-wrap color-bg">
                    <div class="pwh_bg"></div>
                    <div class="mrb_dec mrb_dec3"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="subscribe-header">
                                <h4>newsletter</h4>
                                <h3>Sign up for newsletter and get latest news and update</h3>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="footer-widget fl-wrap">
                                <div class="subscribe-widget fl-wrap">
                                    <div class="subcribe-form">
                                        <form id="subscribe">
                                            <input class="enteremail fl-wrap" name="email" id="subscribe-email"
                                                   placeholder="Enter Your Email" spellcheck="false" type="text">
                                            <button type="submit" id="subscribe-button"
                                                    class="subscribe-button color-bg"> Subscribe
                                            </button>
                                            <label for="subscribe-email" class="subscribe-message"></label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- subscribe-wrap end -->
        <!-- footer -->
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
                                    <h4>Helpful links</h4>
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
                                    <h4>Contacts Info</h4>
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
                                    <h4>Download our API</h4>
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
                        <img src="Content/images/white-logo22.png" alt="">
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

                    </ul>
                    <!--tabs -->
                    <div class="tabs-container">
                        <div class="tab">
                            <!--tab -->
                            <div id="tab-1" class="tab-content first-tab">
                                <div class="custom-form">
                                    <form method="POST" action="{{ route('login') }}" name="registerform">
                                        @csrf

                                        <label>@lang('auth.Emaillable') * <span class="dec-icon"><i
                                                    class="fal fa-user"></i></span></label>
                                        <input type="email"
                                               class="form-control text-left @error('email') is-invalid @enderror"
                                               placeholder="@lang('auth.EmailPlacholder')" dir="ltr"
                                               value="{{ old('email') }}" required autofocus
                                               name="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
             </span>
                                        @enderror

                                        <div class="pass-input-wrap fl-wrap">
                                            <label>@lang('auth.Passwordlable') * <span class="dec-icon"><i
                                                        class="fal fa-key"></i></span></label>
                                            <input type="password"
                                                   class="form-control text-left @error('password') is-invalid @enderror"
                                                   placeholder="@lang('auth.PasswordPlacholder')" dir="ltr" required
                                                   autocomplete="current-password"
                                                   name="password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror

                                            <span class="eye"><i class="fal fa-eye"></i> </span>
                                        </div>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                        <div class="filter-tags">
                                            <input type="checkbox" class="custom-control-input" id="check-a3"
                                                   name="remember">
                                            {{--  <input id="check-a3" type="checkbox" name="check">--}}
                                            <label for="check-a3">Remember me</label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit" class="log_btn color-bg">@lang('auth.LogInbtn')  </button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->
    <!--secondary-nav -->
    <div class="secondary-nav">
        <ul>
            <li><a href="dashboard-add-listing.html" class="tolt" data-microtip-position="left"
                   data-tooltip="Sell Property"><i class="fal fa-truck-couch"></i> </a></li>
            <li><a href="listing.html" class="tolt" data-microtip-position="left" data-tooltip="Buy Property"> <i
                        class="fal fa-shopping-bag"></i></a></li>
            <li><a href="compare.html" class="tolt" data-microtip-position="left" data-tooltip="Your Compare"><i
                        class="fal fa-exchange"></i></a></li>
        </ul>
        <div class="progress-indicator">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="-1 -1 34 34">
                <circle cx="16" cy="16" r="15.9155"
                        class="progress-bar__background"/>
                <circle cx="16" cy="16" r="15.9155"
                        class="progress-bar__progress
                            js-progress-bar"/>
            </svg>
        </div>
    </div>
    <!--secondary-nav end -->
    <a class="to-top color-bg"><i class="fas fa-caret-up"></i></a>
    <!--map-modal -->
    <div class="map-modal-wrap">
        <div class="map-modal-wrap-overlay"></div>
        <div class="map-modal-item">
            <div class="map-modal-container fl-wrap">
                <h3><span>Listing Title </span></h3>
                <div class="map-modal-close"><i class="far fa-times"></i></div>
                <div class="map-modal fl-wrap">
                    <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                    <div class="scrollContorl"></div>
                </div>
            </div>
        </div>
    </div>
    <!--map-modal end -->
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
<script type="text/javascript">

    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

</script>
</body>


</html>
