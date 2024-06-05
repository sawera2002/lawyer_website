<?php

namespace App\Http\Controllers;

use App\Models\FormEntry;
use App\Models\User;
use Illuminate\Http\Request;
// use App\User; 

class AppointController extends Controller
{
    //
    public function createForm()
    {
        return view('appoint');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'message' => 'required|string|max:1000',
        ]);

        // Create a new FormEntry model and save the data
        $formEntry = new FormEntry([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'message' => $request->input('message'),
        ]);

        $formEntry->save();

        return redirect('/dashboard')->with('success', 'Form submitted successfully!');
    }
    public function showEntries()
    {
        $entries = FormEntry::all(); // Assuming you've imported the FormEntry model

        return view('appoint.index', ['entries' => $entries]);
    }
    //  database connectivity //
    function postdata(Request $rqst)
    {
        $data = new FormEntry; //model
        $data->name = $rqst->name;
        $data->email = $rqst->email;
        $data->date = $rqst->date;
        $data->time = $rqst->time;
        $data->message = $rqst->message;

        $data->save();
        return redirect("appoint");
    }

    // public function delete(Request $req)
    // {
    //     // Step 1: Find the user by user_id
    //     $user_id = $req->user_id;
    //     $user = User::where('id', $user_id)->get();

    //     // Check if the user exists
    //     // if (!$user) {
    //     //     return redirect()->back()->with('error', 'User not found.');
    //     // }

    //     // Step 2: Delete the user
    //     $user->delete();

    //     // Step 3: Redirect back with a success message
    //     return redirect('appoin');
    // }
    function viewdata1()
    {
        $stdata = FormEntry::with('lawyer')->get(); //model name Register
        return view("appointView", ['Data' => $stdata]);
    }
    function new_law()
    {
        return view("auth.law_register");
    }

    public function insert_law(Request $request)
    {
        // Validate the form data
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8',
        // ]);

        // Create a new User record for the lawyer
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Hash the password for security
            'usertype' => 'lawyer', // You can set the usertype as needed
        ]);

        // $user = new User;
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->password = bcrypt($request->input('password')); // Hash the password for security
        // $user->usertype = 'lawyer'; // You can set the usertype as needed
        // $user->save();

        // Redirect to a success page or perform other actions as needed
        return redirect('/')->with('success', 'Lawyer registered successfully');
    }
    function appoin_law()
    {
        $stdata = FormEntry::with('lawyer')->whereNotNull('lawyer_id')->get(); //model name Register
        return view("appointView_lawyer", ['Data' => $stdata]);
    }
    public function main()
    {
        return view('appoint');
    }
    // form work//
    public function getdata()
    {
        return view('appoint');
    }
    // 
    //   delete sawera
    public function delete($id)
    {
        // Step 1: Find the appointment by its ID
        $appointment = FormEntry::find($id);

        // Check if the appointment exists
        if (!$appointment) {
            return redirect()->back()->with('error', 'Appointment not found.');
        }

        // Step 2: Delete the appointment
        $appointment->delete();

        // Step 3: Redirect back with a success message//
        // return redirect()->route('appointView')->with('success', 'Appointment deleted successfully');
        return redirect('appoin');
     

    }
}
