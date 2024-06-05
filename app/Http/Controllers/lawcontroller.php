<?php

namespace App\Http\Controllers;

// use App\Models\Lawappoint;
use App\Models\Lawappointt;
use Illuminate\Http\Request;

class lawcontroller extends Controller
{
    //
    public function store(Request $request)
{
    $data = $request->only(['name', 'email', 'law' ,'des']);
    Lawappointt::create($data);
    // <a href="">
    return redirect('/politics');
    // return redirect()->route('index')->with('success', 'Data has been inserted successfully.');
}
public function index()
{
    $data = Lawappointt::all();

    return view('admin.lawyerAppint', compact('data'));
}

}
