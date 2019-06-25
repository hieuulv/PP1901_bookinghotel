<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Header -->
    @include('layouts.display.top_asset')
    <!-- Enf Header -->
</head>

<body>

<div class="super_container">

    <!-- Header -->
        @include('layouts.display.header')
    <!-- Enf Header -->

    <!-- Slide -->
    @if(isset($homepage) && $homepage == 'contact')
        @include('layouts.display.slide')
    @endif
    <!-- Enf Slide -->

    <!-- Content -->
    @yield('content')
    <!-- End Header -->

    <!-- Map -->
    @include('layouts.display.map')
    <!-- End Map -->

    <!-- Footer -->
    @include('layouts.display.footer')
    <!-- End Footer -->

    <!-- Copyright -->
    @include('layouts.display.copyright')
    <!-- End Copyright -->

</div>

    @include('layouts.display.bottom_asset')

</body>
</html>
