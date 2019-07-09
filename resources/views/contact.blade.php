@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="/upload_image/{{ $slide_subpages[3]['image'] }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title">{{ $slide_subpages[3]['title'] }}</div>
        </div>
    </div>


    <div class="contact_form_section">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Contact Form -->
                    <div class="contact_form_container">

                        <div class="contact_title text-center">{{ __('Liên hệ với chúng tôi') }}</div>

                        <form action="{{ route('contact_admin') }}" id="contact_form" method="post"
                              class="contact_form">
                            {{--bat buoc phai co token--}}
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="row">


                                <div class="col-6">
                                    <input type="text" id="contact_form_name" name="name" placeholder="Name"
                                           value="{{ old('name') }}"
                                           class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&emsp;{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <input type="text" id="contact_form_email" name="email" placeholder="E-mail"
                                           value="{{ old('email') }}"
                                           class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&emsp;{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <input type="text" id="contact_form_name" name="phone" placeholder="Phone"
                                           value="{{ old('phone') }}"
                                           class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <input type="text" id="contact_form_subject" name="address"
                                           placeholder="Address"
                                           value="{{ old('address') }}"
                                           class="form-control @error('address') is-invalid @enderror">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <textarea id="contact_form_message"
                                          class="form-control @error('content') is-invalid @enderror"
                                          name="content"
                                          rows="4" placeholder="Message">{{ old('content') }}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">
                                {{ __('send message') }}<span></span><span></span><span></span>
                            </button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                    <!-- About - Image -->
                    <div class="about_image">
                        <img src="images/man.png" alt="">
                    </div>

                </div>

                <div class="col-lg-4">

                    <!-- About - Content -->
                    <div class="about_content">
                        <div class="logo_container about_logo">
                            <div class="logo"><a href="#"><img src="images/logo.png"
                                                               alt="">{{ $settings[0]['text_logo'] }}</a></div>
                        </div>
                        <p class="about_text">
                            {{ __('Đến với Travelix của chúng tôi, quý khách sẽ được phục vụ tận tình. Đồng hành cùng chúng tôi bạn, bạn sẽ có những chuyến đi đầy trải nghiệm. Với Travelix, việc đặt chỗ ở, khách sạn, nhà riêng...trở nên nhanh chóng và dễ dàng.') }}
                        </p>
                        <ul class="about_social_list">
                            <li class="about_social_item">
                                <a href="#">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                            <li class="about_social_item">
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="about_social_item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="about_social_item">
                                <a href="#">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class="about_social_item">
                                <a href="#">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">

                    <!-- About Info -->
                    <div class="about_info">
                        <ul class="contact_info_list">
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div>
                                </div>
                                <div class="contact_info_text">{{ $settings[0]['address'] }}</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div>
                                </div>
                                <div class="contact_info_text">{{ $settings[0]['phone'] }}</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
                                </div>
                                <div class="contact_info_text">
                                    <a href="mailto:{{ $settings[0]['email'] }}?Subject=Hello"
                                       target="_top">
                                        {{ $settings[0]['email'] }}
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
