<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WithdrawalController extends Controller
{
    //
    public function index(){

    }

    public function withdraw(){
        $wallet = DB::table('wallets')->where('user_id', Auth::id())->first();
        if($wallet->balance < 1000){
            return redirect()->route('my-dashboard')->with('error', 'Insufficient Funds: Balance must be atleast 1000');
        }
        else{
            return redirect()->route('my-dashboard');
        }
    }
}
