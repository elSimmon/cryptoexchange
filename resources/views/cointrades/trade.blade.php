@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-bold text-capitalize text-primary">PAY WITH BITCOIN</h4>
                        <p class="card-description">
                            Copy the address or scan the QR Code to Pay:
                        </p>
                        <iframe src="{{$charge['data']['hosted_url']}}"></iframe>
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
    <script type="text/javascript">
        // $(document).ready(function(){
        //
        // });
        //
        // function getBitcoinRate(){
        //     let currency = 'usd'
        //     let endpoint = 'https://bitpay.com/api/rates/'+currency
        //
        //     $.ajax({
        //         url: endpoint,
        //         contentType: "application/json",
        //         dataType: "json",
        //         success: function (result){
        //             let btcAmount = document.getElementById('btcAmount').value
        //             let btc = parseFloat(btcAmount)
        //             let usd = parseFloat(result.rate * btc)
        //             document.getElementById('ngnAmount').value = parseFloat(usd * 500)
        //             document.getElementById('usdAmount').value = usd
        //             document.getElementById('nairaNotice').innerText = parseFloat(usd * 500)
        //         }
        //     })
        //
        // }


    </script>

@endsection
