<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CointradeController extends Controller
{
    //

    public function convert(){
        return view('cointrades.convert');
    }
}
