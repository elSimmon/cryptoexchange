@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        @foreach($messages as $item)
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-danger">Giftcard Error Message</h4>
                        <p class="card-description  mb-0">
                            There is something wrong with the giftcard:
                        </p>
                        <h5 class="card-description text-danger">
                            {{$item->message}}
                        </h5>
                        <div class="template-demo d-flex justify-content-end flex-wrap">
                            <button type="button" class="btn btn-success btn-fw">Try again</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
