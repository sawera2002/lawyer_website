<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Finance;
use App\Models\More;
use App\Models\Murder;
use App\Models\Political;
use Illuminate\Http\Request;

class moreController extends Controller
{
    //
    public function more(){
        $moreinfo = More::all();
        return view('front_end.divorce',compact('moreinfo'));
       
    }
    public function murder(){
        $murderinfo = Murder::all();
        return view('front_end.murder',compact('murderinfo'));
       
    }
    public function politic(){
        $polyinfo = Political::all();
        return view('front_end.Political',compact('polyinfo'));
       
    }
    public function fan(){
        $faninfo = Finance::all();
        return view('front_end.Finance',compact('faninfo'));
       
    }
    public function Businesses(){
        $basinfo = Business::all();
        return view('front_end.Business',compact('basinfo'));
       
    }
}
