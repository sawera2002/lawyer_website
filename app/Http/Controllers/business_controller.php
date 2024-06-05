<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class business_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bis = Business::all();
        return view('lawyer.BusinessView', compact('bis'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lawyer.Businessform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
    
        if($image = $request->file('image')){
            $imgdestination = 'images/';
            $profileimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $profileimage = $image->getClientOriginalExtension();
            $image->move($imgdestination,$profileimage);
            $input['image'] = "$profileimage";
        }
        Business::create($input);
        return redirect()->route('bus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Business $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $bus)
    {
        //
        return view('lawyer.BusinessUpdate', compact('bus'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Business $bus)
    {
        //
         //
         $input = $request->all();
         if ($request->hasFile('image')) {
             $image = $request->file('image');
             $imgdestination = 'images/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $image->move($imgdestination, $profileImage);
             $input['image'] = $profileImage;
         }
         $bus->update($input);
         return redirect()->route('bus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $bus)
    {
        //
        $bus->delete();
        return redirect()->route('bus.index');
    }
}
