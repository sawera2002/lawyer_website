<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Carbon\Carbon;
use Illuminate\Http\Request;

class feature_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //no3
        $feat = Feature::all();
        return view('admin.FeatureView',compact('feat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // //no 1
        return view('admin.Featureadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //no 2
        //insert with img //
        $input = $request->all();
        if($image = $request->file('image')){
            $imgdestination = 'images/';
            $profileimage = $image->getClientOriginalExtension();

            $image->move($imgdestination,$profileimage);
            $input['image'] = "$profileimage";
        }
        Feature::create($input);
        return redirect()->route('feature.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view('admin.Featureupdate1',compact('feature'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        //
         // insert with image
         $input = $request->all();
        //  if ($image = $request->file('image')) {
        //      $imgdestination = 'images/';
        //     //  $profileimg = $image->getClientOriginalExtension();
        //      $profileimg = Carbon::now()->getClientOriginalExtension();
        //      $image->move($imgdestination,$profileimg);
        //      $input['image'] = "$profileimg";
        //  }
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imgdestination = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imgdestination, $profileImage);
            $input['image']=$profileImage;
          }
         $feature->update($input);
         return redirect()->route('feature.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
