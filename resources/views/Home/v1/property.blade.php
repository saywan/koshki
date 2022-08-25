<!DOCTYPE HTML>
<html lang="fa">


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


    <div id="wrapper">
        <!-- content -->
        <div class="content">
            <!--  carousel-->
            <div class="list-single-carousel-wrap carousel-wrap fl-wrap" id="sec1">
                <div class="fw-carousel single-carousel carousel fl-wrap full-height lightgallery">

                    {{\App\Helpers\Helper::GetImageEstateSlider($itemestate->id)}}


                </div>
                <div class="swiper-button-prev sw-btn"><i class="fal fa-angle-left"></i></div>
                <div class="swiper-button-next sw-btn"><i class="fal fa-angle-right"></i></div>
            </div>
            <!--  carousel  end-->
            <div class="breadcrumbs fw-breadcrumbs smpar fl-wrap">
                <div class="container">

                    <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                    <div class="show-more-snopt-tooltip">
                        <a href="#sec15" class="custom-scroll-link"> <i class="fas fa-comment-alt"></i> Write a
                            review</a>
                        <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                    </div>
                    <a class="print-btn tolt" href="javascript:window.print()" data-microtip-position="bottom"
                       data-tooltip="Print"><i class="fas fa-print"></i></a>
                    <a class="compare-top-btn tolt" data-microtip-position="bottom" data-tooltip="Compare" href="#"><i
                            class="fas fa-random"></i></a>
                    <div class="like-btn"><i class="fas fa-heart"></i> Save</div>
                </div>
            </div>
            <div class="gray-bg small-padding fl-wrap">
                <div class="container">
                    <div class="row">
                        <!--  listing-single content -->
                        <div class="col-md-8">
                            <div class="list-single-main-wrapper fl-wrap">
                                <!--  scroll-nav-wrap -->
                                <div class="scroll-nav-wrap">
                                    <nav class="scroll-nav scroll-init fixed-column_menu-init">
                                        <ul class="no-list-style">
                                            <li><a class="act-scrlink" href="#sec1"><i
                                                        class="fal fa-image"></i></a><span>Gallery</span></li>
                                            <li><a href="#sec2"><i class="fal fa-info"></i> </a><span>Details</span>
                                            </li>
                                            <li><a href="#sec3"><i class="fal fa-stars"></i></a><span>Features</span>
                                            </li>

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
                                    </nav>
                                </div>
                                <!--  scroll-nav-wrap end-->
                                <!--  list-single-opt_header-->
                                <div class="list-single-opt_header fl-wrap">
                                    <ul class="list-single-opt_header_cat">
                                        <li><a href="#" class="cat-opt color-bg">

                                                @if($itemestate->advType == 'rent')
                                                    @lang('messages.rent')
                                                @else
                                                    @lang('messages.sale')
                                                @endif
                                            </a></li>

                                        <li><a href="#" class="cat-opt color-bg">
                                                {{\App\Helpers\Helper::EstateType($itemestate->EstateTypeId)}}
                                            </a></li>
                                    </ul>
                                    <div class="share-holder hid-share">
                                        <a href="#" class="share-btn showshare sfcs"> <i class="fas fa-share-alt"></i>
                                            Share </a>
                                        <div class="share-container  isShare"></div>
                                    </div>
                                </div>
                                <!--  list-single-opt_header end -->
                                <!--  list-single-header-item-->
                                <div class="list-single-header-item  fl-wrap" id="sec2">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h1>
                                                {{\App\Helpers\Helper::EstateType($itemestate->EstateTypeId)}}
                                                <span class="verified-badge tolt" data-microtip-position="bottom"
                                                      data-tooltip="Verified"><i class="fas fa-check"></i></span></h1>
                                            <div class="geodir-category-location fl-wrap">
                                                <a href="#"><i class="fas fa-map-marker-alt"></i>
                                                    {{\App\Helpers\Helper::EstatetypeRegion($itemestate->RegionId)}}
                                                </a>


                                            </div>
                                        </div>

                                    </div>
                                    <div class="list-single-header-footer fl-wrap">
                                        <div class="list-single-header-price" data-propertyprise="50500">
                                            <strong>Price:</strong><span>$</span>
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
                                        <div class="list-single-stats">
                                            <ul class="no-list-style">
                                                <li><span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  156 </span>
                                                </li>
                                                <li><span class="bookmark-counter"><i class="fas fa-heart"></i> Bookmark -  24 </span>
                                                </li>
                                            </ul>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <div class="list-single-facts fl-wrap">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <i class="fal fa-home-lg"></i>
                                        <h6>
                                            @lang('messages.Type')
                                        </h6>
                                        <span>
                                                  {{\App\Helpers\Helper::EstateType($itemestate->EstateTypeId)}}
                                            </span>
                                    </div>
                                </div>

                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <i class="fal fa-bed"></i>
                                        <h6>
                                            @lang('messages.Bedrooms')
                                        </h6>
                                        <span>
                                                    {{$itemestate->RoomNumber}}
                                            </span>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <i class="fal fa-cube"></i>
                                        <h6>

                                            @lang('messages.LandTotalSquare')
                                        </h6>
                                        <span>  {{$itemestate->LandTotalSquare}}</span>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                            </div>
                            <div class="list-single-main-container fl-wrap">
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title">
                                        <h3>
                                            @lang('messages.listTitle')
                                        </h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <p>
                                            {{$itemestate->ComplimentalDescription}}
                                        </p>
                                        <a href="#" class="btn float-btn color-bg">Visit Website</a>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec3">
                                    <div class="list-single-main-item-title">
                                        <h3>
                                            @lang('messages.details')
                                        </h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="details-list">
                                            <ul>
                                                <li><span>
                                                            @lang('messages.EsateCode')
                                                        </span> {{$itemestate->id}}</li>
                                                <li>
                                                    <span>
                                                         @lang('messages.region')
                                                    </span> {{\App\Helpers\Helper::EstatetypeRegion($itemestate->RegionId)}}
                                                </li>
                                                <li>
                                                        <span>
                                                           @lang('messages.EsateType')
                                                        </span> {{strip_tags(\App\Helpers\Helper::EstateType($itemestate->EstateTypeId))}}
                                                </li>
                                                @if(!empty($itemestate->unit))
                                                    <li><span>
                                                                 @lang('message.EsateType')
                                                            </span>:</span> {{$itemestate->unit}} </li>
                                                @endif
                                                @if(!empty($itemestate->floor))
                                                    <li><span>
                                                             @lang('messages.floor')
                                                        </span> {{$itemestate->floor}}</li>
                                                @endif
                                                @if(!empty($itemestate->unitfloor))
                                                    <li><span>
                                                             @lang('messages.unitfloor')
                                                        </span>
                                                        {{$itemestate->unitfloor}}
                                                    </li>
                                                @endif
                                                @if($itemestate->elevator == 1)
                                                    <li><span>
                                                              @lang('messages.Elevator')

                                                        </span> @lang('messages.Yes')
                                                    </li>
                                                @endif
                                                @if($itemestate->parking == 1)
                                                    <li><span>

                                                            @lang('messages.Parking')

                                                        </span>@lang('messages.Yes')
                                                    </li>
                                                @endif
                                                @if($itemestate->warehouse == 1)
                                                    <li><span>
                                                            @lang('messages.Warehouse')

                                                        </span> @lang('messages.Yes')
                                                    </li>
                                                @endif
                                                @if($itemestate->advType =='sale')
                                                    <li><span>
                                                            @lang('messages.PriceEstate')
                                                            :</span>
                                                        @if($itemestate->advType=='rent')
                                                            {{number_format($itemestate->price_rahan)}}
                                                        @else
                                                            {{number_format($itemestate->price)}}
                                                        @endif
                                                    </li>
                                                @elseif($itemestate->advType =='rent')
                                                    <li><span>
                                                              @lang('messages.PriceEstateRahan')
                                                            </span>
                                                        {{number_format($itemestate->price_rahan)}}
                                                    </li>
                                                    <li><span>   @lang('messages.PriceEstateRent')  :</span>
                                                        {{number_format($itemestate->RentAmount)}}
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- listing-single content end-->
                    <!-- sidebar -->
                    <div class="col-md-4">
                        <!--box-widget-->
                        <div class="box-widget fl-wrap">
                            <div class="profile-widget">
                                <div class="profile-widget-header color-bg smpar fl-wrap">
                                    <div class="pwh_bg"></div>
                                    <div class="call-btn"><a href="tel:123-456-7890" class="tolt color-bg"
                                                             data-microtip-position="right" data-tooltip="Call Now"><i
                                                class="fas fa-phone-alt"></i></a></div>
                                    <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                    <div class="show-more-snopt-tooltip bxwt">
                                        <a href="#"> <i class="fas fa-comment-alt"></i> Write a review</a>
                                        <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                    </div>
                                    <div class="profile-widget-card">

                                        <div class="profile-widget-header-title">
                                            <h4><a href="agent-single.html">
                                                    {{$itemestate->fullname}}
                                                </a></h4>
                                            <div class="clearfix"></div>


                                        </div>
                                    </div>
                                </div>
                                <div class="profile-widget-content fl-wrap">
                                    <div class="contats-list fl-wrap">
                                        <ul class="no-list-style">
                                            <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">
                                                    {{$itemestate->MobileNumber}}
                                                </a>
                                            </li>
                                            <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">
                                                    {{$itemestate->Email}}
                                                </a>
                                            </li>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="profile-widget-footer fl-wrap">
                                        <a href="agent-single.html" class="btn float-btn color-bg small-btn">View
                                            Profile</a>
                                        <a href="#sec-contact" class="custom-scroll-link tolt"
                                           data-microtip-position="left" data-tooltip="Viewing Property"><i
                                                class="fal fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--box-widget end -->
                        <!--box-widget-->

                        <!--box-widget end -->
                    </div>
                    <!--  sidebar end-->
                </div>
                <div class="fl-wrap limit-box"></div>

            </div>
        </div>
    </div>

    <footer class="main-footer fl-wrap">
        <div class="footer-inner fl-wrap">
            <div class="container">
                <div class="row">
                    <!-- footer widget-->
                    <div class="col-md-3">
                        <div class="footer-widget fl-wrap">
                            <div class="footer-widget-logo fl-wrap">
                                <img src="images/logo.png" alt="">
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
                            <p>Start working with Homeradar that can provide everything you need </p>
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
                <div class="copyright"> &#169; Homeradar 2022 . All rights reserved.</div>
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
<script src="{{asset("Content/js/jquery.min.js")}}"></script>
<script src="{{asset("Content/js/plugins.js")}}"></script>
<script src="{{asset("Content/js/scripts.js")}}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places"></script>
<script src="{{asset("Content/js/map-single.js")}}"></script>
<script type="text/javascript">

    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function () {
        window.location.href = url + "?lang=" + $(this).val();
    });

</script>
</body>


</html>
