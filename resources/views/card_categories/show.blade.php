@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-image">
                            <img class="img img-fluid img-responsive" src="{{asset('images/cards/'.$card_category->image)}}" alt="Card Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-info">{{$card_category->name}}: Sell a gift card</h4>
                            <p class="text-muted text-sm">Select according to your card value and type</p>
                        </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach($cards as $item)
                                                <div class="col-12 col-sm-4 col-md-3 col-xl-3 grid-margin stretch-card">
                                                    <div class="card bg-warning mb-3">
                                                        <div class="card-body ">
                                                            <h5 class="font-weight-bold text-primary">{{$item->type}}</h5>
                                                            <div class="d-flex justify-content-left">
                                                                <p class="text-bold text-primary">min: ${{$item->min}}</p>
                                                                <p class="text-bold text-info">max: ${{$item->max}}</p><br>
                                                                <p class="text-bold text-danger">Rate: <span
                                                                            style="text-decoration: line-through;">N</span>{{$item->rate}}/$</p>
                                                                <p class="font-weight-bold text-primary">{{$item->country}}</p>
                                                            </div>
                                                            <a href="{{route('sell-card', [$item->id])}}" class="btn btn-sm btn-info">Sell</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </div>
@endsection
