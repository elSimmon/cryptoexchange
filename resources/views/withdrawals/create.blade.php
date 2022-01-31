@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-bold text-capitalize text-primary">How Much do you want to withdraw?</h4>
                        <p class="card-description">
                            Enter Value Below and Choose a bank account
                        </p>
                        <form method="post" action="{{route('withdraw')}}" autocomplete="off">@csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">NGN Amount</span>
                                    </div>
                                    <input type="text" name="amount" id="usdAmount" class="form-control" placeholder="10000" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">Bank Account</span>
                                    </div>
                                    <select class="form-control" name="bank_id" required>
                                        <option value="">==Select Bank==</option>
                                        @foreach($banks as $bank)
                                            <option value="{{$bank->id}}">{{$bank->name}} | {{$bank->account_number}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <p class="text-muted text-primary">Your current balance: <span class="text-danger text-sm font-weight-bold">NGN {{number_format($balance->balance, 2)}}</span> </p>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Withdraw &raquo;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-img">
                        <img src="{{asset('images/cashout.png')}}" alt="Convert Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
