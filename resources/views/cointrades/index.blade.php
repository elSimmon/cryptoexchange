@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        <p class="card-title mb-0 text-light">Recent Cryptocurrency Trades</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Value</th>
                                    <th>Dollar</th>
                                    <th>Naira</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cointrades as $record)
                                    <tr>
                                        <td>{{$record->user->name}}</td>
                                        <td class="font-weight-bold">{{$record->coin}} {{number_format($record->btcAmount, 8)}}</td>
                                        <td class="font-weight-bold">USD {{number_format($record->usdAmount, 2)}}</td>
                                        <td class="font-weight-bold">NGN {{number_format($record->ngnAmount, 2)}}</td>
                                        <td class="font-weight-medium">
                                            @switch($record->status)
                                                @case('success')
                                                <div class="badge badge-success">
                                                    {{$record->status}}
                                                </div>
                                                @break

                                                @case('failed')
                                                <div class="badge badge-danger">
                                                    {{$record->status}}
                                                </div>
                                                @break

                                                @default
                                                <div class="badge badge-primary">
                                                    {{$record->status}}
                                                </div>
                                            @endswitch

                                        </td>
                                        <td><a href="" class="btn btn-sm btn-outline-info">review</a> </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="" class="btn btn-sm btn-info text-pull-right">More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
