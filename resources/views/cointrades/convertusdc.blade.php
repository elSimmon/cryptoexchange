@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-bold text-capitalize text-primary">How Much USDC do you want to sell?</h4>
                        <p class="card-description">
                            Enter USDC Value Below
                        </p>
                        <form method="post" action="{{route('trade-usdc')}}" autocomplete="off">@csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">U$D Amount</span>
                                    </div>
                                    <input type="text" name="usdAmount" id="usdAmount" class="form-control" placeholder="10.8" onkeyup="getDollarRate()" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">USDC Amount</span>
                                    </div>
                                    <input type="text" id="btcAmount" name="btcAmount" class="form-control" placeholder="0.005888" onkeyup="getUsdcRate()" autocomplete="off" required>
                                </div>
                            </div>

                            <p class="text-muted text-primary">Naira Equivalent:</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white" >NGN Amount</span>
                                    </div>
                                    <input type="text" name="ngnAmount" id="ngnAmount" class="form-control" aria-label="Amount (to the nearest naira)" autocomplete="off">
                                </div>
                            </div>
                            <p class="text-muted text-primary">1 USD = {{number_format($rate->rate, 2)}} NGN (expected rate / no extra fees)</p>


                            <h4 class="text-center text-danger text-bold">You get NGN<span id="nairaNotice"></span> </h4>
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
                        <img src="{{asset('images/convert.jpg')}}" alt="Convert Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        function getDollarRate(){
            let endpoint = 'https://bitpay.com/api/rates/usd'
            let ngnRate = {{$rate->rate}}

            $.ajax({
                url: endpoint,
                dataType: "json",
                success: function (result){
                    let usdAmount = document.getElementById('usdAmount').value
                    let usd = parseFloat(usdAmount)
                    let btc = usd
                    document.getElementById('ngnAmount').value = parseFloat(usdAmount * ngnRate).toFixed(2)
                    document.getElementById('btcAmount').value = btc.toFixed(8)
                    document.getElementById('nairaNotice').innerText = parseFloat(usd * ngnRate).toFixed(2)
                    console.log(result)
                }
            })
        }

        function getUsdcRate(){
            let endpoint = 'https://bitpay.com/api/rates/usd'
            let ngnRate = {{$rate->rate}}


            $.ajax({
                url: endpoint,
                dataType: "json",
                success: function (result){
                    let btcAmount = document.getElementById('btcAmount').value
                    let btc = parseFloat(btcAmount)
                    let usd = btc
                    document.getElementById('ngnAmount').value = parseFloat(usd * ngnRate).toFixed(2)
                    document.getElementById('usdAmount').value = usd.toFixed(2)
                    document.getElementById('nairaNotice').innerText = parseFloat(usd * ngnRate).toFixed(2)
                    console.log(result)
                }
            })
        }



    </script>

@endsection
