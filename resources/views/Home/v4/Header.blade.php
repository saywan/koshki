



<header class="header-nav menu_style_home_one style2 home3 navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid p0">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{asset("/stylethree/images/koshkiFinal.png")}}" alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{asset("/stylethree/images/koshkiFinal.png")}}" alt="header-logo.png" style="width: 50px">
                <img class="logo2 img-fluid" src="{{asset("/stylethree/images/koshkiFinal.png")}}" alt="header-logo2.png" style="width: 50px">
                <span>koshki zinwe</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">

                <li>
                    <a href="{{url('v4/project')}}">
                        @lang('messages.menu3')
                    </a>

                </li>

                <li>
                    <a href="{{url('v4/about')}}">

                        @lang('messages.menu4')
                    </a>

                </li>

                <li>
                    <a href="{{url('v4/contactus')}}">

                        @lang('messages.menu5')
                    </a>
                </li>

                <li>
                    <a href="{{url('v4/EstateRequest')}}">

                        @lang('messages.menu6')
                    </a>
                </li>

                <li>
                    <a href="{{url('v4/')}}">
            <span class="title">
                 @lang('messages.menu2')
            </span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('v4/EstateProperties/sale')}}">

                                @lang('messages.menu21')
                            </a>
                        </li>
                        <li>
                            <a href="{{url('v4/EstateProperties/rent')}}">
                                @lang('messages.menu22')

                            </a>
                        </li>
                    </ul>
                </li>



                <li class="list-inline-item list_s">
                    <a href="{{route('login')}}" class="btn flaticon-user" >
                        <span class="dn-lg">@lang('messages.login')</span>
                    </a>
                </li>




                <li>
                    <a href="#">
            <span class="title">
                  @if(session()->get('locale') == 'en')
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

                        <li><a href="#"  data-lantext="en">English</a></li>
                        <li><a href="#" data-lantext="ku">Kurdish</a></li>


                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</header>
