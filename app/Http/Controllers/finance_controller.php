<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class finance_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fine = Finance::all();
        return view('lawyer.FinanceView', compact('fine'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lawyer.Financeform');
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'law' => 'required',
            'paragraph' => 'required',
        ]);
        $input = $request->all();
    
        if($image = $request->file('image')){
            $imgdestination = 'images/';
            $profileimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $profileimage = $image->getClientOriginalExtension();
            $image->move($imgdestination,$profileimage);
            $input['image'] = "$profileimage";
        }
        Finance::create($input);
        return redirect()->route('finans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Finance $finans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Finance $finans)
    {
        //
        return view('lawyer.FinanceUpdate', compact('finans'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Finance $finans)
    {
        //
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'law' => 'required',
            'paragraph' => 'required',
        ]);
       
        $input = $request->except('image');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imgdestination = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imgdestination, $profileImage);
            $input['image'] = $profileImage;
        }
        $finans->update($input);
        return redirect('finans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finance $finans)
    {
        //
        $finans->delete();
        return redirect('finans');
    }
}
