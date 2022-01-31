<?php

namespace App\Http\Controllers;

use App\Models\Cardtrade;
use App\Models\Cointrade;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Withdrawal;
use App\Models\PendingPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latest_withdrawals = Withdrawal::latest()->take(5)->get();
        $latest_cardtrades = Cardtrade::latest()->take(5)->get();
        $latest_cointrades = Cointrade::latest()->take(5)->get();
        $cointrades = Cointrade::all();
        $users = User::all();
        $withdrawals = Withdrawal::all();
        $cardtrades = Cardtrade::all();
        return view('home', compact('cointrades', 'users', 'latest_cointrades', 'withdrawals', 'cardtrades', 'latest_cardtrades', 'latest_withdrawals'));
    }

    public function dashboard(){
        $wallet = DB::table('wallets')->where('user_id', Auth::id())->first();
        $pending = DB::table('pending_payments')->where('user_id', Auth::id())->first();
//        dd($wallet);
        if ($wallet ==null ){
            $wallet = new Wallet();
            $wallet->user_id = Auth::id();
            $wallet->balance = 0;
            $wallet->save();
            return redirect()->route('my-dashboard');
        }elseif ($pending == null){
            $pending = new PendingPayment();
            $pending->user_id = Auth::id();
            $pending->amount = 0;
            $pending->save();
            return redirect()->route('my-dashboard');
        } else{
            return view('users.dashboard', compact('wallet', 'pending'));
        }
    }
}
