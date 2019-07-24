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
                <tr>
                    <th scope="row">Le van hieu</th>
                    <td>abc@gmail.com</td>
                    <td>01678700118</td>
                    <td>27-06-2019</td>
                    <td>30-06-2019</td>
                    <td>
                        <a href="">
                            babababab
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-info btn-circle btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <button class="btn btn-outline-warning waves-effect">Đang chờ xử lý</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
