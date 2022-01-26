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

@include('Home.Header')
<!-- header end  -->


    <div id="wrapper">
        <!-- content -->
        <div class="content">
            <!--  section  -->
            <section class="hidden-section single-par2  " data-scrollax-parent="true">
                <div class="bg-wrap bg-parallax-wrap-gradien">
                    <div class="bg par-elem " data-bg="{{asset("Content/images/bg/4.jpg")}}"
                         data-scrollax="properties: { translateY: '30%' }"></div>
                </div>
                <div class="container">
                    <div class="section-title center-align big-title">
                        <h2><span>List of Our Agencys</span></h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet
                            fermentum sem.</h4>
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
                        <a href="#">
                            @lang('messages.menu1')
                        </a>

                        <span>
                                ملک های  @if($type=='rent') @lang('messages.rent') @elseif($type=='sale') @lang('messages.sale')  @endif
                        </span>
                    </div>
                    <div class="share-holder hid-share">
                        <a href="#" class="share-btn showshare sfcs"> <i class="fas fa-share-alt"></i> Share </a>
                        <div class="share-container  isShare"></div>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs end -->
            <!-- col-list-wrap -->
            <section class="gray-bg small-padding ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <!-- list-main-wrap-header-->
                            <div class="list-main-wrap-header box-list-header fl-wrap">
                                <!-- list-main-wrap-title-->
                                <div class="list-main-wrap-title">
                                    <h2>Results For : <span>
                                            @if($type=='rent') @lang('messages.rent') @elseif($type=='sale') @lang('messages.sale')  @endif
                                        </span><strong>14</strong></h2>
                                </div>
                                <!-- list-main-wrap-title end-->
                                <!-- list-main-wrap-opt-->
                                <div class="list-main-wrap-opt">
                                    <!-- price-opt-->

                                    <!-- price-opt end-->
                                </div>
                                <!-- list-main-wrap-opt end-->
                            </div>
                            <!-- list-main-wrap-header end-->
                            <!-- listing-item-wrap-->
                            <div class="listing-item-container one-column-grid-wrap  box-list_ic agency-list fl-wrap">

                                @if(count($estateInfo) > 0)
                                    @foreach($estateInfo as $itemestate)
                                        <div class="listing-item">
                                            <article class="geodir-category-listing fl-wrap">
                                                <div class="geodir-category-img fl-wrap">
                                                    <a href="{{url('Estate/'.$itemestate->TrackingCode)}}" class="geodir-category-img_item">
                                                    {{--    <img src="images/agency/1.png" alt="">--}}
                                                        {{\App\Helpers\Helper::GetImageEstate($itemestate->id)}}
                                                    </a>
                                                </div>
                                                <div class="geodir-category-content fl-wrap">
                                                    <div class="card-verified tolt" data-microtip-position="left"
                                                         data-tooltip="Verified"><i class="fal fa-user-check"></i></div>
                                                    <div class="agent_card-title fl-wrap">
                                                        <h4><a href="{{url('Estate/'.$itemestate->TrackingCode)}}">
                                                                {{\App\Helpers\Helper::EstatetypeRegion($itemestate->RegionId)}}
                                                            </a>
                                                        </h4>
                                                        <div class="geodir-category-location fl-wrap">
                                                            <a href="#"><i class="fas fa-map-marker-alt"></i>
                                                                {{$itemestate->Address}}
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <p>
                                                        {{$itemestate->Address}}
                                                    </p>
                                                    <div class="small-facts fl-wrap">
                                                        <ul>
                                                            <li><i class="fal fa-bed"></i><span>

                                                         {{$itemestate->RoomNumber}}

                                                    </span></li>
                                                            <li><i class="fal fa-cube"></i><span>
                                                        {{$itemestate->LandTotalSquare}}
                                                    </span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="geodir-category-footer fl-wrap">
                                                        <a href="{{url('Estate/'.$itemestate->TrackingCode)}}"
                                                           class="btn float-btn color-bg small-btn">View Details</a>
                                                        <a href="mailto:{{$itemestate->Email}}" class="tolt ftr-btn"
                                                           data-microtip-position="top-left"
                                                           data-tooltip="Write Message"><i class="fal fa-envelope"></i></a>
                                                        <a href="tel:{{$itemestate->MobileNumber}}" class="tolt ftr-btn"
                                                           data-microtip-position="top-left" data-tooltip="Call Now"><i
                                                                class="fal fa-phone"></i></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach

                                @endif
                            </div>
                            <!-- listing-item-wrap end-->
                            <!-- pagination-->
                            <div class="pagination">
                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>

                                <a href="#" class="current-page">
                                  1
                                </a>

                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <!-- pagination end-->
                        </div>

                    </div>
                </div>
            </section>
            <div class="limit-box fl-wrap"></div>
        </div>
        <!-- content end -->
        <!-- subscribe-wrap -->

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

    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

</script>
</body>


</html>
