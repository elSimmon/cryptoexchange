<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function profiles(){
        $users = User::all();
        return view('users.profiles', compact('users'));
    }

    public function makeAdmin($id){
        DB::table('users')->where('id', $id)->update(['role' =>1]);
        return redirect()->route('all-users')->with('success', 'Admin Role added!');
    }

    public function removeAdmin($id){
        DB::table('users')->where('id', $id)->update(['role' =>0]);
        return redirect()->route('all-users')->with('error', 'Admin Role removed!');
    }

    public function transactions(){
        $withdrawals = DB::table('withdrawals')->where('user_id', Auth::id())->where('status','paid')->get();
        $coindeposits = DB::table('cointrades')->where('user_id', Auth::id())->where('status', 'success')->get();
        $carddeposits = DB::table('cardtrades')->where('user_id', Auth::id())->where('status', 'success')->get();
        return view('users.transactions', compact('withdrawals', 'coindeposits', 'carddeposits'));
    }
}
