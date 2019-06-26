<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{__('Travelix')}}</div>
    </a>

    <hr class="sidebar-divider my-0">
    <!-- --------------------------------------------------EndSidebar------------------------------------------------- -->

    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{__('Dashboard')}}</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    {{-----------------category-----------------}}
    <div class="sidebar-heading">
        {{ __('CATEGORIES') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_category') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>{{ __('Categories') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end category-----------------}}

    {{-----------------contact-----------------}}
    <div class="sidebar-heading">
        {{ __('Comment') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_contact') }}">
            <i class="fas fa-fw fa-inbox"></i>
            <span>{{ __('Contact') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end contact-----------------}}

    {{-----------------commnet-----------------}}
    <div class="sidebar-heading">
        {{ __('Comment') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_comment') }}">
            <i class="fas fa-fw  fa-comments"></i>
            <span>{{ __('Comment') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end comment-----------------}}

    {{-----------------user-----------------}}
    <div class="sidebar-heading">
        {{ __('Users') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_user') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('Users') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end user-----------------}}

    {{-----------------Setting-----------------}}
    <div class="sidebar-heading">
        {{ __('Setting') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('index_setting') }}">
            <i class="fas fa-fw fa-cogs"></i>
            <span>{{ __('Setting') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    {{-----------------end seting-----------------}}

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
