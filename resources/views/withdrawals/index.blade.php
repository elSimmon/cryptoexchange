@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        <p class="card-title mb-0 text-light">All Withdrawal Requests</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Bank</th>
                                    <th>Account number</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($withdrawals as $record)
                                    <tr>
                                        <td>{{$record->user->name}}</td>
                                        <td class="font-weight-bold">{{strtoupper($record->bank->name)}}</td>
                                        <td class="font-weight-bold">{{$record->bank->account_number}}</td>
                                        <td class="font-weight-bold">NGN {{$record->amount}}</td>
                                        <td class="font-weight-medium">
                                            @switch($record->status)
                                                @case('paid')
                                                <div class="badge badge-success">
                                                    {{$record->status}}
                                                </div>
                                                @break

                                                @case('cancelled')
                                                <div class="badge badge-danger">
                                                    {{$record->status}}
                                                </div>
                                                @break

                                                @default
                                                <div class="badge badge-warning">
                                                    {{$record->status}}
                                                </div>
                                            @endswitch

                                        </td>
{{--                                        <td><a href="" class="btn btn-sm btn-outline-danger">cancel</a> </td>--}}
                                        <td>
                                            @if($record->status == 'paid')

                                            @else
                                                <a href="{{route('pay', [$record->id])}}" class="btn btn-sm btn-outline-info">Payout</a>
                                            @endif
                                        </td>                                    </tr>
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
