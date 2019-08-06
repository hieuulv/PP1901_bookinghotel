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

    <div class="container">
        <div class="table_booking">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Ngày đến</th>
                    <th scope="col">Ngày đi</th>
                    <th scope="col">Phòng</th>
                    <th scope="col">Action</th>
                    <th scope="col">Trạng thái</th>
                </tr>
                </thead>
                <tbody>

                @foreach($bookings as $booking)
                    <tr>
                    <th scope="row">{{$booking->name}}</th>
                    <td>{{Auth::user()->email}}</td>
                    <td>{{$booking->phone}}</td>
                    <td>{{$booking->check_in}}</td>
                    <td>{{$booking->check_out}}</td>
                    <td>
                        <a href="{{Route('detail',$booking->room_id)}}">
                            {{ __('Xem phong') }}
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-info btn-circle btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <button class="btn btn-outline-warning waves-effect">{{$booking->status}}</button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
