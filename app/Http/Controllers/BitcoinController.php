<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BitcoinController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
}
