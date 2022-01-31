<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['verified', 'auth']);
    }

    public function index(){
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    public function read($id){
        $message = Message::find($id);
        return view('messages.read', compact($message));
    }

    public function show(){
        $messages = DB::table('messages')->where('user_id', Auth::id())->get();
        return view('messages.inbox', compact('messages'));
    }

    public function send(Request $request){
        $request->validate([
            'content' => 'required|string',
        ]);

        $message = new Message();
        $message->user_id = $request->user_id;
        $message->content = $request->content;
        $message->read = 1;
        $message->save();

        toast("Message Sent Successfully", 'success');
        return redirect()->route('all-messages');
    }

    public function destroy($id){
        Message::find($id)->delete();
        toast('Message Removed!','error');
        return redirect()->route('my-messages');
    }
}
