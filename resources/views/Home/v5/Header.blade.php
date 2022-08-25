


<header class="main-header position-absolute fixed-top m-0 navbar-dark header-sticky header-sticky-smart header-mobile-xl">
    <div class="sticky-area">
        <div class="container container-xxl">
            <div class="d-flex align-items-center">
                <nav class="navbar navbar-expand-xl bg-transparent px-0 w-100 w-xl-auto">

                    <a class="navbar-brand mr-7" href="{{url('/')}}">
                        <img src="{{asset("five/images/koshkiFinal.png")}}" alt="HomeID" class="normal-logo" style="width: 80px">
                        <img src="{{asset("five/images/koshkiFinal.png")}}" alt="HomeID" class="sticky-logo">
                    </a>





                    <div class="collapse navbar-collapse mt-3 mt-xl-0" id="primaryMenu02">
                        <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">

                            <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                <a class="nav-link  p-0" href="{{url('v5/about')}}" >
                                    @lang('messages.menu4')

                                </a>

                            </li>
                            <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                <a class="nav-link  p-0" href="{{url('v5/contactus')}}" >
                                    @lang('messages.menu5')

                                </a>

                            </li>

                            <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                <a class="nav-link  p-0" href="{{url('EstateRequest')}}" >
                                    @lang('messages.menu6')

                                </a>

                            </li>
                            <li id="navbar-item-dashboard" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                <a class="nav-link dropdown-toggle p-0" href="{{url('v5/project')}}" data-toggle="dropdown">
                                    @lang('messages.menu2')
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pt-3 pb-0 pb-xl-3" aria-labelledby="navbar-item-dashboard">
                                    <li class="dropdown-item">
                                        <a id="navbar-link-dashboard" class="dropdown-link" href="{{url('v5/EstateProperties/sale')}}">
                                            @lang('messages.menu21')
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a id="navbar-link-add-new-property" class="dropdown-link" href="{{url('v5/EstateProperties/rent')}}">
                                            @lang('messages.menu22')
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                <a class="nav-link  p-0" href="index.html" >
                                    @lang('messages.menu2')

                                </a>

                            </li>
                        </ul>
                        <div class="d-block d-xl-none">
                            <ul class="navbar-nav flex-row ml-auto align-items-center justify-content-lg-end flex-wrap py-2">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2" href="#" id="bd-versions-mobile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ENG
                                    </a>
                                    <div class="dropdown-menu dropdown-sm dropdown-menu-left" aria-labelledby="bd-versions-mobile">
                                        <a class="dropdown-item" href="#">VN</a>
                                        <a class="dropdown-item active" href="#">ENG</a>
                                        <a class="dropdown-item" href="#">ARB</a>
                                        <a class="dropdown-item" href="#">KR</a>
                                        <a class="dropdown-item" href="#">JN</a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li class="nav-item ">
                                    <a class="nav-link pl-3 pr-2" href="{{route('login')}}">
                                        @lang('messages.login')
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="ml-auto d-none d-xl-block">
                    <ul class="navbar-nav flex-row ml-auto align-items-center justify-content-lg-end flex-wrap py-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(session()->get('locale') == 'en')
                                    English
                                @elseif(session()->get('locale') == 'ku')
                                    Kurdish
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-sm dropdown-menu-right langee" aria-labelledby="bd-versions">

                                <a class="dropdown-item  @if(session()->get('locale') == 'en') active @endif" data-lantext="en">
                                    English
                                </a>
                                <a class="dropdown-item @if(session()->get('locale') == 'ku') active @endif"  data-lantext="ku">
                                    Kurdish
                                </a>

                            </div>
                        </li>
                        <li class="divider"></li>
                        <li class="nav-item ">
                            <a class="nav-link pl-3 pr-2" href="{{route('login')}}">
                                @lang('messages.login')
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
