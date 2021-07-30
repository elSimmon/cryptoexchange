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
    public function index(){
        $gift_cards = Giftcard::all('*');
        return view('gift_cards.index', [$gift_cards]);
    }

    public function create(){
        return view('gift_cards.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image',
        ]);

        $gift_card = new Giftcard();
        $gift_card->card_category_id = $request->card_category_id;
        $gift_card->country = $request->country;
        $gift_card->type = $request->type;
        $gift_card->denomination = $request->denomination;
        $gift_card->rate = $request->rate;

        $gift_card->save();
        return redirect()->route('new-card-category');
    }

    public function show($id){
        $card_category = CardCategory::find($id);
        return view('card_categories.category')->withCardCategory($card_category);
    }

    public function edit($id){
        $card_category = CardCategory::find($id);
        return view('card_categories.edit')->withCardCategory($card_category);
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image',
        ]);

        DB::table('card_categories')->where('id', $request->id)->update(['name'=>$request->name]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/cards'.$filename);
            Image::make($image)->save($location);
            DB::table('card_categories')->where('id', $request->id)->update(['image'=>$filename]);
        }
        return back();
    }

    public function destroy($id){
        CardCategory::where('id', $id)->delete();
        return back();
    }
}
