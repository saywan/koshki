<header class="main-header">
    <!--  logo  -->
    <div class="logo-holder"><a href="{{url('/')}}"><img src="{{asset("Content/images/logo232323.png")}}" alt="logo"></a>
    </div>





    <div class="show-reg-form ">
        {{-- <i class="fas fa-globe"></i>
         <span>
               <a class="dropdown-item" href="{{url( app()->getLocale() =='ku' ? 'en':'ku')}}">
             {{app()->getLocale() =='en' ? 'English':''}}
         </a>
         <a class="dropdown-item" href="{{url( app()->getLocale() =='en' ? 'ku':'en')}}">

             {{app()->getLocale() =='en' ? 'Kurdish':''}}
         </a>
         </span>--}}


        <button class="btn btn-secondary dropdown-toggle" type="button" aria-label="dropdownMenuButton">
            {{app()->getLocale() =='en' ? 'English':'Kurdish'}}
        </button>

        <a class="dropdown-item" href="{{url( app()->getLocale() =='ku' ? 'en':'ku')}}">
            {{app()->getLocale() =='ku' ? 'English':''}}
        </a>
        <a class="dropdown-item" href="{{url( app()->getLocale() =='en' ? 'ku':'en')}}">

            {{app()->getLocale() =='en' ? 'Kurdish':''}}
        </a>


    </div>

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
                    <a href="#" class="act-link">
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



</header>
