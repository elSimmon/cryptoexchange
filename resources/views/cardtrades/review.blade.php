@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        <p class="card-title mb- text-light">Details</p>
                        <p class="card-title mb- text-light">Country: {{$cardtrade->giftcard->country}}</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>USD Amount</th>
                                    <th>NGN Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$cardtrade->user->name}}</td>
                                        <td class="font-weight-bold">{{$cardtrade->card_category->name}}</td>
                                        <td class="font-weight-bold">{{$cardtrade->giftcard->type}}</td>
                                        <td class="font-weight-bold">USD {{$cardtrade->original_card_amount}}</td>
                                        <td class="font-weight-bold">NGN {{$cardtrade->naira_worth}}</td>
                                        <td class="font-weight-medium">
                                            @switch($cardtrade->status)
                                                @case('success')
                                                <div class="badge badge-success">
                                                    {{$cardtrade->status}}
                                                </div>
                                                @break

                                                @case('failed')
                                                <div class="badge badge-danger">
                                                    {{$cardtrade->status}}
                                                </div>
                                                @break

                                                @default
                                                <div class="badge badge-primary">
                                                    {{$cardtrade->status}}
                                                </div>
                                            @endswitch

                                        </td>
                                        <td><a href="{{route('approve-card', [$cardtrade->id])}}" class="btn btn-sm btn-outline-info">Approve</a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <h3>E-Code: {{$cardtrade->e_code}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        <p class="card-title text-light">Uploaded Images</p>
                    </div>
                    <div class="card-body">
                        <img src="{{asset('images/cardpics/'.$cardtrade->card_picture)}}" alt="Gift card picture" class="img-fluid"><br><br>
                        @if($cardtrade->receipt_picture != null)
                            <p class="font-weight-bold text-info">Card Receipt</p>
                            <img src="{{asset('images/receipts/'.$cardtrade->receipt_picture)}}" alt="Gift card receipt" class="img-fluid">
                        @endif
                    </div>
                    <div class="card-footer text-right">
                        <a href="" class="btn btn-sm btn-info text-pull-right">More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        <p class="card-title mb- text-light">Give feedback</p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('send-message')}}">
                            @csrf
                            <div class="form-group">
                                <textarea name="content" id="message" rows="12" class="form-control" placeholder="Message:"></textarea>
                                <input type="hidden" name="user_id" value="{{$cardtrade->user_id}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Send Feedback</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-right">
                        <a href="" class="btn btn-sm btn-info text-pull-right">...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
