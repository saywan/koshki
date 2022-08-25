<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item">
            <a class="d-flex align-items-center" href="#">
                <i data-feather="airplay"></i>
                <span
                    class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span>
                <span    class="badge badge-light-warning rounded-pill ms-auto me-1">2</span>
            </a>
            <ul class="menu-content ">
                <li>
                    <a class="d-flex align-items-center" href="{{url('admin/index')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">
                            @lang('messages.admin')
                        </span>
                    </a>
                </li>
                <li class="active">
                    <a class="d-flex align-items-center" href="{{url('/')}}" target="_blank">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="eCommerce">@lang('messages.Website')</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class=" nav-item">
            <a class="d-flex align-items-center" href="#">
                <i data-feather='home'></i>
                <span class="menu-title text-truncate" data-i18n="User">
                @lang('messages.Estate')
                </span>
            </a>
            <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateEstate')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                              @lang('messages.NewEstate')
                        </span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="View">

                               @lang('messages.ViewEstate')
                            </span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a class="d-flex align-items-center" href="{{route('admin.Estate')}}">
                                <span class="menu-item text-truncate" data-i18n="Account">
                                     @lang('messages.ListEstate')
                                </span>
                            </a>
                        </li>


                    </ul>
                </li>
            </ul>
        </li>


        <li class=" nav-item">
            <a class="d-flex align-items-center" href="#">
                <i data-feather="folder-plus"></i>
                <span class="menu-title text-truncate" data-i18n="User">
                   @lang('messages.Project')
                </span>
            </a>
            <ul class="menu-content">
                <li>

                    <a class="d-flex align-items-center" href="{{route('admin.CreateProject')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                              @lang('messages.NewProject')
                        </span>
                    </a>

                </li>
                <li>
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="View">

                               @lang('messages.ViewProject')
                            </span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a class="d-flex align-items-center" href="{{route('admin.Project')}}">
                                <span class="menu-item text-truncate" data-i18n="Account">
                                     @lang('messages.ListProject')
                                </span>
                            </a>
                        </li>


                    </ul>
                </li>
            </ul>
        </li>

        <li class=" nav-item">
            <a class="d-flex align-items-center" href="#">
                <i data-feather='layers'></i>
                <span class="menu-title text-truncate" data-i18n="User">

                     @lang('messages.PropertyEstate')
                </span>
            </a>
            <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateRegion')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                            @lang('messages.RegionEstate')
                        </span>
                    </a>
                </li>
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateEstateType')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                             @lang('messages.TypeEstate')
                        </span>
                    </a>
                </li>
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateFacilities')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                               @lang('messages.Amenities')
                        </span>
                    </a>
                </li>
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateUsageType')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">
                               @lang('messages.Commercial')
                        </span>
                    </a>
                </li>
               {{-- <li><a class="d-flex align-items-center" href="{{route('admin.CreateOwnership')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Ownership Estate</span>
                    </a>
                </li>--}}


            </ul>
        </li>

        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('logout') }}"
                                 class="btn nav-link bg-danger-bright" title="خروج" data-toggle="tooltip" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" target="_blank">
                <i data-feather="power"></i>
                <span class="menu-title text-truncate" data-i18n="Raise Support">
                     @lang('messages.logout')
                </span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf

                </form>
            </a>
        </li>
    </ul>
</div>
