<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title> {{ __('Dashboard') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link href="{{ asset('css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet"/>

</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="">
        <div class="logo">
            <a href="" class="simple-text logo-normal">
                {{ __('Travelix') }}
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active ">
                    <a class="nav-link" href="{{ route('index') }}">
                        <i class="material-icons"> {{ __('unarchive') }}</i>
                        <p> {{ __('Return Homepage') }}</p>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a class="nav-link" href="">
                        <i class="material-icons"> {{ __('dashboard') }}</i>
                        <p> {{ __('Dashboard') }}</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="material-icons"> {{ __('person') }}</i>
                        <p> {{ __('User Profile') }}</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="material-icons"> {{ __('content_paste') }}</i>
                        <p> {{ __('Table List') }}</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="material-icons"> {{ __('library_books') }}</i>
                        <p> {{ __('Typography') }}</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="material-icons"> {{ __('bubble_chart') }}</i>
                        <p> {{ __('Icons') }}</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="material-icons"> {{ __('location_ons') }}</i>
                        <p> {{ __('Maps') }}</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="material-icons"> {{ __('notifications') }}</i>
                        <p> {{ __('Notifications') }}</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">Stats</p>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">Account</p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        @yield('content')

    </div>
</div>

<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
</body>

</html>
