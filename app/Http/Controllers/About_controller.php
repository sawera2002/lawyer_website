<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class About_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //no3
        //  $per = About::paginate(1); // paginate
         $abu = About::all();
         return view('admin.viewabout',compact('abu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // //no 1
        return view('aboutform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //insert with img //
        $input = $request->all();
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imgdestination = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imgdestination, $profileImage);
            $input['image']=$profileImage;
          }
    
        About::create($input);
        return redirect()->route('about.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @return \App\Models\About $about
     * 
     */
    public function edit(About $about)
    {
        //
        return view('admin.updateabout',compact('about'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
        $input = $request->all();
        // if ($image = $request->file('image')) {
        //     $imgdestination = 'images/';
        //     $profileimg = $image->getClientOriginalExtension();
        //     $image->move($imgdestination,$profileimg);
        //     $input['image'] = "$profileimg";
           
        // }
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imgdestination = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imgdestination, $profileImage);
            $input['image']=$profileImage;
          }
        $about->update($input);
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(About $about)
    {
        //delete
        $about->delete();
        return redirect()->route('about.index');
    }
}
