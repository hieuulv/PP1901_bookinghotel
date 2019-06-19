@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="logo_container">
            <div class="logo">
                <a href="{{ route('index') }}">
                    <h1><img src="images/logo.png" alt="">{{ __('Travelix') }}</h1>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 text-center">
                <h4>{{ __('Cập nhật thông tin cá nhân') }}</h4>
            </div>

            <div class="col-md-5">
                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail"
                         alt="avatar">
                    <h6>{{ __('Upload a different photo...') }}</h6>
                    <input type="file" class="text-center center-block file-upload">
                    <br>
                    <hr>

                </div>
            </div>

            <div class="col-md-7 personal-info">

                <form class="form-horizontal" method="post" action="{{ route('edit_profile', $users->id) }}">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">{{ __('Họ và tên:') }}</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" value="{{ $users->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">{{ __('Số điện thoại:') }}</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" value="{{ __('016177111') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">{{ __('Email:') }}</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" value="{{ __('janesemail@gmail.com') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">{{ __('Địa chỉ::') }}</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" value="{{ __('Ha Noi') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-10">
                            <input type="button" class="btn btn-primary" value="{{ __('Save Changes') }}">
                            <span></span>
                            <input type="reset" class="btn btn-default" value=""{{ __('Cancel') }}>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
