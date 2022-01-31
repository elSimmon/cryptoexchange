<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        $profiles = Profile::all();
        return view('profiles.index')->withProfiles($profiles);
    }

    public function create(){
        $profile = DB::table('profiles')->where('user_id', Auth::id())->first();
//        $profile = Profile::find(Auth::id());
//        dd($profile);
        return view('profiles.create', ['profile'=>$profile]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png',
            'phone' => 'required|numeric',
            'address' => 'required',
        ]);

        $myprofile = DB::table('profiles')->where('user_id', Auth::id())->first();
        if ($myprofile !=null){
            DB::table('profiles')->where('user_id', Auth::id())->update(['phone'=>$request->phone, 'address'=>$request->address, 'nin'=>$request->nin, 'state'=>$request->state, 'country'=>$request->country]);
        }else {
            $profile = new Profile();
            $profile->user_id = Auth::id();
            $profile->phone = $request->phone;
            $profile->address = $request->address;
            $profile->nin = $request->nin;
            $profile->state = $request->state;
            $profile->country = $request->country;
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $filename = time() . '.' . $photo->getClientOriginalExtension();
                $location = public_path('/images/' . $filename);
                Image::make($photo)->save($location);
                $profile->photo = $filename;
            }
            $profile->save();
        }
        
        toast('Profile Updated Successfully', 'success');
        return redirect()->route('my-profile');
    }

    public function show($id){
        $profile = Profile::find($id);
        return view('profiles.show')->withProfile($profile);
    }


}
