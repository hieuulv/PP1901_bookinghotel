@extends('layouts.App_admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> {{__('Booking')}}</h1>
        </div>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{__('Table Booking')}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Ngày đến</th>
                            <th scope="col">Ngày đi</th>
                            <th scope="col">Phòng</th>
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
                                    <button class="btn btn-outline-warning waves-effect">{{$booking->status}}</button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
