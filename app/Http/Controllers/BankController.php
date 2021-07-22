<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankController extends Controller
{
    //
    public function index(){
        $banks = Bank::all();
        return view('banks.index')->withBanks($banks);
    }

    public function create(){
        return view('banks.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'account_type' => 'required',
            'bvn' => 'required',
        ]);

        $bank = new Bank();
        $bank->user_id = Auth::id();
        $bank->name = $request->name;
        $bank->account_type = $request->account_type;
        $bank->bvn = $request->bvn;
        $bank->swift_code = $request->swift_code;
        $bank->save();
        return back();
    }
}
