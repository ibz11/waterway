<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\event;
use App\Models\Appointments;        

class TherapistController extends Controller
{
    
    public function events(){


        return view('Driver.event');
        
        }
        Public function createevent(Request $request){
            $user=auth()->user();
            $id=$user->id;
            $name=$user->name;

            $event= new event;
            $event->date=$request->date;
            $event->time_begin=$request->time_begin; 
            $event->time_end=$request->time_end; 
            $event->user_id=$id;
            $event->full_name =$name;
            //Auth::user()->name;
            $event->save();
         
            return redirect()->back()->with('message','New event is created');
        }
        

}
