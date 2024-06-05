<?php

use App\Http\Controllers\About_controller;
use App\Http\Controllers\AppointController;
use App\Http\Controllers\blog_controller;
use App\Http\Controllers\BusinesController;
use App\Http\Controllers\business_controller;
use App\Http\Controllers\feature_controller;
use App\Http\Controllers\finance_controller;
use App\Http\Controllers\first_controler;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\portfolio_controller;
use App\Http\Controllers\services_controller;
use App\Http\Controllers\testimonial_controller;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\lawcontroller;
use App\Http\Controllers\moreController;
use App\Http\Controllers\moreview_controller;
use App\Http\Controllers\murder_controller;
use App\Http\Controllers\political_controller;
use App\Http\Controllers\Serv_Control;
use App\Http\Controllers\ServController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('see', [lawcontroller::class,'index'])->name('index');
Route::post('/store', [lawcontroller::class,'store'])->name('store');

// Route::get('/view-data', 'lawcontroller@index')->name('view-data');



// our page 
// -----------------------------------------------------------------//
// about section routing for user panel //
Route::get('/fabout',[UserInfoController::class,'index']);
Route::get('/team',[UserInfoController::class,'team']);

// portfolio section routing for user panel //
Route::get('/portfolioo',[UserInfoController::class,'law']);

// blog section routing for user panel //
Route::get('/blogg',[UserInfoController::class,'blogPost']);

// services section routing for user panel //
Route::get('/service',[UserInfoController::class,'services']);
// home page 


// -----------------------------------------------------------------//


Route::get('/single', function () {
    return view('front_end.single');
});
//lawyers add work with resources controller //
Route::resource('person',PersonController::class);
 Route::get('/form',function(){
 return view('admin.addlawyers');
 });
 Route::get('/update',function(){
 return view('update');
 });
 //about work with resources controller //
Route::resource('about',About_controller::class);
 Route::get('/aboutt',function(){
 return view('admin.aboutform');
 });
 Route::get('/updateabout',function(){
 return view('admin.updateabout');
 });
 Route::get('/lawyerappoint',function(){
 return view('lawyerpro');
 });

// service--------------------------------------------

  Route::get('Serviceform',[ServController::class,'getdata']);
  Route::post('Serviceform',[ServController::class,'postdata']);

  // view studentview page //
//   Route::get('ServiceView',[ServController::class,'viewdata']);
//   Route::post('ServiceView',[ServController::class,'viewdata']);

  //updateview work //
  Route::get('Serviceupdate',[ServController::class,'upview']);//function ka rout
  Route::get('adminup',[ServController::class,'update']); //page ka rout get
  Route::post('adminup',[ServController::class,'update']); //page ka rout post

  Route::get('ss',function(){
    return view('admin.Serviceupdate');
  });
//feature work with resources controller //
Route::resource('feature',feature_controller::class);

 Route::get('/featureadd',function(){
 return view('admin.Featureadd');
 });
 Route::get('/update',function(){
 return view('admin.Featureupdate1');
 });

 //testimonial work with resources controller //
Route::resource('testimonial',testimonial_controller::class);

Route::get('/testimonialadd',function(){
return view('admin.testimonialAdd');
});
Route::get('/testimonialUpdate',function(){
return view('admin.testimonialUpdate');
});


 //blog work with resources controller //
Route::resource('blog',blog_controller::class);

Route::get('/blogadd',function(){
return view('admin.blogAdd');
});
Route::get('/blogUpdate',function(){
return view('admin.blogUpdate');
});

 //portfolio work with resources controller //
Route::resource('portfolio',portfolio_controller::class);
Route::get('/portfolioAdd',function(){
return view('admin.portfolioAdd');
});
Route::get('/portfolioUpdate',function(){
return view('admin.portfolioUpdate');
});

//case studies backend work with resources controller //
Route::resource('more',moreview_controller::class);
Route::get('/moree',function(){
    return view('lawyer.moreform');
 });
 Route::get('/updatemore',function(){
 return view('lawyer.updatemore');
 });
//murder backend work with resources controller //
Route::resource('murder',murder_controller::class);
Route::get('/murderr',function(){
    return view('lawyer.murderform');
 });
 Route::get('/MurderUpdate',function(){
 return view('lawyer.MurderUpdate');
 });
//  <!-- //Political backend work with resources controller // -->
Route::resource('poly',political_controller::class);
Route::get('/politics',function(){
    return view('lawyer.Politicalform');
 });
 Route::get('/PoliticalUpdate',function(){
 return view('lawyer.PoliticalUpdate');
 });
 //finance backend work with resources controller //
Route::resource('finans',finance_controller::class);
Route::get('/Financeform',function(){
    return view('lawyer.Financeform');
 });
 Route::get('/FinanceUpdate',function(){
 return view('lawyer.FinanceUpdate');
 });
 //Business backend work with resources controller //
// Route::resource('bus',business_controller::class);
Route::resource('businesses', BusinesController::class);
Route::get('/Businessform',function(){
    return view('lawyer.Businessform');
 });
 Route::get('/BusinessUpdate',function(){
 return view('lawyer.BusinessUpdate');
 });
// ----------------------------------case studies inner cards------------------------------------------------//

Route::get('/divorce',[moreController::class,'more']);
Route::get('/murdeer',[moreController::class,'murder']);
Route::get('/Political',[moreController::class,'politic']);
Route::get('/Finance',[moreController::class,'fan']);
Route::get('/Business',[moreController::class,'Businesses']);
Route::get('/Property',[moreController::class,'fan']);
// ---------------------------------------


Route::get('/dashboard',[UserInfoController::class,'start'])->middleware(['auth', 'verified'])->name('dashboard');;
// Route::get('/home',[UserInfoController::class,'start'])->middleware(['auth', 'verified'])->name('home');;




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('/home',[homecontroller::class,'new']);
// Route::get('/home',[homecontroller::class,'index']);
Route::get('/home',[homecontroller::class,'index'])->name('home');

require __DIR__.'/auth.php';

//----------------------------contact page--------------------------------------

// first controller 1st function //
Route::get('firstcontrol',[first_controler::class,'index']);
// first controller 2nd function //
Route::get('maincontrol',[first_controler::class,'main']);


    //  database connectivity //

    Route::get('contact',[first_controler::class,'getdata']);
    Route::post('contact',[first_controler::class,'postdata']);

    // view studentview page //
    Route::get('std',[first_controler::class,'viewdata']);

    //updateview work //
    Route::get('funupdate',[first_controler::class,'updatedelete']);//function ka rout
    Route::get('update_entries/{id}',[first_controler::class,'update_entries']);//function ka rout
    Route::post('assignLawyer/{id}',[first_controler::class,'assign_entries']);//function ka rout
    Route::get('update',[first_controler::class,'update']); //page ka rout get
    Route::post('update',[first_controler::class,'update']); //page ka rout post

    
  
    
    // ---------------------------------------------------------------------------//
    
    // Route::delete('/delete/user/{user_id}', [AppointController::class, 'delete'])->name('delete');

    Route::get('/appoint', [AppointController::class, 'createForm']);
    Route::post('/appoint', [AppointController::class, 'submitForm']);
    
    Route::get('appoin',[AppointController::class,'viewdata1']);
    Route::get('appoin_law',[AppointController::class,'appoin_law']);
    Route::get('new_law',[AppointController::class,'new_law']);
    Route::post('new_law',[AppointController::class,'insert_law']);

    Route::resource('serv', ServController::class);

    // sawera delete
    Route::delete('/appointments/{id}', [AppointController::class, 'delete'])->name('appointments.delete');

    // Route::get('/appointView', 'AppointController@DELETE')->name('appointView');