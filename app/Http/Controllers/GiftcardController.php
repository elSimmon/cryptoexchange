<?php

namespace App\Http\Controllers;

use App\Models\CardCategory;
use App\Models\Giftcard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Image;

class GiftcardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        $gift_cards = Giftcard::all('*');
        return view('gift_cards.index', [$gift_cards]);
    }

    public function create(){
        return view('gift_cards.create');
    }

    public function store(Request $request){
        $request->validate([
            'card_category_id' => 'required',
            'country' => 'required',
            'card_type' => 'required',
            'denomination' => 'required|string',
            'rate' => 'required|numeric',
            'min' => 'required|numeric',
            'max' => 'required|numeric',
        ]);

        $giftcard = new Giftcard();
        $giftcard->card_category_id = $request->card_category_id;
        $giftcard->country = $request->country;
        $giftcard->type = $request->card_type;
        $giftcard->denomination = $request->denomination;
        $giftcard->rate = $request->rate;
        $giftcard->min = $request->min;
        $giftcard->max = $request->max;

        $giftcard->save();
        toast('Gift Card has been Saved!','success');
        return redirect()->route('manage-cards');    }

    public function show($id){
        $card_category = CardCategory::find($id);
        return view('card_categories.category')->withCardCategory($card_category);
    }

    public function edit($id){
        $categories = CardCategory::all();
        $giftcard = Giftcard::find($id);
        return view('gift_cards.edit', compact('giftcard', 'categories'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'card_category_id' => 'required',
            'country' => 'required',
            'card_type' => 'required',
            'denomination' => 'required|string',
            'rate' => 'required|numeric',
            'min' => 'required|numeric',
            'max' => 'required|numeric',
        ]);

        DB::table('giftcards')->where('id', $id)->update(['country'=>$request->country, 'type'=>$request->card_type, 'denomination'=>$request->denomination, 'rate'=>$request->rate, 'min'=>$request->min, 'max'=>$request->max, 'card_category_id'=>$request->card_category_id]);

        toast('GiftCard has been updated!','success');
        return redirect()->route('manage-cards');
    }

    public function destroy($id){
        Giftcard::find($id)->delete();
        toast('GiftCard Removed!','error');
        return redirect()->route('manage-cards');
    }
}
