


<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center" href="{{url('admin/index')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">AdminPanel</span>
                    </a>
                </li>
                <li class="active">
                    <a class="d-flex align-items-center" href="{{url('/')}}" target="_blank">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="eCommerce">Website</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class=" nav-item">
            <a class="d-flex align-items-center" href="#">
                <i data-feather='home'></i>
                <span class="menu-title text-truncate" data-i18n="User">Estate</span>
            </a>
            <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateEstate')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">New</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="View">View</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a class="d-flex align-items-center" href="{{route('admin.Estate')}}">
                                <span class="menu-item text-truncate" data-i18n="Account">List</span>
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
                    Property Estate
                </span>
            </a>
            <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateRegion')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Region</span>
                    </a>
                </li>
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateEstateType')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Estate Type</span>
                    </a>
                </li>
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateFacilities')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Facilities Estate</span>
                    </a>
                </li>
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateUsageType')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Usage Type Estate</span>
                    </a>
                </li>
                <li><a class="d-flex align-items-center" href="{{route('admin.CreateOwnership')}}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="List">Ownership Estate</span>
                    </a>
                </li>


            </ul>
        </li>

        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('logout') }}" class="btn nav-link bg-danger-bright" title="خروج" data-toggle="tooltip" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" target="_blank">
                <i data-feather="power"></i>
                <span class="menu-title text-truncate" data-i18n="Raise Support">
                    LogOut
                </span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf

                </form>
            </a>
        </li>
    </ul>
</div>
