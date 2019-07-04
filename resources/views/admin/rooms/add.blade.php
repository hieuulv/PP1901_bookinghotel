@extends('layouts.App_admin')


@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Dashboard') }}</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-6 ">
                        <form action="{{ route('add_rooms') }}" method="post">
                            {{--bat buoc phai co token--}}
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="form-group">
                                <label for="name">{{ __('Name Rooms') }}</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <textarea class="form-control" rows="1" name="title"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="rooms_detail">{{ __('Rooms Detail') }}</label>
                                <textarea class="form-control" rows="5" name="rooms_detail"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">{{ __('Price') }}</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="address">{{ __('Address') }}</label>
                                <input type="text" name="address" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="bed_type">{{ __('Loại Giường') }}</label>
                                <select name="bed_type" class="form-control">
                                    <option>{{ __('----- Chọn loại -----') }}</option>
                                    <option>{{ __('Giường Đơn') }}</option>
                                    <option>{{ __('Giường Đôi') }}</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">
                                {{__('Create Rooms')}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
