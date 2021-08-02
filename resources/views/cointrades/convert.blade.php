@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-bold text-capitalize text-primary">How Much Bitcoin do you want to sell?</h4>
                <p class="card-description">
                    Enter Bitcoin Value Below
                </p>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">BTC Amount</span>
                        </div>
                        <input type="text" class="form-control" placeholder="0.005888" aria-label="Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white" >NGN Amount</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">U$D Amount</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Proceed &raquo;</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-img">
                <img src="{{asset('images/convert.jpg')}}" alt="Convert Image" class="img-fluid">
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection
