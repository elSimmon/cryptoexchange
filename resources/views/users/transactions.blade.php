@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        <p class="card-title mb-0 text-light">Transactions</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless table-danger">
                                <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Transaction type</th>
                                    <th>When</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($withdrawals as $record)
                                    <tr>
                                        <td class="font-weight-bold">NGN {{$record->amount}}</td>
                                        <td class="font-weight-bold">Withdrawal</td>
                                        <td class="font-weight-bold">{{\Carbon\Carbon::parse($record->updated_at)->diffForHumans()}}</td>
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
                                                transaction completed successfully.
                                            @else

                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <table class="table table-striped table-borderless table-success">
                                <tbody>
                                @foreach($carddeposits as $record)
                                    <tr>
                                        <td class="font-weight-bold">NGN {{$record->naira_worth}}</td>
                                        <td class="font-weight-bold">Deposit</td>
                                        <td class="font-weight-bold">{{\Carbon\Carbon::parse($record->updated_at)->diffForHumans()}}</td>
                                        <td class="font-weight-medium">
                                            @switch($record->status)
                                                @case('success')
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
                                            @if($record->status == 'success')
                                                wallet credited successfully.
                                            @else

                                            @endif
                                        </td>
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
