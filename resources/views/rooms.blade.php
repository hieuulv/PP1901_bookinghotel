@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="/upload_image/{{ $slide_subpages[1]['image'] }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title">{{ $slide_subpages[1]['title'] }}</div>
        </div>
    </div>


    <div class="offers">

        <div class="container">
            <div class="row">

                <div class="col-lg-1 temp_col"></div>

                <div class="col-lg-11">

                    <div class="offers_sorting_container">
                        <ul class="offers_sorting">
                            <li>
                                <span class="sorting_text">{{ __('Giá') }}</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="sort_btn">
                                        <span>{{ __('Hiện thị tất cả') }}</span>
                                    </li>
                                    <li class="sort_btn">
                                        <span>{{ __('Tăng dần') }}</span>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <span class="sorting_text">{{ __('Loại Phòng') }}</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="sort_btn">
                                        <span>{{ __('Hiện thị tất cả') }}</span>
                                    </li>
                                    <li class="sort_btn">
                                        <span>{{ __('Tăng dần') }}</span>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <span class="sorting_text">{{ __('So nguoi') }}</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="sort_btn">
                                        <span>{{ __('Hiện thị tất cả') }}</span>
                                    </li>
                                    <li class="sort_btn">
                                        <span>{{ __('Tăng dần') }}</span>
                                    </li>
                                </ul>
                            </li>


                            <button>{{ __('tim kiem') }}</button>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Offers Grid -->

                    <div class="offers_grid">

                        <!-- Offers Item -->
                        <div class="offers_item rating_4">
                            <div class="row">
                                <div class="col-lg-1 temp_col"></div>
                                <div class="col-lg-3 col-1680-4">
                                    <div class="offers_image_container">
                                        <div class="offers_image_background"
                                             style="background-image:url(images/offer_1.jpg)"></div>
                                        <div class="offer_name"><a href="{{ route('detail') }}">{{ __('Phong 1') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="offers_content">
                                        <div class="offers_price">{{ __('$70') }}<span>{{ __('/đêm') }}</span></div>
                                        <p class="offers_text">
                                            {{ __('Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.') }}
                                        </p>
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/sailboat.png" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="button book_button"><a
                                                    href="{{ route('detail') }}">{{ __('Xem them') }}
                                                <span></span><span></span><span></span></a>
                                        </div>
                                        <div class="offer_reviews">
                                            <div class="offer_reviews_content">
                                                <div class="offer_reviews_title">{{ __('very good') }}</div>
                                                <div class="offer_reviews_subtitle">{{ __('100 review') }}</div>
                                            </div>
                                            <div class="offer_reviews_rating text-center">{{ __('8.1') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Offers Item -->
                        <div class="offers_item rating_4">
                            <div class="row">
                                <div class="col-lg-1 temp_col"></div>
                                <div class="col-lg-3 col-1680-4">
                                    <div class="offers_image_container">
                                        <div class="offers_image_background"
                                             style="background-image:url(images/offer_1.jpg)"></div>
                                        <div class="offer_name"><a href="{{ route('detail') }}">{{ __('lhong 1') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="offers_content">
                                        <div class="offers_price">{{ __('$50') }}<span>{{ __('/đêm') }}</span></div>
                                        <p class="offers_text">
                                            {{ __('Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.') }}
                                        </p>
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/sailboat.png" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="button book_button"><a
                                                    href="{{ route('detail') }}">{{ __('Xem them') }}
                                                <span></span><span></span><span></span></a>
                                        </div>
                                        <div class="offer_reviews">
                                            <div class="offer_reviews_content">
                                                <div class="offer_reviews_title">{{ __('very good') }}</div>
                                                <div class="offer_reviews_subtitle">{{ __('100 review') }}</div>
                                            </div>
                                            <div class="offer_reviews_rating text-center">{{ __('8.1') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
