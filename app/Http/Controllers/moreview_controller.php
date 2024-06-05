<?php

namespace App\Http\Controllers;

use App\Models\More;
use Illuminate\Http\Request;

class moreview_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mo = More::all();
        return view('lawyer.viewmore', compact('mo'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('moreform');
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
        More::create($input);
        return redirect()->route('more.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(More $more)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(More $more)
    {
        //
        return view('lawyer.updatemore', compact('more'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, More $more)
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
        $more->update($input);
        return redirect()->route('more.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(More $more)
    {
        //
        $more->delete();
        return redirect()->route('more.index');
    }
}
