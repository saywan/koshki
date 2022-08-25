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

@include('Home.v1.Header')
<!-- header end  -->
    <!-- wrapper  -->
    <div id="wrapper" >
        <!-- content -->
        <div class="content" id="app">
            <!--  section  -->



            <section class="hero-section hero-section_dec" data-scrollax-parent="true">
                <div class="bg-wrap">
                    <div class="bg par-elem"  data-bg="{{asset("Content/images/bg/14.jpg")}}" data-scrollax="properties: { translateY: '30%' }"></div>
                </div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="hero-title hero-title_small text-center">
                        <h4>@lang('messages.h4v2')</h4>
                        <h2>@lang('messages.h4p')  </h2>
                    </div>
                    <div class="main-search-input-wrap">
                        <div class="main-search-input fl-wrap">
                            <div class="main-search-input-item">
                                <input type="text" placeholder="@lang('messages.location')" value=""/>
                            </div>
                            <div class="main-search-input-item">
                                <select data-placeholder="@lang('messages.Property')"  class="chosen-select no-search-select" >
                                    <option>@lang('messages.Property')</option>
                                    <option>@lang('messages.RENT')</option>
                                    <option>@lang('messages.BUY')</option>
                                </select>
                            </div>
                            <div class="main-search-input-item">
                                <select data-placeholder="@lang('messages.location')"  class="chosen-select" >
                                    <option>@lang('messages.location')</option>

                                </select>
                            </div>
                            <button class="main-search-button color-bg" onclick="window.location.href='/'">
                                @lang('messages.Search')
                                <i class="far fa-search"></i> </button>
                        </div>
                    </div>


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
                                                    href="{{url('v1/Estate/'.$itemestate->TrackingCode)}}">
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
                                                @if(session()->get('locale') == 'en')
                                                    {{substr($itemestate->ComplimentalDescription,0,30)}}
                                                @elseif(session()->get('locale') == 'ku')
                                                    {{substr($itemestate->ComplimentalDescriptionKu,0,80)}}

                                                @endif
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
                    <a href="#" class="btn float-btn small-btn color-bg">
                        @lang('messages.ViewAllProperties')
                    </a>
                </div>
            </section>
            <!-- section end-->
            <!-- section -->


        </div>


        <footer class="main-footer fl-wrap">
            <div class="footer-inner fl-wrap">
                <div class="container">
                    <div class="row">
                        <!-- footer widget-->
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <div class="footer-widget-logo fl-wrap">
                                    <img src="{{asset("Content/images/koshkiFinal.png")}}" alt="logo">
                                </div>
                                <p>@lang('messages.menu4')</p>

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
                                    <li><a href="">@lang('messages.menu4')</a></li>
                                    <li><a href="">@lang('messages.menu4')</a></li>

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


                            </div>
                        </div>
                        <!-- footer widget end-->
                        <!-- footer widget-->
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <div class="footer-widget-title fl-wrap">
                                    <h4>@lang('messages.Featured')</h4>
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
                    <div class="copyright">@lang('messages.copyright')</div>

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
                        <img src="{{asset("Content/images/koshkiFinal.png")}}" alt="">
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
