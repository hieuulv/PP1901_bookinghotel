@extends('layouts.App_admin')


@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Status') }}</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-6 ">
                        <form action="">
                            <input type="radio" name="status" value="Đang chờ xử lý"> <button class="btn btn-outline-warning waves-effect">{{ $status_bookings->status }}</button> <br>
                            <input type="radio" name="status" value="Đã đặt thành công"> {{ __('Đã đặt thành công') }}<br>
                            <input type="radio" name="status" value="Hủy đặt phòng"> {{ __('Hủy đặt phòng') }}
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
