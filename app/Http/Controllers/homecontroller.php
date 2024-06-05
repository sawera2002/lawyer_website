<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class homecontroller extends Controller
{
    //
    // public function new()  {
    //     return redirect('/dashboard');
    
    // }
        public function index()  {
        if(Auth::id())
        $usertype=Auth()->user()->usertype;
        if($usertype=='user')
        {
            return redirect('/dashboard');
        }
        else if($usertype=='admin'){
            return view('admin.adminhome');
        }
        else if($usertype=='lawyer'){
            return view('lawyer.lawyerdashboard');
        }
        else
        {
            return redirect()->back();
        }
    }

}
