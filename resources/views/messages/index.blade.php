@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Messages</h4>
                        <p class="card-description">
                            Feedback Message Inbox
                        </p>
                        @foreach($messages as $item)
                            <div class="card card-inverse-info mb-5">
                                <div class="card-body">
                                    <p class="mb-4">
                                        {{$item->content}}
                                    </p>
                                    <button class="btn btn-secondary d-block d-sm-inline mx-auto">Mark as Read</button>
                                    <button class="btn btn-light d-block d-sm-inline mx-auto mt-2 mt-sm-0 ml-sm-1">Cancel</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
