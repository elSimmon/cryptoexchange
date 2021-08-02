@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold text-info">Welcome {{Auth::User()->name}}</h3>
                        <h6 class="font-weight-normal mb-0 text-warning">All systems are running smoothly! </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin transparent">
                <div class="row">
                    <div class="col-md-4 mb-4 stretch-card transparent">
                        <div class="card bg-success">
                            <div class="card-body text-light text-bold">
                                <p class="mb-4">Naira Wallet</p>
                                <p class="fs-30 mb-2"><span style="text-decoration: line-through;">N</span>{{number_format($wallet->balance, 2)}}</p>
                                <p>My Naira balance</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('withdraw')}}" class="btn btn-outline-warning btn-block">Withdraw to Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Bitcoin Wallet</p>
                                <p class="fs-30 mb-2">BTC0.00061344</p>
                                <p>My Bitcoin Balance</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('convert-bitcoin')}}" class="btn btn-outline-info btn-block">Trade Bitcoin</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card transparent" >
                        <div class="card bg-danger">
                            <div class="card-body text-light text-bold">
                                <p class="mb-4" style="position:relative;">Pending</p>
                                <p class="fs-30 mb-2"><span style="text-decoration: line-through;">N</span>{{number_format(34040, 2)}}</p>
                                <p>Resolving Settlement...</p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-outline-info btn-block">Check Status</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Recent Transactions</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="" class="display expandable-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Quote#</th>
                                            <th>Product</th>
                                            <th>Business type</th>
                                            <th>Policy holder</th>
                                            <th>Premium</th>
                                            <th>Status</th>
                                            <th>Updated at</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
