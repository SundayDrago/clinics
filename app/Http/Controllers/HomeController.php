<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    //code..
    public function redirect(){

        if(Auth::id()){
            if(Auth::user()->usertype == '0'){
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
             }
             else{
                 return view('admin.home');
             }
        }
        return redirect()->back();
    }

    public function index()
    {
        if(Auth::id()){
            return redirect('home');
        }
        else
        $doctor = doctor::all();
        return view('user.home', compact('doctor'));
        
    }
    public function appointment(Request $request){
       $data = new appointment;

       $data ->name = $request->name;
       $data ->email = $request->email;
       $data ->date = $request->date;
       $data ->number = $request->number;
       $data ->message = $request->message;
       $data ->doctor = $request->doctor;
       $data ->status ='In Progress';

       if(Auth::id()){
        $data ->user_id = Auth::user()->id;
       }
       $data->save();

       return redirect()->back()->with('message', 'You have successfully made appointment with us. We shall inform you soon!');
    }

    public function myappointment(){
        if(Auth::id()){
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
        }
        else
            return redirect()->back();
    }
    public function cancel_appoint($id){
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function service(){

        return view('user.service');
    }

    public function doctors(){

        return view('user.doctors');
    }
    public function contact(){

        return view('user.contact');
    }
}
