<?php

namespace App\Http\Controllers;
use App\Models;

use App\Models\Cointrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Shakurov\Coinbase\Facades\Coinbase;

class CointradeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        $cointrades = Cointrade::all();
        return view('cointrades.index', compact('cointrades'));
    }

    //return view where js converts bitcoin
    public function convert(){
        $rate = DB::table('rates')->select('rate')->where('to', 'BTC')->first();
        return view('cointrades.convert', compact('rate'));
    }


    //return view where js converts ethereum
    public function convertether(){
        $rate = DB::table('rates')->select('rate')->where('to', 'ETH')->first();
        return view('cointrades.convertether', compact('rate'));
    }

    //return view where js converts dogecoin
    public function convertdoge(){
        $rate = DB::table('rates')->select('rate')->where('to', 'DOG')->first();
        return view('cointrades.convertdoge', compact('rate'));
    }

    //return view where js converts usdcoin
    public function convertusdc(){
        $rate = DB::table('rates')->select('rate')->where('to', 'USDC')->first();
        return view('cointrades.convertusdc', compact('rate'));
    }


    public function trade(Request $request){
        $request->validate([
            'btcAmount' => 'required|numeric',
            'usdAmount' => 'required|numeric',
            'ngnAmount' => 'required|numeric'
        ]);

        //create a random number variable to store and identify charge
        $ref = abs(rand(100000000000000, 900000000000000));



//charge the user
        $charge = Coinbase::createCharge([
            'name' => 'iKHENT Exchange Payment',
            'description' => 'Exchange of bitcoin for Nigerian Naira, Please Make Sure you send only bitcoin.',
            'local_price' => [
                'amount' => $request->usdAmount,
                'currency' => 'USD',
            ],
            'pricing_type' => 'fixed_price',
            'metadata' => [
                'user_id' => Auth::id(),
                'ref' => $ref,
                'naira' => $request->ngnAmount,
                'usd' => $request->usdAmount,
                'btc' => $request->btcAmount,
                'coin' => 'BTC',
            ],
        ]);

//store this record so we can later update it if bitcoin payment is successful
//        $cointrade = new Models\Cointrade();
//        $cointrade->user_id = Auth::id();
//        $cointrade->btcAmount = $request->btcAmount;
//        $cointrade->usdAmount = $request->usdAmount;
//        $cointrade->ngnAmount = $request->ngnAmount;
//        $cointrade->ref = $ref;
//        $cointrade->save();

//redirect to view with charge url
        return redirect($charge['data']['hosted_url']);
    }

    public function tradeEther(Request $request){
        $request->validate([
            'btcAmount' => 'required|numeric',
            'usdAmount' => 'required|numeric',
            'ngnAmount' => 'required|numeric'
        ]);

        //create a random number variable to store and identify charge
        $ref = abs(rand(100000000000000, 900000000000000));



//charge the user
        $charge = Coinbase::createCharge([
            'name' => 'iKHENT Exchange Payment',
            'description' => 'Exchange of Ethereum for Nigerian Naira, Please make sure you click on the Ethereum button.',
            'local_price' => [
                'amount' => $request->usdAmount,
                'currency' => 'USD',
            ],
            'pricing_type' => 'fixed_price',
            'metadata' => [
                'user_id' => Auth::id(),
                'ref' => $ref,
                'naira' => $request->ngnAmount,
                'usd' => $request->usdAmount,
                'btc' => $request->btcAmount,
                'coin'=> 'ETH',
            ],
        ]);

//store this record so we can later update it if bitcoin payment is successful
//        $cointrade = new Models\Cointrade();
//        $cointrade->user_id = Auth::id();
//        $cointrade->btcAmount = $request->btcAmount;
//        $cointrade->usdAmount = $request->usdAmount;
//        $cointrade->ngnAmount = $request->ngnAmount;
//        $cointrade->ref = $ref;
//        $cointrade->save();

//redirect to view with charge url
        return redirect($charge['data']['hosted_url']);
    }

    public function tradeDoge(Request $request){
        $request->validate([
            'btcAmount' => 'required|numeric',
            'usdAmount' => 'required|numeric',
            'ngnAmount' => 'required|numeric'
        ]);

        //create a random number variable to store and identify charge
        $ref = abs(rand(100000000000000, 900000000000000));



//charge the user
        $charge = Coinbase::createCharge([
            'name' => 'iKHENT Exchange Payment',
            'description' => 'Exchange of Dogecoin for Nigerian Naira, Please make sure you click on the Dogecoin button and send only Dogecoin to the address',
            'local_price' => [
                'amount' => $request->usdAmount,
                'currency' => 'USD',
            ],
            'pricing_type' => 'fixed_price',
            'metadata' => [
                'user_id' => Auth::id(),
                'ref' => $ref,
                'naira' => $request->ngnAmount,
                'usd' => $request->usdAmount,
                'btc' => $request->btcAmount,
                'coin'=> 'DOGE',
            ],
        ]);

//store this record so we can later update it if bitcoin payment is successful
//        $cointrade = new Models\Cointrade();
//        $cointrade->user_id = Auth::id();
//        $cointrade->btcAmount = $request->btcAmount;
//        $cointrade->usdAmount = $request->usdAmount;
//        $cointrade->ngnAmount = $request->ngnAmount;
//        $cointrade->ref = $ref;
//        $cointrade->save();

//redirect to view with charge url
        return redirect($charge['data']['hosted_url']);
    }

    public function tradeUsdc(Request $request){
        $request->validate([
            'btcAmount' => 'required|numeric',
            'usdAmount' => 'required|numeric',
            'ngnAmount' => 'required|numeric'
        ]);

        //create a random number variable to store and identify charge
        $ref = abs(rand(100000000000000, 900000000000000));



//charge the user
        $charge = Coinbase::createCharge([
            'name' => 'iKHENT Exchange Payment',
            'description' => 'Exchange of USD Coin for Nigerian Naira, Please make sure you click on the USD Coin button.',
            'local_price' => [
                'amount' => $request->usdAmount,
                'currency' => 'USD',
            ],
            'pricing_type' => 'fixed_price',
            'metadata' => [
                'user_id' => Auth::id(),
                'ref' => $ref,
                'naira' => $request->ngnAmount,
                'usd' => $request->usdAmount,
                'btc' => $request->btcAmount,
                'coin'=> 'USDC',
            ],
        ]);

//store this record so we can later update it if bitcoin payment is successful
//        $cointrade = new Models\Cointrade();
//        $cointrade->user_id = Auth::id();
//        $cointrade->btcAmount = $request->btcAmount;
//        $cointrade->usdAmount = $request->usdAmount;
//        $cointrade->ngnAmount = $request->ngnAmount;
//        $cointrade->ref = $ref;
//        $cointrade->save();

//redirect to view with charge url
        return redirect($charge['data']['hosted_url']);
    }

}
