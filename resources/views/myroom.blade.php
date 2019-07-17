@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="/upload_image/{{ $slide_subpages[6]['image'] }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title">{{ $slide_subpages[6]['title'] }}</div>
        </div>
    </div>



@endsection
