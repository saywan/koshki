<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from homeradar.kwst.net/dashboard-add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Dec 2021 09:08:56 GMT -->
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Homeradar - Real Estate Listing Template</title>

    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset("Content/css/plugins.css")}}">
    <link type="text/css" rel="stylesheet" href="{{asset("Content/css/style.css")}}">
    <link type="text/css" rel="stylesheet" href="{{asset("Content/css/dashboard-style.css")}}">
    <link type="text/css" rel="stylesheet" href="{{asset("Content/css/color.css")}}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
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
        <!-- dashbard-menu-wrap -->
        <div class="dashbard-menu-overlay"></div>
        <div class="dashbard-menu-wrap">
            <div class="dashbard-menu-close"><i class="fal fa-times"></i></div>
            <div class="dashbard-menu-container">
                <!-- user-profile-menu-->
                <div class="user-profile-menu">
                    <h3>Main</h3>
                    <ul class="no-list-style">
                        <li><a href="{{url('/')}}"><i class="fal fa-chart-line"></i>WebSite</a></li>

                    </ul>
                </div>

                <!-- user-profile-menu end-->
            </div>

        </div>
        <!-- dashbard-menu-wrap end  -->
        <!-- content -->
        <div class="dashboard-content">
            <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
            <div class="container dasboard-container">
                <!-- dashboard-title -->
                <div class="dashboard-title fl-wrap">
                    <div class="dashboard-title-item"><span>Add Listing</span></div>
                    <div class="dashbard-menu-header">
                        <div class="dashbard-menu-avatar fl-wrap">
                            <img src="images/avatar/5.jpg" alt="">
                            <h4>Welcome, <span>Alica Noory</span></h4>
                        </div>
                        <a href="index.html" class="log-out-btn   tolt" data-microtip-position="bottom"  data-tooltip="Log Out"><i class="far fa-power-off"></i></a>
                    </div>
                    <!--Tariff Plan menu-->
                    <div class="tfp-det-container">
                        <div   class="tfp-btn"><span>Your Tariff Plan : </span> <strong>Extended</strong></div>
                        <div class="tfp-det">
                            <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                            <a href="#" class="tfp-det-btn color-bg">Details</a>
                        </div>
                    </div>
                    <!--Tariff Plan menu end-->
                </div>
                <!-- dashboard-title end -->
                <div class="dasboard-wrapper fl-wrap no-pag">
                    <div class="dasboard-scrollnav-wrap scroll-to-fixed-fixed scroll-init2 fl-wrap">
                        <ul>
                            <li><a href="#sec1" class="act-scrlink">Info</a></li>
                            <li><a href="#sec2">Location</a></li>
                            <li><a href="#sec3">Media</a></li>
                            <li><a href="#sec4">Details</a></li>
                            <li><a href="#sec5">Rooms</a></li>
                            <li><a href="#sec6">Plans</a></li>
                            <li><a href="#sec7">Widgets</a></li>
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
                    <!-- dasboard-widget-title -->
                    <div class="dasboard-widget-title fl-wrap" id="sec1">
                        <h5><i class="fas fa-info"></i>Basic Informations</h5>
                    </div>
                    <!-- dasboard-widget-title end -->
                    <!-- dasboard-widget-box  -->
                    <div class="dasboard-widget-box fl-wrap">
                        <div class="custom-form">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Listing Title  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                    <input type="text" placeholder="Name of your business" value=""/>
                                </div>
                                <div class="col-sm-4">
                                    <label>Type</label>
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="All Types" class="chosen-select no-search-select" >
                                            <option>All Types</option>
                                            <option>Rent</option>
                                            <option>Sale</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label>Listing Price  <span class="dec-icon"><i class="far fa-money-bill-wave"></i></span></label>
                                    <input type="text" placeholder="Listing Price" value=""/>
                                </div>
                                <div class="col-sm-4">
                                    <label>Category</label>
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="Apartments" class="chosen-select no-search-select" >
                                            <option>All Categories</option>
                                            <option>House</option>
                                            <option>Apartment</option>
                                            <option>Hotel</option>
                                            <option>Villa</option>
                                            <option>Office</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <label>Keywords  <span class="dec-icon"><i class="far fa-key"></i></span></label>
                                    <input type="text" placeholder="Maximum 15 , should be separated by commas" value=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dasboard-widget-box  end-->
                    <!-- dasboard-widget-title -->
                    <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec2">
                        <h5><i class="fas fa-street-view"></i>Location / Contacts</h5>
                    </div>
                    <!-- dasboard-widget-title end -->
                    <!-- dasboard-widget-box  -->
                    <div class="dasboard-widget-box   fl-wrap">
                        <div class="custom-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Address <span class="dec-icon"><i class="far fa-map-marker"></i></span></label>
                                    <input type="text" placeholder="Address of your business" value=""/>
                                </div>
                                <div class="col-sm-4">
                                    <label>Longitude (Drag marker on the map)  <span class="dec-icon"><i class="far fa-long-arrow-alt-right"></i></span></label>
                                    <input type="text" id="long" placeholder="Map Longitude" value=""/>
                                </div>
                                <div class="col-sm-4">
                                    <label>Latitude (Drag marker on the map)<span class="dec-icon"><i class="far fa-long-arrow-alt-down"></i> </span></label>
                                    <input type="text" id="lat" placeholder="Map Latitude" value=""/>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="map-container">
                                <div id="singleMap" class="drag-map" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>City</label>
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="Apartments" class="chosen-select no-search-select" >
                                            <option>All Cities</option>
                                            <option>New York</option>
                                            <option>London</option>
                                            <option>Paris</option>
                                            <option>Kiev</option>
                                            <option>Moscow</option>
                                            <option>Dubai</option>
                                            <option>Rome</option>
                                            <option>Beijing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Email Address <span class="dec-icon"><i class="far fa-envelope"></i></span>  </label>
                                    <input type="text" placeholder="JessieManrty@domain.com" value=""/>
                                </div>
                                <div class="col-sm-6">
                                    <label>Phone <span class="dec-icon"><i class="far fa-phone"></i> </span> </label>
                                    <input type="text" placeholder="+7(123)987654" value=""/>
                                </div>
                                <div class="col-sm-6">
                                    <label> Website <span class="dec-icon"><i class="far fa-globe"></i> </span> </label>
                                    <input type="text" placeholder="themeforest.net" value=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dasboard-widget-box  end-->
                    <!-- dasboard-widget-title -->
                    <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec3">
                        <h5><i class="fas fa-image"></i>Header Media</h5>
                    </div>
                    <!-- dasboard-widget-title end -->
                    <!-- dasboard-widget-box  -->
                    <div class="dasboard-widget-box   fl-wrap">
                        <div class="custom-form">
                            <div class="add-list-media-header"  >
                                <label class="radio inline">
                                    <input type="radio" name="gender"  checked>
                                    <span>Carousel</span>
                                </label>
                            </div>
                            <div class="add-list-media-header">
                                <label class="radio inline">
                                    <input type="radio" name="gender">
                                    <span>Slider</span>
                                </label>
                            </div>
                            <div class="add-list-media-header">
                                <label class="radio inline">
                                    <input type="radio" name="gender"   >
                                    <span>  Background image</span>
                                </label>
                            </div>
                            <div class="clearfix"></div>
                            <div class="listsearch-input-item fl-wrap">
                                <form class="fuzone">
                                    <div class="fu-text">
                                        <span><i class="far fa-cloud-upload-alt"></i> Click here or drop files to upload</span>
                                        <div class="photoUpload-files fl-wrap"></div>
                                    </div>
                                    <input type="file" class="upload" multiple>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- dasboard-widget-box  end-->
                    <!-- dasboard-widget-title -->
                    <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec4">
                        <h5><i class="fas fa-list"></i>Listing Details</h5>
                    </div>
                    <!-- dasboard-widget-title end -->
                    <!-- dasboard-widget-box  -->
                    <div class="dasboard-widget-box   fl-wrap">
                        <div class="custom-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Area: <span class="dec-icon"><i class="far fa-sort-size-down-alt"></i></span></label>
                                            <input type="text" placeholder="House Area" value=""/>
                                            <label>Accomodation: <span class="dec-icon"><i class="far fa-users"></i></span></label>
                                            <input type="text" placeholder="Listing Accomodation" value=""/>
                                            <label>Yard size: <span class="dec-icon"><i class="far fa-trees"></i></span></label>
                                            <input type="text" placeholder="Yard size" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Bedrooms: <span class="dec-icon"><i class="far fa-bed"></i></span></label>
                                            <input type="text" placeholder="House Bedrooms" value=""/>
                                            <label>Bathrooms: <span class="dec-icon"><i class="far fa-bath"></i></span></label>
                                            <input type="text" placeholder="House Bathrooms" value=""/>
                                            <label>Garage: <span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
                                            <input type="text" placeholder="Number of cars" value=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Details Text</label>
                                    <div class="listsearch-input-item">
                                        <textarea cols="40" rows="3" style="height: 235px" placeholder="Datails" spellcheck="false"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <label>Amenities: </label>
                            <div class=" add-list-tags fl-wrap">
                                <!-- Checkboxes -->
                                <ul class="fl-wrap filter-tags no-list-style ds-tg">
                                    <li>
                                        <input id="check-aaa5" type="checkbox" name="check" checked>
                                        <label for="check-aaa5"> Wi Fi</label>
                                    </li>
                                    <li>
                                        <input id="check-bb5" type="checkbox" name="check" checked>
                                        <label for="check-bb5">Pool</label>
                                    </li>
                                    <li>
                                        <input id="check-dd5" type="checkbox" name="check">
                                        <label for="check-dd5"> Security</label>
                                    </li>
                                    <li>
                                        <input id="check-cc5" type="checkbox" name="check">
                                        <label for="check-cc5"> Laundry Room</label>
                                    </li>
                                    <li>
                                        <input id="check-ff5" type="checkbox" name="check" checked>
                                        <label for="check-ff5"> Equipped Kitchen</label>
                                    </li>
                                    <li>
                                        <input id="check-c4" type="checkbox" name="check">
                                        <label for="check-c4">Air Conditioning</label>
                                    </li>
                                    <li>
                                        <input id="check-c18" type="checkbox" name="check">
                                        <label for="check-c18">Parking</label>
                                    </li>
                                </ul>
                                <!-- Checkboxes end -->
                            </div>
                        </div>
                    </div>
                    <!-- dasboard-widget-box  end-->
                    <!-- dasboard-widget-title -->
                    <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec5">
                        <h5><i class="fas fa-home-lg-alt"></i>Rooms</h5>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
                            <label class="onoffswitch-label" for="myonoffswitch5">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <!-- dasboard-widget-title end -->
                    <!-- dasboard-widget-box  -->
                    <div class="dasboard-widget-box   fl-wrap">
                        <div class="custom-form add_room-item-wrap">
                            <div class="add_room-container fl-wrap">
                                <!-- add_room-item   -->
                                <div class="add_room-item fl-wrap" >
                                    <span class="remove-rp tolt" data-microtip-position="left"  data-tooltip="Remove Room"><i class="fal fa-times-circle"></i></span>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Room Title: <span class="dec-icon"><i class="fal fa-layer-group"></i></span></label>
                                            <input type="text" placeholder="Standard Family Room" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Additional Room: <span class="dec-icon"><i class="fal fa-layer-plus"></i></span></label>
                                            <input type="text" placeholder="Example: Sauna" value=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Room Details</label>
                                            <div class="listsearch-input-item">
                                                <textarea cols="40" rows="3" style="height: 175px;margin-bottom: 10px" placeholder="Datails" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Room Images</label>
                                            <div class="listsearch-input-item fl-wrap">
                                                <form class="fuzone">
                                                    <div class="fu-text">
                                                        <span><i class="far fa-cloud-upload-alt"></i> Click here or drop files to upload</span>
                                                        <div class="photoUpload-files fl-wrap"></div>
                                                    </div>
                                                    <input type="file" class="upload" multiple>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <label>Amenities: </label>
                                    <div class=" add-list-tags fl-wrap">
                                        <!-- Checkboxes -->
                                        <ul class="fl-wrap filter-tags no-list-style ds-tg">
                                            <li>
                                                <input id="check-2aaa5" type="checkbox" name="check" checked>
                                                <label for="check-2aaa5">Air conditioner</label>
                                            </li>
                                            <li>
                                                <input id="check-2bb5" type="checkbox" name="check" checked>
                                                <label for="check-2bb5">Tv Inside</label>
                                            </li>
                                            <li>
                                                <input id="check-2dd5" type="checkbox" name="check">
                                                <label for="check-2dd5"> Ceramic bath</label>
                                            </li>
                                            <li>
                                                <input id="check-2cc5" type="checkbox" name="check" checked>
                                                <label for="check-2cc5">Microwave</label>
                                            </li>
                                        </ul>
                                        <!-- Checkboxes end -->
                                    </div>
                                </div>
                                <!--add_room-item end  -->
                            </div>
                            <a href="#" class="add-room-item">Add New <i class="fal fa-plus"></i> </a>
                        </div>
                    </div>
                    <!-- dasboard-widget-box  end-->
                    <!-- dasboard-widget-title -->
                    <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec6">
                        <h5><i class="fas fa-ruler-combined"></i>House Plans </h5>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch22">
                            <label class="onoffswitch-label" for="myonoffswitch22">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <!-- dasboard-widget-title end -->
                    <!-- dasboard-widget-box  -->
                    <div class="dasboard-widget-box   fl-wrap">
                        <div class="custom-form add_room-item-wrap">
                            <div class="add_room-container fl-wrap">
                                <!-- add_room-item   -->
                                <div class="add_room-item fl-wrap" >
                                    <span class="remove-rp tolt" data-microtip-position="left"  data-tooltip="Remove"><i class="fal fa-times-circle"></i></span>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Plan Title: <span class="dec-icon"><i class="far fa-ruler-horizontal"></i></span></label>
                                                    <input type="text" placeholder=" First Floor Plan " value=""/>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Plan Optional info: <span class="dec-icon"><i class="far fa-ruler-horizontal"></i></span></label>
                                                    <input type="text" placeholder="Example: 286 sq ft" value=""/>
                                                </div>
                                            </div>
                                            <label>Plan Details</label>
                                            <div class="listsearch-input-item">
                                                <textarea cols="40" rows="3" style="height: 85px;" placeholder="Datails" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Upload Images</label>
                                            <div class="listsearch-input-item fl-wrap">
                                                <form class="fuzone">
                                                    <div class="fu-text">
                                                        <span><i class="far fa-cloud-upload-alt"></i> Click here or drop files to upload</span>
                                                        <div class="photoUpload-files fl-wrap"></div>
                                                    </div>
                                                    <input type="file" class="upload">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--add_room-item end  -->
                            </div>
                            <a href="#" class="add-room-item">Add New <i class="fal fa-plus"></i> </a>
                        </div>
                    </div>
                    <!-- dasboard-widget-box  end-->
                    <!-- dasboard-widget-title -->
                    <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec7">
                        <h5><i class="fas fa-sliders-h"></i>Content Widgets</h5>
                    </div>
                    <!-- dasboard-widget-title end -->
                    <!-- dasboard-widget-box  -->
                    <div class="dasboard-widget-box   fl-wrap">
                        <div class="custom-form">
                            <div class="row">
                                <!-- content-widget-switcher -->
                                <div class="col-md-4">
                                    <div class="content-widget-switcher fl-wrap">
                                        <span class="content-widget-switcher-title">Video Presentation</span>
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchmc" checked>
                                            <label class="onoffswitch-label" for="myonoffswitchmc">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                        <div class="content-widget-switcher-item fl-wrap">
                                            <label>Video Youtube: <span class="dec-icon"><i class="fab fa-youtube"></i></span></label>
                                            <input type="text" placeholder="Youtube Or Vimeo" value=""/>
                                            <label>Video VImeo: <span class="dec-icon"><i class="fab fa-vimeo-v"></i></span></label>
                                            <input type="text" placeholder="Youtube Or Vimeo" value=""/>
                                        </div>
                                    </div>
                                </div>
                                <!-- content-widget-switcher end-->
                                <!-- content-widget-switcher -->
                                <div class="col-md-4">
                                    <div class="content-widget-switcher fl-wrap">
                                        <span class="content-widget-switcher-title">Propertie Documents</span>
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchmc523" checked>
                                            <label class="onoffswitch-label" for="myonoffswitchmc523">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                        <div class="content-widget-switcher-item fl-wrap">
                                            <form class="fuzone">
                                                <div class="fu-text">
                                                    <span><i class="far fa-cloud-upload-alt"></i> Click here or drop files to upload</span>
                                                    <div class="photoUpload-files fl-wrap"></div>
                                                </div>
                                                <input type="file" class="upload" multiple>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- content-widget-switcher end-->
                                <!-- content-widget-switcher -->
                                <div class="col-md-4">
                                    <div class="content-widget-switcher fl-wrap">
                                        <span class="content-widget-switcher-title">Mortgage Calculator</span>
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchmc423" checked>
                                            <label class="onoffswitch-label" for="myonoffswitchmc423">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="content-widget-switcher fl-wrap" style="margin-top: 20px">
                                        <span class="content-widget-switcher-title">Google Map</span>
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchmc923">
                                            <label class="onoffswitch-label" for="myonoffswitchmc923">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="content-widget-switcher fl-wrap" style="margin-top: 20px">
                                        <span class="content-widget-switcher-title">Contact Form</span>
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchmc`23">
                                            <label class="onoffswitch-label" for="myonoffswitchmc`23">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- content-widget-switcher end-->
                            </div>
                        </div>
                    </div>
                    <!-- dasboard-widget-box  end-->
                    <a href="#" class="btn  color-bg float-btn">Save Changes </a>
                </div>
            </div>
            <div class="limit-box fl-wrap"></div>
            <!-- dashboard-footer -->
            <div class="dashboard-footer">
                <div class="dashboard-footer-links fl-wrap">
                    <span>Helpfull Links:</span>
                    <ul>
                        <li><a href="about.html">About  </a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="pricing.html">Pricing Plans</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="help.html">Help Center</a></li>
                    </ul>
                </div>
                <a href="#main" class="dashbord-totop  custom-scroll-link"><i class="fas fa-caret-up"></i></a>
            </div>
            <!-- dashboard-footer end -->
        </div>
        <!-- content end -->
        <div class="dashbard-bg gray-bg"></div>
    </div>
    <!-- wrapper end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script src="{{asset("Content/js/jquery.min.js")}}"></script>
<script src="{{asset("Content/js/plugins.js")}}"></script>
<script src="{{asset("Content/js/scripts.js")}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places"></script>
<script src="{{asset("Content/js/map-add.js")}}"></script>
<script src="{{asset("Content/js/dashboard.js")}}"></script>
</body>


</html>
