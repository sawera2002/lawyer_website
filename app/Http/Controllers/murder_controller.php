<?php

namespace App\Http\Controllers;

use App\Models\Murder;
use Illuminate\Http\Request;

class murder_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mur = Murder::all();
        return view('lawyer.MurderView', compact('mur'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lawyer.Murderform');
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
         //
         $input = $request->all();
    
         if($image = $request->file('image')){
             $imgdestination = 'images/';
             $profileimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             // $profileimage = $image->getClientOriginalExtension();
             $image->move($imgdestination,$profileimage);
             $input['image'] = "$profileimage";
         }
         Murder::create($input);
         return redirect()->route('murder.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Murder $murder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Murder $murder)
    {
        //
        return view('lawyer.MurderUpdate', compact('murder'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Murder $murder)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imgdestination = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imgdestination, $profileImage);
            $input['image'] = $profileImage;
        }
        $murder->update($input);
        return redirect()->route('murder.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Murder $murder)
    {
        //
        $murder->delete();
        return redirect()->route('murder.index');
    }
}
