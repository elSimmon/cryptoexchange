<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        return view('profiles.index')->withProfiles($profiles);
    }

    public function create(){
        $profile = Profile::find(Auth::id());
        return view('profiles.create')->withProfile($profile);
    }

    public function store(Request $request){
        $this->validate($request, [
            'photo' => 'required|image',
            'phone' => 'required|numeric',
            'address' => 'required'
        ]);

        $profile = new Profile();
        $profile->user_id = Auth::id();
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->nin = $request->nin;
        $profile->state = $request->state;
        $profile->country = $request->country;
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename = time().'.'.$photo->getClientOriginalExtension();
            $location = public_path('/images/'.$filename);
            Image::make($photo)->save($location);
            $profile->photo = $filename;
        }
        $profile->save();

        return back();
    }

    public function show($id){
        $profile = Profile::find($id);
        return view('profiles.show')->withProfile($profile);
    }


}
