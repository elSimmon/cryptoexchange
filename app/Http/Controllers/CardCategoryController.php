<?php

namespace App\Http\Controllers;

use App\Models\CardCategory;
use App\Models\Giftcard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Version\Exception;
use Intervention\Image\Facades\Image;

class CardCategoryController extends Controller
{
    //
    public function index(){
        $card_categories = CardCategory::all('*');
        return view('card_categories.index', [$card_categories]);
    }

    public function create(){
        $categories = CardCategory::all();
        $cards = Giftcard::all();
        return view('card_categories.create', ['categories'=>$categories, 'cards'=>$cards]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'image' => 'required',
        ]);

        try {
            $card_category = new CardCategory();
            $card_category->name = $request->name;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/cards/'.$filename);
                Image::make($image)->save($location);
                $card_category->image = $filename;
            }
            $card_category->save();
            return redirect()->route('manage-cards')->with('success', 'Card Saved Successfully!');
        }
        catch (\Exception $exception){
            return redirect()->route('manage-cards')->with('error', 'Card Creation Error!');
        }

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
        return redirect()->route('manage-cards');
    }

    public function destroy($id){
        CardCategory::where('id', $id)->delete();
        return redirect()->route('manage-cards');
    }
}
