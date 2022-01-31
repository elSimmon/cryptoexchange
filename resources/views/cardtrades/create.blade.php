@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-bold text-capitalize text-primary">Sell: <span class="text-danger">{{$card->card_category->name}}</span>-<span class="text-info">{{$card->type}}</span>-<span class="text-success">{{$card->country}}</span></h4>
                        <h4 class="card-title text-bold text-capitalize text-primary">Range: <span class="text-danger">${{$card->min}}</span>-<span class="text-info">${{$card->max}}</span> Rate: <span class="text-success">NGN {{number_format($card->rate,2)}}</span></h4>
                        <p class="card-description">
                           Original Card Value
                        </p>
                        <form method="post" enctype="multipart/form-data" action="{{route('sell-giftcard')}}" autocomplete="off">@csrf
                            <input type="hidden" name="rate" id="rate" value="{{$card->rate}}">
                            <input type="hidden" name="min" id="min" value="{{$card->min}}">
                            <input type="hidden" name="max" id="max" value="{{$card->max}}">
                            <input type="hidden" name="card_category_id" id="card_category_id" value="{{$card->card_category_id}}">
                            <input type="hidden" name="giftcard_id" id="giftcard_id" value="{{$card->id}}">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label for="original_card_amount">
                                            <span class="input-group-text bg-info text-white">U$D Amount</span>
                                        </label>
                                    </div>
                                    <input type="text" name="original_card_amount" id="original_card_amount" class="form-control"  autocomplete="off">
                                </div>
                                <br>
                                <span class="text-danger" id="invalid"></span>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <div class="input-group">--}}
{{--                                    <div class="input-group-prepend">--}}
{{--                                        <span class="input-group-text bg-info text-white">NGN Amount</span>--}}
{{--                                    </div>--}}
{{--                                    <input type="text" id="nairaWorth" name="naira_worth" class="form-control" autocomplete="off" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            @switch($card->type)
                                @case('E-code')
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label for="e_code">
                                                <span class="input-group-text bg-info text-white">E-code:</span>
                                            </label>
                                        </div>
                                        <input type="text" name="e_code" id="e_code" class="form-control"  autocomplete="off">
                                    </div>
                                    <br>
                                    <span class="text-danger" id="invalid"></span>
                                </div>
                                @break
                                @default
                                <p class="text-muted text-primary">Upload Card Picture</p>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info text-white">Card Image</span>
                                        </div>
                                        <input type="file" id="card_picture" name="card_picture" class="form-control">
                                    </div>
                                </div>

                                <p class="text-muted text-primary">Upload Card Receipt Picture(optional):</p>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info text-white">Card Receipt</span>
                                        </div>
                                        <input type="file" id="receipt_picture" name="receipt_picture" class="form-control">
                                    </div>
                                </div>
                            @endswitch

{{--                            <h5 class="text-center text-success text-bold">NGN<span id="nairaNotice"></span> </h5>--}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Proceed &raquo;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-img">
                        <img src="{{asset('images/gift-card-picture.png')}}" alt="Convert Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function getDollarRate(){
                    var ngnRate = Number(document.getElementById('rate').value)
                    var min = Number(document.getElementById('min').value);
                    var max = Number(document.getElementById('max').value);
                    var usd = document.getElementById('original_card_amount').value;
                    var usd_value = Number(usd);
                    // var ngn = 0;
                    if(usd_value < min ){
                        document.getElementById('invalid').innerText = 'Minimum Value not reached';
                        console.log(usd_value);
                        console.log(ngnRate);
                        console.log(min);
                        console.log(max);
                    }else if (usd_value > max){
                        document.getElementById('invalid').innerText = 'Maximum Value exceeded';
                    }else {
                        var ngn1 = usd_value * ngnRate;
                        var ngn = Number(ngn1);
                        // document.getElementById('nairaWorth').value = ngn;
                        document.getElementById('nairaNotice').innerText = ngn.toString();
                        document.getElementById('invalid').innerText = 'OK';
                        console.log(usd_value);
                        console.log(ngnRate);
                        console.log(min);
                        console.log(max);
                        console.log(ngn);
                    }
        }
    </script>

@endsection
