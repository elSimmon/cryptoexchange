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
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        $card_categories = CardCategory::all('*');
        return view('card_categories.index', compact('card_categories'));
    }

    public function create(){
        $categories = CardCategory::all();
        $cards = Giftcard::all();
        return view('card_categories.create', compact('cards', 'categories'));
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
            toast('New Card added!', 'success');
            return redirect()->route('manage-cards');
        }
        catch (\Exception $exception){
            return redirect()->route('manage-cards')->with('error', 'Card Creation Error!');
        }

    }

    public function show($id){
        $card_category = CardCategory::find($id);
        $cards = DB::table('giftcards')->where('card_category_id', $id)->get();
        return view('card_categories.show', compact('cards', 'card_category'));
    }

    public function edit($id){
        $card_category = CardCategory::find($id);
        return view('card_categories.edit', compact('card_category'));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required|string',
        ]);
//        dd($request->image);
        DB::table('card_categories')->where('id', $request->id)->update(['name'=>$request->name]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/cards/'.$filename);
            Image::make($image)->save($location);
            DB::table('card_categories')->where('id', $request->id)->update(['image'=>$filename]);
        }
        toast('Gift Card has been updated!','success');
        return redirect()->route('manage-cards');
    }

    public function destroy($id){
        CardCategory::find($id)->delete();
        toast('Card Removed!','error');
        return redirect()->route('manage-cards');
    }
}
