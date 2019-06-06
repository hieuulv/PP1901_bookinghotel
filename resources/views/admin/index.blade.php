@extends('layouts.App_admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title "> {{ __('Demo1') }}
                        </h4>
                        <p class="card-category"> {{ __('Demo2') }} </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>  {{ __('ID') }}</th>
                                <th>  {{ __('Name') }}</th>
                                <th>  {{ __('Country') }}</th>
                                <th>  {{ __('City') }}</th>
                                <th>  {{ __('Salary') }}</th>
                                <th>  {{ __('Add') }}</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td class="text-primary">$36,738</td>
                                    <td>
                                        <a href="">{{ __('Edit') }}</a>
                                        <a href="">{{ __('Remote') }}</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
