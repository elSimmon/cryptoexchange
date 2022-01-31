@extends('layouts.app')
@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin transparent">
                <div class="row">
                    @foreach($card_categories as $item)
                    <div class="col-md-3 mb-4 stretch-card transparent">
                        <div class="card bg-white text-info">
                            <div class="card-img">
                                <a href="{{route('show-card-category', [$item->id])}}" class="">
                                <img src="{{asset('/images/cards/'.$item->image)}}" class="img-fluid img-responsive" height="120px">
                                </a>
                            </div>
{{--                            <div class="card-body text-info text-bold text-center outline-info">--}}
{{--                                <h5 class="mb-4">{{$item->name}} gift cards</h5>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <a href="{{route('show-card-category', [$item->id])}}" class="btn btn-info btn-block">Trade</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <!-- content-wrapper ends -->
@endsection
