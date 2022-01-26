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

    @include('Home.Header')
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
                        <h2><span>About Us</span></h2>
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
                        <a href="#">Home</a> <span>About</span>
                    </div>
                    <div class="share-holder hid-share">
                        <a href="#" class="share-btn showshare sfcs">  <i class="fas fa-share-alt"></i>  Share   </a>
                        <div class="share-container  isShare"></div>
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
                                <h4>24 Hours Support <span>01</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                <a href="#" class="serv-link">Read more</a>
                            </div>
                        </div>
                        <!-- services-item  end-->
                        <!-- services-item -->
                        <div class="col-md-4">
                            <div class="services-item fl-wrap">
                                <i class="fal fa-users-cog"></i>
                                <h4>User Admin Panel <span>02</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                <a href="#" class="serv-link">Read more</a>
                            </div>
                        </div>
                        <!-- services-item  end-->
                        <!-- services-item -->
                        <div class="col-md-4">
                            <div class="services-item fl-wrap">
                                <i class="fal fa-phone-laptop"></i>
                                <h4>Mobile Friendly <span>03</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                <a href="#" class="serv-link">Read more</a>
                            </div>
                        </div>
                        <!-- services-item  end-->
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
                            <div class="col-md-5">
                                <div class="about-title fl-wrap">
                                    <h2>Our Company <span>Story</span></h2>
                                    <h4>Check video presentation to find   out more about us .</h4>
                                </div>
                                <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.
                                </p>
                                <a href="#" class="btn small-btn float-btn color-bg">Read More</a>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <div class="about-img fl-wrap">
                                    <img src="{{asset("Content/images/all/18.jpg")}}" class="respimg" alt="">
                                    <div class="about-img-hotifer color-bg">
                                        <p>Your website is fully responsive so visitors can view your content from their choice of device.</p>
                                        <h4>Mark Antony</h4>
                                        <h5>Homeradar CEO</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- about-wrap end  -->
                </div>
            </section>
            <!-- section end-->
            <!-- section -->
            <section class="color-bg small-padding">
                <div class="container">
                    <div class="main-facts fl-wrap">
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="578">0</div>
                                    </div>
                                </div>
                                <h6>Agents and Agencys</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="12168">0</div>
                                    </div>
                                </div>
                                <h6>Happy Customers Every Year</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="2172">0</div>
                                    </div>
                                </div>
                                <h6>Won Awards</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="732">0</div>
                                    </div>
                                </div>
                                <h6>New Listing Every Week</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                    </div>
                </div>
                <div class="svg-bg">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%"
                         height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
                        <defs>
                            <lineargradient id="bg">
                                <stop offset="0%" style="stop-color:rgba(255, 255, 255, 0.6)"></stop>
                                <stop offset="50%" style="stop-color:rgba(255, 255, 255, 0.1)"></stop>
                                <stop offset="100%" style="stop-color:rgba(255, 255, 255, 0.6)"></stop>
                            </lineargradient>
                            <path id="wave" stroke="url(#bg)" fill="none" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
                                        s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
                        </defs>
                        <g>
                            <use xlink:href="#wave">
                                <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline"
                                                  values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                                                  repeatCount="indefinite" />
                            </use>
                            <use xlink:href="#wave">
                                <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline"
                                                  values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                                                  repeatCount="indefinite" />
                            </use>
                            <use xlink:href="#wave">
                                <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline"
                                                  values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                                                  repeatCount="indefinite" />
                            </use>
                            <use xlink:href="#wave">
                                <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="12s" calcMode="spline" values="0 240;140 200;0 230"
                                                  keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                            </use>
                        </g>
                    </svg>
                </div>
            </section>
            <!-- section end-->
            <!-- section -->
            <section >
                <div class="container">
                    <!-- section-title -->
                    <div class="section-title st-center fl-wrap">
                        <h4>The Crew</h4>
                        <h2>Our Awesome team</h2>
                    </div>
                    <!-- section-title end -->
                    <div class="clearfix"></div>
                    <div class="row">
                        <!-- team-item -->
                        <div class="col-md-4">
                            <div class="team-item fl-wrap">
                                <div class="team-img fl-wrap">
                                    <img src="{{asset("Content/images/agency/agent/1.jpg")}}" class="respimg" alt="">
                                </div>
                                <div class="team-content fl-wrap">
                                    <h4>Alisa Gray</h4>
                                    <h5>Business consultant</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="team-footer fl-wrap">
                                    <ul class="team-social">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    </ul>
                                    <a href="mailto:yourmail@email.com" class="tolt tf-btn" data-microtip-position="top-right" data-tooltip="Write Message"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- team-item end -->
                        <!-- team-item -->
                        <div class="col-md-4">
                            <div class="team-item fl-wrap">
                                <div class="team-img fl-wrap">
                                    <img src="{{asset("Content/images/agency/agent/4.jpg")}}" class="respimg" alt="">
                                </div>
                                <div class="team-content fl-wrap">
                                    <h4>Austin Evon</h4>
                                    <h5>Developer / Designer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="team-footer fl-wrap">
                                    <ul class="team-social">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    </ul>
                                    <a href="mailto:yourmail@email.com" class="tolt tf-btn" data-microtip-position="top-right" data-tooltip="Write Message"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- team-item end -->
                        <!-- team-item -->
                        <div class="col-md-4">
                            <div class="team-item fl-wrap">
                                <div class="team-img fl-wrap">
                                    <img src="{{asset("Content/images/agency/agent/5.jpg")}}" class="respimg" alt="">
                                </div>
                                <div class="team-content fl-wrap">
                                    <h4>Taylor Roberts</h4>
                                    <h5>Software Engineer</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="team-footer fl-wrap">
                                    <ul class="team-social">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    </ul>
                                    <a href="mailto:yourmail@email.com" class="tolt tf-btn" data-microtip-position="top-right" data-tooltip="Write Message"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- team-item end -->
                    </div>
                </div>
            </section>
            <!-- section end-->
            <!--section  -->
            <section class="parallax-section ps-bg video-section" data-scrollax-parent="true" id="sec2">
                <div class="bg-wrap">
                    <div class="bg par-elem "  data-bg="images/bg/5.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                </div>
                <div class="overlay"></div>
                <!--container-->
                <div class="container">
                    <div class="video_section-title fl-wrap">
                        <h2>Our Story Video</h2>
                        <h4>Get ready to start your exciting journey. <br> Our agency will lead you through the amazing digital world</h4>
                    </div>
                    <a href="https://vimeo.com/158059890" class="promo-link big_prom color-bg   image-popup"><i class="fas fa-play"></i></a>
                </div>
            </section>
            <!--section end-->
            <!-- section -->
            <section class="gray-bg ">
                <div class="container">
                    <div class="section-title st-center fl-wrap">
                        <h4>Testimonilas</h4>
                        <h2>What Our Clients Say</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="testimonials-slider-wrap">
                    <div class="testimonials-slider">
                        <!--slick-item -->
                        <div class="slick-item">
                            <div class="text-carousel-item fl-wrap">
                                <div class="text-carousel-item-header fl-wrap">
                                    <div class="popup-avatar"><img src="{{asset("Content/images/avatar/1.jpg")}}" alt=""></div>
                                    <div class="review-owner fl-wrap">Jessie Wilcox</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                </div>
                                <div class="text-carousel-content fl-wrap">
                                    <p> "In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore luptatum."</p>
                                    <a href="#" class="testim-link color-bg">Via Facebook</a>
                                </div>
                            </div>
                        </div>
                        <!--slick-item end -->
                        <!--slick-item -->
                        <div class="slick-item">
                            <div class="text-carousel-item fl-wrap">
                                <div class="text-carousel-item-header fl-wrap">
                                    <div class="popup-avatar"><img src="{{asset("Content/images/avatar/2.jpg")}}" alt=""></div>
                                    <div class="review-owner fl-wrap">Austin Harisson</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                </div>
                                <div class="text-carousel-content fl-wrap">
                                    <p> "Feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te odio dignissim qui blandit praesent blandit praesent luptatum zzril.Vulputate urna. Nulla tristique mi a massa convallis."</p>
                                    <a href="#" class="testim-link color-bg">Via Twitter</a>
                                </div>
                            </div>
                        </div>
                        <!--slick-item end -->
                        <!--slick-item -->
                        <div class="slick-item">
                            <div class="text-carousel-item fl-wrap">
                                <div class="text-carousel-item-header fl-wrap">
                                    <div class="popup-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                                    <div class="review-owner fl-wrap">Garry Colonsi</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                </div>
                                <div class="text-carousel-content fl-wrap">
                                    <p> "In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore luptatum."</p>
                                    <a href="#" class="testim-link color-bg">Via Facebook</a>
                                </div>
                            </div>
                        </div>
                        <!--slick-item end -->
                        <!--slick-item -->
                        <div class="slick-item">
                            <div class="text-carousel-item fl-wrap">
                                <div class="text-carousel-item-header fl-wrap">
                                    <div class="popup-avatar"><img src="images/avatar/4.jpg" alt=""></div>
                                    <div class="review-owner fl-wrap">Antony Moore</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                </div>
                                <div class="text-carousel-content fl-wrap">
                                    <p> "Feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te odio dignissim qui blandit praesent blandit praesent luptatum zzril.Vulputate urna. Nulla tristique mi a massa convallis."</p>
                                    <a href="#" class="testim-link color-bg">Via Twitter</a>
                                </div>
                            </div>
                        </div>
                        <!--slick-item end -->
                    </div>
                </div>
            </section>
            <!-- section end-->
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
                                            <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Enter Your Email" spellcheck="false" type="text">
                                            <button type="submit" id="subscribe-button" class="subscribe-button color-bg">  Subscribe</button>
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
                                    <img src="images/logo.png" alt="">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
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
                                <ul  class="footer-contacts fl-wrap">
                                    <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                    <li> <span><i class="fal fa-map-marker"></i> Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                    <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">+7(111)123456789</a></li>
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
                    <div class="copyright"> &#169; Homeradar 2022 .  All rights reserved.</div>
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
    <div class="secondary-nav">
        <ul>
            <li><a href="dashboard-add-listing.html" class="tolt" data-microtip-position="left"  data-tooltip="Sell Property"><i class="fal fa-truck-couch"></i> </a></li>
            <li><a href="listing.html" class="tolt" data-microtip-position="left"  data-tooltip="Buy Property"> <i class="fal fa-shopping-bag"></i></a></li>
            <li><a href="compare.html" class="tolt" data-microtip-position="left"  data-tooltip="Your Compare"><i class="fal fa-exchange"></i></a></li>
        </ul>
        <div class="progress-indicator">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="-1 -1 34 34">
                <circle cx="16" cy="16" r="15.9155"
                        class="progress-bar__background" />
                <circle cx="16" cy="16" r="15.9155"
                        class="progress-bar__progress
                            js-progress-bar" />
            </svg>
        </div>
    </div>
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
