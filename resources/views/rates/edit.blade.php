@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 col-xl-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Rate Form</h4>
                        <form class="form-inline" method="POST" action="{{route('update-rate',[$rate->id])}}">
                            @csrf
                            @method('PUT')
                            <label class="sr-only" for="inlineFormInputGroupUsername2">From</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">From</div>
                                </div>
                                <input type="text" name="from" value="{{$rate->from}}" class="form-control" id="inlineFormInputGroupUsername2" placeholder="USD">
                            </div>

                            <label class="sr-only" for="inlineFormInputGroupUsername2">To</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">To</div>
                                </div>
                                <input type="text" name="to" value="{{$rate->to}}" class="form-control" id="inlineFormInputGroupUsername2" placeholder="NGN">
                            </div>

                            <label class="sr-only" for="inlineFormInputGroupUsername2">Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rate</div>
                                </div>
                                <input type="text" name="rate" value="{{$rate->rate}}" class="form-control" id="inlineFormInputGroupUsername2" placeholder="500">
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
