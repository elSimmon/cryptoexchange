<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\CardCategory;
use App\Models\Cardtrade;
use App\Models\Giftcard;
use App\Models\User;
use App\Notifications\GiftcardTrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Toaster;

class CardtradeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $cardtrades = Cardtrade::all();
        return view('cardtrades.index', compact('cardtrades'));
    }

    public function create($id){
//        $card = DB::table('giftcards')->select('card_category_id', 'type', 'country')->where('id', $id)->first();
//        dd($card);
        $card = Giftcard::find($id);
        return view('cardtrades.create', compact('card'));
    }

    public function store(Request $request){
        $request->validate([
            'original_card_amount' => 'required|numeric',
        ]);

        if($request->original_card_amount < $request->min){
            Alert::error('Ouch!', 'Invalid amount must be more that min value');
            return redirect()->route('all-cards')->with('error', 'Card value is less that minimum');
        }elseif ($request->original_card_amount > $request->max){
            Alert::error('Ouch!', 'Invalid amount must be less that max value');
            return redirect()->route('all-cards');
        }else{
            $cardtrade = new Cardtrade();
            $cardtrade->original_card_amount = $request->original_card_amount;
            $cardtrade->naira_worth = $request->original_card_amount * $request->rate;
            $cardtrade->user_id = Auth::id();
            $cardtrade->giftcard_id = $request->giftcard_id;
            $cardtrade->card_category_id = $request->card_category_id;
            $cardtrade->e_code = $request->e_code;

            if($request->hasFile('card_picture')){
                $image = $request->file('card_picture');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/cardpics/'.$filename);
                Image::make($image)->save($location);
                $cardtrade->card_picture = $filename;
            }
            if($request->hasFile('receipt_picture')){
                $image = $request->file('receipt_picture');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/receipts/'.$filename);
                Image::make($image)->save($location);
                $cardtrade->receipt_picture = $filename;
            }
            $cardtrade->save();

            $users = User::all();

            $when = now()->addSeconds(5);
            foreach ($users as $user){
                if($user->role > 0){
                    $user->notify((new GiftcardTrade())->delay($when));
                }
            }

            Alert::success('Congrats!', 'Trade Successful, Waiting Approval');
            return redirect()->route('my-dashboard')->with('success', 'Success, Card is waiting approval');
        }

    }

    public function show($id){
        $card_category = CardCategory::find($id);
        $cards = DB::table('giftcards')->where('card_category_id', $id)->get();
        return view('card_categories.show', compact('cards', 'card_category'));
    }

    public function review($id){
        $cardtrade = Cardtrade::find($id);
        return view('cardtrades.review', compact('cardtrade'));
    }

    public function approve($id){
        $cardtrade = Cardtrade::find($id);

        DB::table('cardtrades')->where('id', $id)->update(['status'=>'success']);
        DB::table('wallets')->where('user_id', $cardtrade->user_id)->increment('balance', $cardtrade->naira_worth);
        toast('Seller Wallet has been Credited Successfully','success');
        return redirect()->route('all-gift-card-trades');
    }

    public function feedback(Request $request){
        $request->validate([
            'message' => 'required|string',
        ]);

        DB::table('cardtrades')->where('id', $request->id)->update(['status'=>'cancelled', 'message'=>$request->message]);
        alert()->info('InfoAlert','Waiting for client to re-upload.');
        return redirect()->route('all-gift-card-trades');
    }

    public function edit($id){
        $card_category = CardCategory::find($id);
        return view('card_categories.edit', compact('card_category'));
    }

    public function messages(){
        $messages = DB::table('cardtrades')->where('user_id', Auth::id())->where('status', 'cancelled')->get();
        return view('cardtrades.messages', compact('messages'));
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
        return redirect()->route('manage-cards')->with('success', 'Card Updated');
    }

    public function destroy($id){
        CardCategory::where('id', $id)->delete();
        return redirect()->route('manage-cards')->with('error', 'Item Deleted');
    }
}
