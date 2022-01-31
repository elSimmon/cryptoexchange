<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $banks = Bank::all();
        return view('banks.index')->withBanks($banks);
    }

    public function create(){
        $banks = DB::table('banks')->where('user_id', Auth::id())->get();
        return view('banks.create')->withBanks($banks);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'account_type' => 'required',
            'account_number' => 'required|numeric:10',
        ]);

        $bank = new Bank();
        $bank->user_id = Auth::id();
        $bank->name = $request->name;
        $bank->account_type = $request->account_type;
        $bank->account_number = $request->account_number;
//        $bank->bvn = $request->bvn;
//        $bank->swift_code = $request->swift_code;
        $bank->save();
        return redirect()->route('create-bank-details')->with('success', 'Account number added');
    }

    public function destroy($id){
        Bank::where('id', $id)->delete();
        return redirect()->route('create-bank-details')->with('error', 'Bank Account Removed');
    }
}
