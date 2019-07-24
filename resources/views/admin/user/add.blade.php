@extends('layouts.App_admin')

@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Dashboard') }}</h1>
        </div>

        <form action="{{ route('add_user') }}" method="post" enctype="multipart/form-data" novalidate>

            {{--bat buoc phai co token--}}
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row justify-content-center">

                        <div class="col-4 text-center" style="margin-top: 100px">
                            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"
                                 class="avatar img-circle img-thumbnail"
                                 alt="avatar">
                            <h6>{{ __('Upload a different photo...') }}</h6>
                            <input type="file" name="images" class="text-center center-block file-upload  @error('images') is-invalid @enderror" value="{{ old('images') }}">
                            @error('images')
                            <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <div class="col-6 ">

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Birthday') }}</label>
                                <input type="date" name="birthday" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday') }}">
                                @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">{{ __('Phone') }}</label>
                                <input type="text" name="phone" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>email
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">{{ __('Address') }}</label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" >
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" name="password" required autocomplete="new-password"
                                       class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{!! $message !!}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Confirm Password') }}</label>
                                <input type="password" name="password_confirm" required autocomplete="new-password"
                                       class="form-control  @error('password') is-invalid @enderror">
                                @error('password_confirm')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="role">{{ __('Role') }}</label>
                                <select name="role" class="form-control">
                                    <option>member</option>
                                    <option>admin</option>
                                    <option>manager</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">
                                {{ __('Add User') }}
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
