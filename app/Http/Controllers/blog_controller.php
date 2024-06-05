<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class blog_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
          $blo = Blog::all();
          return view('admin.blogView',compact('blo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogAdd');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ////insert with img //
        $input = $request->all();
        if($image = $request->file('image')){
            $imgdestination = 'images/';
            $profileimage = $image->getClientOriginalExtension();
            $image->move($imgdestination,$profileimage);
            $input['image'] = "$profileimage";
        }
        Blog::create($input);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogUpdate',compact('blog'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Blog $blog)
    {
        //
         // insert with image
         $input = $request->all();
        //  if ($image = $request->file('image')) {
        //      $imgdestination = 'images/';
        //      $profileimg = $image->getClientOriginalExtension();
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
     
         $blog->update($input);
         return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        // //delete
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
