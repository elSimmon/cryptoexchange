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
        <div class="col-12 col-xl-4">
         <div class="justify-content-end d-flex">
          <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
           <button class="btn btn-sm btn-danger">Clap!</button>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Crypto Trades</p>
              <p class="fs-30 mb-2">{{$cointrades->count()}}</p>
              <p>All time</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Registered Users</p>
              <p class="fs-30 mb-2">{{$users->count()}}</p>
              <p>All time</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Withdrawal Requests</p>
              <p class="fs-30 mb-2">{{number_format($withdrawals->count())}}</p>
              <p>All times</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Gift Card Trades</p>
              <p class="fs-30 mb-2">{{number_format($cardtrades->count())}}</p>
              <p>All times</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Inbound Payments</p>
              <h4 class="font-weight-bold mb-2">NGN 40,006.00</h4>
              <p>Total</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Outbound Payments</p>
              <h4 class="font-weight-bold mb-2">NGN 40,006.00</h4>
              <p>Total</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Inbound Wallets</p>
              <h4 class="font-weight-bold mb-2">NGN 40,006.00</h4>
              <p>Current</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Profit Margin</p>
              <h4 class="font-weight-bold mb-2">NGN 40,006.00</h4>
              <p>0.22% Since Inception</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header bg-info text-light">
          <p class="card-title mb-0 text-light">Recent Withdrawal Requests</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-borderless">
              <thead>
                <tr>
                  <th>User</th>
                  <th>Bank</th>
                  <th>Account number</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($latest_withdrawals as $record)
                <tr>
                  <td>{{$record->user->name}}</td>
                    <td class="font-weight-bold">{{strtoupper($record->bank['name'])}}</td>
                    <td class="font-weight-bold">{{$record->bank['account_number']}}</td>
                    <td class="font-weight-bold">NGN {{$record->amount}}</td>
                  <td class="font-weight-medium">
                      @switch($record->status)
                          @case('paid')
                          <div class="badge badge-success">
                              {{$record->status}}
                          </div>
                          @break

                          @case('cancelled')
                          <div class="badge badge-danger">
                              {{$record->status}}
                          </div>
                          @break

                          @default
                          <div class="badge badge-warning">
                              {{$record->status}}
                          </div>
                      @endswitch

                  </td>
{{--                    <td><a href="" class="btn btn-sm btn-outline-danger">cancel</a> </td>--}}
                    <td>
                      @if($record->status == 'paid')

                      @else
                        <a href="{{route('pay', [$record->id])}}" class="btn btn-sm btn-outline-info">Payout</a>
                      @endif
                    </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer text-right">
          <a href="{{route('all-withdrawals')}}" class="btn btn-sm btn-info text-pull-right">More...</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header bg-info text-light">
          <p class="card-title mb-0 text-light">Recent Cryptocurrency Trades</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-borderless">
              <thead>
                <tr>
                  <th>User</th>
                  <th>Value</th>
                  <th>Dollar</th>
                  <th>Naira</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($latest_cointrades as $record)
                <tr>
                  <td>{{$record->user->name}}</td>
                    <td class="font-weight-bold">{{$record->coin}} {{number_format($record->btcAmount, 8)}}</td>
                    <td class="font-weight-bold">USD {{number_format($record->usdAmount, 2)}}</td>
                    <td class="font-weight-bold">NGN {{number_format($record->ngnAmount, 2)}}</td>
                  <td class="font-weight-medium">
                      @switch($record->status)
                          @case('success')
                          <div class="badge badge-success">
                              {{$record->status}}
                          </div>
                          @break

                          @case('failed')
                          <div class="badge badge-danger">
                              {{$record->status}}
                          </div>
                          @break

                          @default
                          <div class="badge badge-primary">
                              {{$record->status}}
                          </div>
                      @endswitch

                  </td>
                    <td><a href="" class="btn btn-sm btn-outline-info">review</a> </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer text-right">
          <a href="{{route('all-bitcoin-charges')}}" class="btn btn-sm btn-info text-pull-right">More...</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header bg-info text-light">
          <p class="card-title mb- text-light">Recent Gift Card Trades</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-borderless">
              <thead>
                <tr>
                  <th>User</th>
{{--                  <th>Category</th>--}}
{{--                  <th>Type</th>--}}
                  <th>NGN Amount</th>
                  <th>USD Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($latest_cardtrades as $record)
                <tr>
                  <td>{{$record->user->name}}</td>
{{--                    <td class="font-weight-bold">{{$record->card_category->name}}</td>--}}
{{--                    <td class="font-weight-bold">{{$record->giftcard->type}}</td>--}}
                    <td class="font-weight-bold">NGN {{$record->naira_worth}}</td>
                  <td class="font-weight-bold">USD {{$record->original_card_amount}}</td>
                  <td class="font-weight-medium">
                      @switch($record->status)
                          @case('success')
                          <div class="badge badge-success">
                              {{$record->status}}
                          </div>
                          @break

                          @case('failed')
                          <div class="badge badge-danger">
                              {{$record->status}}
                          </div>
                          @break

                          @default
                          <div class="badge badge-primary">
                              {{$record->status}}
                          </div>
                      @endswitch

                  </td>
                    <td><a href="{{route('review-card', [$record->id])}}" class="btn btn-sm btn-outline-info">review</a> </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer text-right">
          <a href="{{route('all-gift-card-trades')}}" class="btn btn-sm btn-info text-pull-right">More...</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
