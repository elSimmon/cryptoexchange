<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use App\Models\Withdrawal;
use App\Models\PendingPayment;
use App\Models\Profile;
use App\Notifications\WithdrawalRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\TradingNotification;
use App\Notifications\WithdrawalPaid;

class WithdrawalController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        $withdrawals = Withdrawal::all();
        return view('withdrawals.index', compact('withdrawals'));
    }

    public function create(){
        $profile = DB::table('profiles')->where('user_id', Auth::id())->first();
        if ($profile != null){
            $balance = DB::table('wallets')->select('balance')->where('user_id', Auth::id())->first();
            $banks = DB::table('banks')->where('user_id', Auth::id())->get();
            return view('withdrawals.create', compact('banks', 'balance'));
        }else{
            toast('please update your profile first', 'error');
            return view('profiles.create', ['profile'=>$profile]);
        }

    }

    public function withdraw(Request $request){
        $request->validate([
           'amount' => 'required|numeric',
            'bank_id' => 'required',
        ]);

        $amount = floatval($request->amount);

        $wallet = DB::table('wallets')->select('balance')->where('user_id', Auth::id())->first();
        if($wallet->balance >= $amount){
            $withdrawal = new Withdrawal();
            $withdrawal->user_id = Auth::id();
            $withdrawal->bank_id = $request->bank_id;
            $withdrawal->amount = $request->amount;
            $withdrawal->save();

            DB::table('wallets')->where('user_id', Auth::id())->decrement('balance', $request->amount);
            DB::table('pending_payments')->where('user_id', Auth::id())->increment('amount', $request->amount);

            $users = User::all();

            $when = Carbon::now()->addSeconds(5);
            foreach ($users as $user){
                if($user->role > 0){
                    $user->notify((new WithdrawalRequest())->delay($when));
                }
            }

            Alert::success('Success!', 'Waiting Bank Deposit!');
            return redirect()->route('my-dashboard');
        }else{
            Alert::error('Ouch!', 'Insufficient Funds');
            return redirect()->route('my-dashboard');
        }
    }

    public function pay($id){
        $withdrawal = Withdrawal::find($id);
//        DB::table('wallets')->where('user_id', $withdrawal->user_id)->decrement('balance', $withdrawal->amount);
        DB::table('pending_payments')->where('user_id', $withdrawal->user_id)->decrement('amount', $withdrawal->amount);

        DB::table('withdrawals')->where('id', $id)->update(['status'=>'paid']);

        $when = now()->addSeconds(5);
        $user = User::find($withdrawal->user_id);
        $user->notify((new WithdrawalPaid())->delay($when));

        toast('Payment approved please transfer funds now.', 'success');
        return redirect()->route('all-withdrawals')->with('success', 'Payment status updated');
    }

    public function destroy($id){
        Withdrawal::where('id', $id)->delete();
        return redirect()->route('my-dashboard')->with('error', 'Item Deleted');
    }
}
