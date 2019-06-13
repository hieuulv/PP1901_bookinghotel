@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5" style="top: 35px;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo tài khoản mới!</h1>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="text"
                                           class="form-control form-control-user @error('name') is-invalid @enderror"
                                           name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus
                                           placeholder="Họ và tên">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text"
                                           class="form-control form-control-user @error('phone') is-invalid @enderror"
                                           name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                           placeholder="Số điện thoại">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="email"
                                           class="form-control form-control-user @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email"
                                           placeholder="Địa Chỉ Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password"
                                           class="form-control form-control-user @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                           name="password_confirmation" required autocomplete="new-password"
                                           placeholder="Nhập Lại Password">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Đăng ký') }}
                                </button>
                            </form>

                            <br>

                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Bạn đã có tài khoản? Đăng nhập!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
