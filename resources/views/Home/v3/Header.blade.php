



<ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">


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



   {{-- <li>
        <a href="#">

            @lang('messages.menu6')
        </a>
    </li>--}}
    <li>
        <a href="{{url('project')}}">
            @lang('messages.menu3')
        </a>

    </li>
    <li>
        <a href="{{url('#')}}">
            <span class="title">
                 @lang('messages.menu2')
            </span>
        </a>
        <ul>
            <li>
                <a href="{{url('EstateProperties/sale')}}">

                    @lang('messages.menu21')
                </a>
            </li>
            <li>
                <a href="{{url('EstateProperties/rent')}}">
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
                @elseif(session()->get('locale') == 'ar')
                    Arabic
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
            <li><a href="#" data-lantext="ar">Arabic</a></li>


        </ul>
    </li>
</ul>
