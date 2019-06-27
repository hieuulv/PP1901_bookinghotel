@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="{{ asset('images/single_background.jpg') }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title"> {{ __('the rooms') }}</div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_listing">

                    <!-- Hotel Info -->

                    <div class="hotel_info">

                        <!-- Title -->
                        <div class="hotel_title_container d-flex flex-lg-row flex-column">
                            <div class="hotel_title_content">
                                <h1 class="hotel_title">{{ __('phong 1') }}</h1>

                                <div class="hotel_location">{{ __('me tr ha') }}</div>
                            </div>
                            <div class="hotel_title_button ml-lg-auto text-lg-right">
                                <div class="button book_button trans_200"><a
                                            href="#">book<span></span><span></span><span></span></a></div>
                                <div class="hotel_map_link_container">
                                    <div class="hotel_map_link">{{ __('Xem vị trí trên Maps') }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Listing Image -->

                        <div class="hotel_image">
                            <img src="images/listing_hotel.jpg" alt="">
                            <div class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
                                <div class="hotel_review">
                                    <div class="hotel_review_content">
                                        <div class="hotel_review_title">{{ __('very good') }}</div>
                                        <div class="hotel_review_subtitle">{{ __('100 reviews') }}</div>
                                    </div>
                                    <div class="hotel_review_rating text-center">{{ __('8.1') }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Hotel Gallery -->

                        <div class="hotel_gallery">
                            <div class="hotel_slider_container">
                                <div class="owl-carousel owl-theme hotel_slider">

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="images/listing_1.jpg">
                                            <img src="{{ asset('images/listing_thumb_1.jpg') }}"
                                                 alt="https://unsplash.com/@jbriscoe">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="images/listing_2.jpg">
                                            <img src="images/listing_thumb_2.jpg" alt="https://unsplash.com/@grovemade">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="images/listing_3.jpg">
                                            <img src="images/listing_thumb_3.jpg"
                                                 alt="https://unsplash.com/@fransaraco">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="images/listing_4.jpg">
                                            <img src="images/listing_thumb_4.jpg" alt="https://unsplash.com/@workweek">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="images/listing_5.jpg">
                                            <img src="images/listing_thumb_5.jpg" alt="https://unsplash.com/@workweek">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="images/listing_6.jpg">
                                            <img src="images/listing_thumb_6.jpg" alt="https://unsplash.com/@avidenov">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="images/listing_7.jpg">
                                            <img src="images/listing_thumb_7.jpg"
                                                 alt="https://unsplash.com/@pietruszka">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="images/listing_8.jpg">
                                            <img src="images/listing_thumb_8.jpg" alt="https://unsplash.com/@rktkn">
                                        </a>
                                    </div>

                                    <!-- Hotel Gallery Slider Item -->
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement" href="images/listing_9.jpg">
                                            <img src="images/listing_thumb_9.jpg" alt="https://unsplash.com/@mindaugas">
                                        </a>
                                    </div>
                                </div>

                                <!-- Hotel Slider Nav - Prev -->
                                <div class="hotel_slider_nav hotel_slider_prev">
                                    <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="28px" height="33px" viewBox="0 0 28 33"
                                         enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
                                                <linearGradient id='hotel_grad_prev'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
											M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
											C22.545,2,26,5.541,26,9.909V23.091z"/>
                                        <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
											11.042,18.219 "/>
										</svg>
                                </div>

                                <!-- Hotel Slider Nav - Next -->
                                <div class="hotel_slider_nav hotel_slider_next">
                                    <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="28px" height="33px" viewBox="0 0 28 33"
                                         enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
                                                <linearGradient id='hotel_grad_next'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
										M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
										C22.545,2,26,5.541,26,9.909V23.091z"/>
                                        <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
										17.046,15.554 "/>
										</svg>
                                </div>

                            </div>
                        </div>

                        <!-- Hotel Info Text -->

                        <div class="hotel_info_text">
                            <p>{{ __('vai loi gioi thieu qua ve phong') }}</p>
                        </div>

                        <!-- Hotel Info Tags -->

                        <div class="hotel_info_tags">
                            <ul class="hotel_icons_list">
                                <li class="hotel_icons_item"><img src="images/post.png" alt=""></li>
                                <li class="hotel_icons_item"><img src="images/compass.png" alt=""></li>
                                <li class="hotel_icons_item"><img src="images/bicycle.png" alt=""></li>
                                <li class="hotel_icons_item"><img src="images/sailboat.png" alt=""></li>
                            </ul>
                        </div>

                    </div>

                    <!-- Rooms -->

                    <div class="rooms">

                        <!-- Room -->
                        <div class="room">

                            <!-- Room -->
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="room_image">
                                        <img src="images/room_2.jpg"
                                             alt="https://unsplash.com/@oowgnuj">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="room_content">
                                        <div class="room_title">{{ __('Double or Twin Room') }}</div>
                                        <div class="room_price">{{ __('$99/night') }}</div>
                                        <div class="room_text">{{ __('FREE cancellation before 23:59 on 20 December 2017') }}</div>
                                        <div class="room_extra">{{ __('Breakfast $7.50') }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-lg-right">
                                    <div class="room_button">
                                        <div class="button book_button trans_200"><a
                                                    href="#">{{ __('xem them') }}<span></span><span></span><span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Reviews -->

                    <div class="reviews">
                        <div class="reviews_title">{{ __('reviews') }}</div>
                        <div class="reviews_container">

                            <!-- Review -->
                            <div class="review">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="review_image">
                                            <img src="images/review_1.jpg" alt="https://unsplash.com/@saaout">
                                        </div>
                                    </div>
                                    <div class="col-lg-11">
                                        <div class="review_content">
                                            <div class="review_title_container">
                                                <div class="review_title">{{ __('Le Van hieu') }}</div>

                                                <div class="review_rating">{{ __('9.5') }}</div>
                                            </div>
                                            <div class="review_text">
                                                <p>{{ __('phuc vu rat tot') }}</p>
                                            </div>
                                            <div class="review_name">{{ __('abcg@gmial.com') }}</div>
                                            <div class="review_date">{{ __('2019-06-26 16:28:17') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{--commnet--}}
                            <section class="commnet">
                                <form class="contact-form row">
                                    <div class="form-field col-lg-6">
                                        <input id="name" class="input-text js-input" type="text" required>
                                        <label class="label" for="name">Name</label>
                                    </div>
                                    <div class="form-field col-lg-6 ">
                                        <input id="email" class="input-text js-input" type="email" required>
                                        <label class="label" for="email">E-mail</label>
                                    </div>

                                    <div class="form-field col-lg-12">
                                        <input id="message" class="input-text js-input" type="text" required>
                                        <label class="label" for="message">Message</label>
                                    </div>
                                    <div class="form-field col-lg-12">
                                        <input class="submit-btn" type="submit" value="Submit">
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection