<header class="main-header">
    <!--  logo  -->
    <div class="logo-holder"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
    <!-- logo end  -->
    <!-- nav-button-wrap-->
    <div class="nav-button-wrap color-bg nvminit">
        <div class="nav-button">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!-- header-search button  -->



    <div class="nav-holder main-menu">
        <nav>
            <ul class="no-list-style">

                <li>
                    <a href="{{url('EstateRequest')}}">

                        @lang('messages.menu6')
                    </a>
                </li>
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
                <li>
                    <a href="{{url('project')}}">
                        @lang('messages.menu3')

                    </a>

                </li>

                <li>


                </li>
                <li>
                    <a href="#">
                        @lang('messages.menu2')
                    </a>
                    <!--second level -->
                    <ul>
                        <li><a href="{{url('EstateProperties/sale')}}">

                                @lang('messages.menu21')
                            </a></li>
                        <li><a href="{{url('EstateProperties/rent')}}">
                                @lang('messages.menu22')

                            </a></li>

                    </ul>
                    <!--second level end-->
                </li>
                <li>
                    <a href="{{url('/')}}">
                        @lang('messages.menu1')
                    </a>

                </li>
            </ul>
        </nav>
    </div>


    <div class="header-opt_btn tolt" data-microtip-position="bottom" data-tooltip="Language / Currency">
        <span><i class="fal fa-globe"></i></span>
    </div>


    <div class="show-reg-form ">
        <a href="{{route('login')}}">
            <i class="fas fa-user"></i><span>Sign In</span>
        </a>
    </div>


    <div class="header-search-wrapper novis_search">
        <div class="header-serach-menu">
            <div class="custom-switcher fl-wrap">
                <div class="fieldset fl-wrap">
                    <input type="radio" name="duration-1" id="buy_sw" class="tariff-toggle" checked>
                    <label for="buy_sw">Buy</label>
                    <input type="radio" name="duration-1" class="tariff-toggle" id="rent_sw">
                    <label for="rent_sw" class="lss_lb">Rent</label>
                    <span class="switch color-bg"></span>
                </div>
            </div>
        </div>
        <div class="custom-form">
            <form method="post" name="registerform">
                <label>Keywords </label>
                <input type="text" placeholder="Address , Street , State..." value=""/>
                <label>Categories</label>
                <select data-placeholder="Categories" class="chosen-select on-radius no-search-select">
                    <option>All Categories</option>
                    <option>House</option>
                    <option>Apartment</option>
                    <option>Hotel</option>
                    <option>Villa</option>
                    <option>Office</option>
                </select>
                <label style="margin-top:10px;">Price Range</label>
                <div class="price-rage-item fl-wrap">
                    <input type="text" class="price-range" data-min="100" data-max="100000" name="price-range1"
                           data-step="1" value="1" data-prefix="$">
                </div>
                <button onclick="location.href='listing.html'" type="button" class="btn float-btn color-bg"><i
                        class="fal fa-search"></i> Search
                </button>
            </form>
        </div>
    </div>


    <div class="header-opt-modal novis_header-mod">
        <div class="header-opt-modal-container hopmc_init">
            <div class="header-opt-modal-item lang-item fl-wrap">
                <h4>Language:
                    <span>
                       @if(session()->get('locale') == 'en')
                           English
                        @elseif(session()->get('locale') == 'ku')
                           Kurdish
                        @endif
                    </span>
                </h4>
                <div class="header-opt-modal-list fl-wrap">
                    <ul>
                        <li><a href="#"  data-lantext="en">English</a></li>
                        <li><a href="#" data-lantext="ku">Kurdish</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>

</header>
