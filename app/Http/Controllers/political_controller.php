<?php

namespace App\Http\Controllers;

use App\Models\Political;
use Illuminate\Http\Request;

class political_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $plo = Political::all();
        return view('lawyer.PoliticalView', compact('plo'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lawyer.Politicalform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
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
        Political::create($input);
        return redirect()->route('poly.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Political $poly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Political $poly)
    {
        //
        return view('lawyer.PoliticalUpdate', compact('poly'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Political $poly)
    {
        //
        $input = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imgdestination = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imgdestination, $profileImage);
            $input['image'] = $profileImage;
        }
        $poly->update($input);
        return redirect()->route('poly.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Political $poly)
    {
        //
        $poly->delete();
        return redirect()->route('poly.index');
    }
}
