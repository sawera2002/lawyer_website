<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact; //chage
use App\Models\Register;
use App\Models\User;
use App\Models\FormEntry;

class first_controler extends Controller
{
    //basic controller
    public function index(){
        echo"<h1>basic controller</h1>";
    }
    public function main(){
      return view('front_end.contact');
    }
    // form work//
    public function getdata(){
      return view('front_end.contact');
    }

    public function update_entries($id){
      $lawyers = User::where('usertype', 'lawyer')->get();
      return view('update_entries',compact('lawyers' , 'id'));
    }
    public function assign_entries(Request $request, $id){
      // Validate the form data
      $request->validate([
          'lawyer_id' => 'required|exists:users,id',
      ]);

      // Update the form entry with the selected lawyer_id
      $entry = FormEntry::find($id);
      $entry->lawyer_id = $request->input('lawyer_id');
      $entry->save();

      // Redirect back with a success message or perform other actions as needed
      return redirect('/appoin')->with('success', 'Lawyer assigned successfully');
   }
    // validation //
    public function setdata( Request $request){
      //<pre> tag array ki form mai lay ga
      // echo "<pre>";
      // print_r($request->all());

      $request -> validate([
      // 'name' => 'required',
      // 'email' => 'required | email', //validation.php sy |email araha hai//
      // 'age' => 'required | numeric | min:18 | max : 20 ',
      // 'contact' => 'required |numeric | digits:11',
      // 'password' => 'required |same:confirm_password',
      // 'confirm_password' => 'required',


      ]);
      return $request->input();
    }
    //  database connectivity //
    function postdata(Request $rqst){
          $data = new Register; //model
          $data->name=$rqst->name;
          $data->email=$rqst->email;
          $data->paragraph=$rqst->paragraph;
          $data->subject=$rqst->subject;
         
          $data->save();
          return redirect("front_end.contact");
    }
    function viewdata(){
      $stdata = Register::all(); //model name Register
      return view("studenview",['Data' =>$stdata]);
    }
    //updateview work //

    function update(Request $rqst){
      $user_id = $rqst->get('user_id'); 
      $name = $rqst->get('name');
      $email = $rqst->get('email'); 
      $paragraph = $rqst->get('paragraph'); 
      $subject = $rqst->get('subject'); 
      
    //   $std = Register::find($user_id); 
    $std = Register::find($user_id);
      // $std = Register::table('registers')->find($user_id);
     
      $std->name =$name;
      $std->email =$email;
      $std->paragraph =$paragraph;
      $std->subject =$subject;
     
      $std->save();
      return redirect('front_end.contact');

    }
    function updatedelete(Request $req){
      $user_id = $req->get('user_id'); //hidden name attribute ayga studentview page sy
      $name = $req->get('name'); //hidden name attribute ayga studentview page sy
      $email = $req->get('email'); //hidden name attribute ayga studentview page sy
      $paragraph = $req->get('paragraph'); //hidden name attribute ayga  studentview page sy
      $subject = $req->get('subject'); //hidden name attribute ayga studentview page sy
      
      //name then value //
      if($req->get('updatebtn')=='Update'){
        //page name
        return view('update',['user_id'=>$user_id,'name'=>$name,'email'=>$email,'paragraph'=>$paragraph,
        'subject'=>$subject]);
      }else{
        $std = Register::find($user_id); 
        $std->delete();
      }
      return redirect('front_end.contact');
    }
}

