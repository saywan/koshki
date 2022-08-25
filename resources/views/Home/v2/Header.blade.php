<header class="main-header">


    <div class="header-lower">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="index.html"><img src="{{asset("styleone/images/koshkiFinal.png")}}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">

                                <li><a href="{{url('v2/EstateRequest')}}"><span>@lang('messages.menu6')</span></a></li>
                                <li><a href="{{url('v2/contactus')}}"><span>@lang('messages.menu5')</span></a></li>
                                <li><a href="{{url('v2/about')}}"><span>@lang('messages.menu4')</span></a></li>
                                <li><a href="{{url('v2/project')}}"><span>@lang('messages.menu3')</span></a></li>
                                <li class="dropdown">
                                    <a href="{{url('v2/')}}"><span>  @lang('messages.menu2')</span></a>
                                    <ul>
                                        <li><a href="{{url('v2/EstateProperties/sale')}}">  @lang('messages.menu21')</a>
                                        </li>
                                        <li><a href="{{url('v2/EstateProperties/rent')}}"> @lang('messages.menu22')</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="dropdown ">
                                    <a href="#">
                                <span>
                                    @if(session()->get('locale') == 'en')
                                        English
                                    @elseif(session()->get('locale') == 'ku')
                                        Kurdish
                                    @endif
                                </span>
                                    </a>
                                    <ul class="languagepart">
                                        <li><a href="#" data-lantext="en"> English</a></li>
                                        <li><a href="#"  data-lantext="ku">Kurdish</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href=""><img src="{{asset("styleone/images/koshkiFinal.png")}}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>

            </div>
        </div>
    </div>
</header>
