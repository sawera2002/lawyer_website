<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class testimonial_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $testi = Testimonial::all();
         return view('admin.testimonialView',compact('testi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.testiminialAdd');

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
         //insert with img //
         $input = $request->all();
         if($image = $request->file('image')){
             $imgdestination = 'images/';
             $profileimage = $image->getClientOriginalExtension();
             $image->move($imgdestination,$profileimage);
             $input['image'] = "$profileimage";
         }
         Testimonial::create($input);
         return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
        return view('admin.testimonialUpdate',compact('testimonial'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
         // insert with image
         $input = $request->all();
         if($image = $request->file('image')){
            $imgdestination = 'images/';
            $profileimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $profileimage = $image->getClientOriginalExtension();
            $image->move($imgdestination,$profileimage);
            $input['image'] = "$profileimage";
        }
         $testimonial->update($input);
         return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
         $testimonial->delete();
        return redirect()->route('testimonial.index');
    }
}
