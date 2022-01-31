<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Giftcard;

class PagesController extends Controller
{
    public function rates(){
        $rates = Rate::all();
        $gift_cards = Giftcard::all('*');
        return view('rates', compact('rates', 'gift_cards'));
    }

    public function terms(){
        return view('terms');
    }

    public function policy(){
        return view('privacy');
    }
}
