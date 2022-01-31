<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RateController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        //
        $rates = Rate::all();
        return view('rates.index', compact('rates'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'from' => 'required|string',
            'to' => 'required|string',
            'rate' => 'required|numeric',
        ]);

            $rate = new Rate();
            $rate->from = $request->from;
            $rate->to = $request->to;
            $rate->rate = $request->rate;
            $rate->save();
        toast('Your Rate as been submitted!','success');
        return redirect()->route('rates');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show(Rate $rate)
    {
        //
    }


    public function edit($id)
    {
        $rate = Rate::find($id);
        return view('rates.edit', compact('rate'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
        'from' => 'required|string',
        'to' => 'required|string',
        'rate' => 'required|numeric',
        ]);

//        $rate->update($request->all());

        DB::table('rates')->where('id', $id)->update(['from'=>$request->from, 'to'=>$request->to, 'rate'=>$request->rate]);

        toast('Your Rate as been updated!','success');
        return redirect()->route('rates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rate $rate)
    {
        //
    }
}
