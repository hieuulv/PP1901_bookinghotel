<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ __('Dashboard') }}</title>
    @include('layouts.admin.top_asset')
</head>

<body id="page-top">
<div id="wrapper">
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
    <!-- --------------------------------------------------EndSidebar------------------------------------------------- -->


    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <!-- ----------------------------------------top bar---------------------------------------------------- -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <a href="{{ route('index') }}" target="_blank"
                           class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                            <i class="fa fa-home fa-sm text-white-70"></i> {{ __('Go Back Home') }}
                        </a>
                    </div>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- ----------------------------------------profile---------------------------------------- -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ Auth::user()->name }}
                            </span>
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                               data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <!-- ----------------------------------------end profile---------------------------------------- -->

                </ul>
            </nav>
            <!-- ----------------------------------------end top bar---------------------------------------------------- -->

            <!-- ----------------------------------------------content---------------------------------------------- -->
        @yield('content')
        <!-- ----------------------------------------------end content---------------------------------------------- -->

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
@include('layouts.admin.bottom_asset')
</body>
</html>
