@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 col-xl-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset('images/cards/'.$card_category->image)}}" alt="Card Image" class="img img-fluid"/>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('update-card-category')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$card_category->id}}">
                            <div class="form-group">
                                <label for="name">Card Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$card_category->name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Card Image (Replace above image)</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
