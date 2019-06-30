<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('plugins/font-awesome-5.8.2/css/all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
@if(isset($homepage) && $homepage = 'index')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }} ">
@else
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_responsive.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offers_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offers_responsive.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/single_listing_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/single_listing_responsive.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colorbox.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/comment.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog_styles.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog_responsive.css') }} ">
@endif
