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
                                <a href="{{route('request-withdrawal')}}" class="btn btn-light text-black btn-block">Withdraw to Bank</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card transparent">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <p class="mb-4">Bitcoin Wallet</p>
                                <p class="fs-30 mb-2">BTC0.00000000</p>
                                <p>My Bitcoin Balance</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('convert-bitcoin')}}" class="btn btn-light text-black btn-block">Sell Bitcoin</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card transparent" >
                        <div class="card bg-danger">
                            <div class="card-body text-light text-bold">
                                <p class="mb-4" style="position:relative;">Pending Withdrawal</p>
                                <p class="fs-30 mb-2"><span style="text-decoration: line-through;">N</span>{{number_format($pending->amount, 2)}}</p>
                                <p>Resolving Settlement...</p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-light text-black btn-block" href="#">Buzz Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 grid-margin transparent">
                <div class="row">
                    <div class="col-md-4 mb-4 stretch-card transparent">
                        <div class="card bg-dark">
                            <div class="card-body text-light text-bold">
                                <p class="mb-4">Ethereum Wallet</p>
                                <p class="fs-30 mb-2">ETH 0.00000000</p>
                                <p>My Ethereum balance</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('convert-ethereum')}}" class="btn btn-light text-black btn-block">Sell Ethereum</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card transparent">
                        <div class="card bg-warning text-black">
                            <div class="card-body">
                                <p class="mb-4">Doge Coin Wallet</p>
                                <p class="fs-30 mb-2">DOGE 0.00000000</p>
                                <p>My Doge Coin Balance</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('convert-dogecoin')}}" class="btn btn-light text-black btn-block">Sell Doge Coin</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card transparent" >
                        <div class="card bg-primary">
                            <div class="card-body text-light text-bold">
                                <p class="mb-4" style="position:relative;">USD Coin Wallet</p>
                                <p class="fs-30 mb-2">USDC 0.00000000</p>
                                <p>My USD Coin Balance</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('convert-usdcoin')}}" class="btn btn-light text-black btn-block">Sell USD Coin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card text-center">
                    <div class="card-image bg-info">
                        <img class="img-fluid img-responsive" src="{{asset('images/giftcards-selection.png')}}" alt="Sell Gift Cards in Nigeria">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="{{route('all-cards')}}" class="btn btn-lg btn-info">Sell Gift Cards</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
