@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="/upload_image/{{ $slide_subpages[5]['image'] }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title">{{ $slide_subpages[5]['title'] }}</div>
        </div>
    </div>

    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-5 title_booking">{{ __('Hình thức đặt phòng') }}</h3>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label class="ip_form">Họ và Tên{{ __('') }}</label> <label class="obligatory">{{ __('*') }}</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label class="ip_form">{{ __('Số điện thoại') }}</label> <label class="obligatory">{{ __('*') }}</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label class="ip_form">{{ __('Check In') }}</label> <label class="obligatory">{{ __('*') }}</label>
                                <div style="position: relative;">
                                    <span class="fa fa-calendar icon"
                                          style="position: absolute; right: 10px; top: 10px;"></span>
                                    <input type="text" class="form-control" id="arrival_date">
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label class="ip_form">{{ __('Check Out') }}</label> <label class="obligatory">{{ __('*') }}</label>
                                <div style="position: relative;">
                                    <span class="fa fa-calendar icon"
                                          style="position: absolute; right: 10px; top: 10px;"></span>
                                    <input type="text" class="form-control" id="departure_date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="ip_form">{{ __('Phòng') }}</label>
                                <input type="text" class="form-control form_readonly" value="Phong 1" readonly>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="ip_form">{{ __('Số người') }}</label>
                                <input type="text" class="form-control form_readonly" value="2 người" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="ip_form">{{ __('Ghi chú') }}</label>
                                <textarea name="note" id="message" class="form-control " cols="30"
                                          rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <button type="submit" class="btn btn-primary">{{ __('Đặt Ngay') }}</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-5">
                    <h3 class="mb-5 title_booking">{{ __('Phòng đang chọn') }}</h3>
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="/images/offer_8.jpg" alt="Generic placeholder image" class="img-fluid">
                            <div class="offer_name">
                                <a href="">{{ __('Home1') }}</a>
                            </div>
                        </figure>

                    </div>

                    <div class="media-body">
                        <ul class="room-specs">
                            <li class="price_room"><span class="price_room_1">{{ __('Giá phòng:') }}</span>{{ __(' 320.000') }} <span>{{ __('VNĐ') }}</span> </li>
                        </ul>
                        <p class="title_room">{{ __('day la title') }}</p>
                        <div class="offers_icons">
                            <ul class="offers_icons_list">
                                <li class="offers_icons_item">
                                    <img src="{{ asset('images/post.png') }}" alt="">
                                </li>
                                <li class="offers_icons_item">
                                    <img src="{{ asset('images/compass.png') }}" alt="">
                                </li>
                                <li class="offers_icons_item">
                                    <img src="{{ asset('images/bicycle.png') }}" alt="">
                                </li>
                                <li class="offers_icons_item">
                                    <img src="{{ asset('images/sailboat.png') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
