<?php

namespace App\Http\Controllers;

use App\Models\CardCategory;
use Illuminate\Http\Request;
use Intervention\Image\Image;

class CardCategoryController extends Controller
{
    //
    public function index(){
        $card_categories = CardCategory::all('*');
        return view('card_categories.index', [$card_categories]);
    }

    public function create(){
        return view('card_categories.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image',
        ]);

        $card_category = new CardCategory();
        $card_category->name = $request->name;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/cards'.$filename);
            Image::make($image)->save($location);
            $card_category->image = $filename;
        }
        $card_category->save();
        return redirect()->route('new-card-category');
    }
}
