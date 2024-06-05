<?php

// namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Person;
use App\Models\Portfolio;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Feature;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    // homepage fetching
    // public function home(){
    //     $homeabout = About::all();
    //     // $team = Person::all();
    //     return view('dashboard',compact('homeabout'));
       
    // }
    //about page fetching
    public function index(){
        $userinfo = About::all();
        $team = Person::all();
        return view('front_end.about',compact('userinfo','team'));
       
    }
    // team page fetching
    public function team(){
        $userinfo = About::all();
        $team = Person::all();
        return view('front_end.team',compact(['userinfo','team']));

      
    }
    // blogs page fetching
    public function blogPost(){
        $blogpost = Blog::all();
        return view('front_end.blog',compact('blogpost'));
      
    }
    // services page fetching
    public function services(){
        $serv = Service::all();
        $feate = Feature::all();
        return view('front_end.service',compact(['serv','feate']));
      
    }

    // testimonials page fetching
    public function law(){
        $casestudies = Portfolio::all();
        return view('front_end.portfolio',compact('casestudies'));
      
    }
    // home page fetching
    public function start(){
        $serv = Service::all();
        $userinfo = About::all();
        $team = Person::all();
        $casestudies = Testimonial::all();
        $blogpost = Blog::all();
        $feature = Feature::all();
        return view('dashboard',compact('serv','userinfo','team','casestudies','blogpost','feature'));
    }

    
}
