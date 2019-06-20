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

                <form class="form-horizontal" method="post" action="">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">{{ __('Họ và tên:') }}</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" value="{{ $users->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">{{ __('Số điện thoại:') }}</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" value="{{ $users->phone }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">{{ __('Email:') }}</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" value="{{ $users->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">{{ __('Địa chỉ:') }}</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" value="{{ $users->address }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
