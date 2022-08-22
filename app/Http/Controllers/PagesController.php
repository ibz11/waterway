<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\event;
use App\Models\Appointments;  



class PagesController extends Controller
{
    public function home(){
        $event=event::all();
        $user=user::all();
        $therapist=user::where('role','therapist')->get();
        return view('home',compact('event','therapist'));
    }
    public function redirect(){
        $role=Auth::user()->role;
        
    if($role=='admin'){
        $user=user::count();
        $therapist=user::where('role','therapist')->count();
        $online = DB::table('sessions')->count();
        return view('admin.dashboard',compact('user','therapist','online'));
    } 
    else if($role=='therapist'){
      
     
        return view('therapist.dashboard');
    }
   
    else{
        $event=event::all();
        $user=user::all(); 
        $therapist=user::where('role','therapist')->get();
      return view('Home',compact('event','user','therapist'));
      
    } 
    
}

public function countusers(){
    $results=DB::table('users')->count();
  
   return view('Admin.dashboard',compact('results'));
}


public function search(Request $request)
    {
     $search=$request->search;
     if($search=='')
     {
         $event=event::paginate(3);
         
        $event=event::where('date','Like','%'.$search.'%')->get();
         return view('home',compact('event'));
      return back(compact('event'));
     }
else{

     $user=auth()->user();
     

     $event=event::where('date','Like','%'.$search.'%')->get();

     return view('home',compact('event'));
    
    }}
    public function booking(Request $request,$id)
    {
        $user=auth()->user();
        $id=$user->id;
        $name=$user->name;
        
        
        $event=event::find($id);
        $booking=new Appointments;

       /* $booking->patient_id=$id;
        $booking->therapist_id = $event->user_id;
        $booking->therapist_name= $event->full_name;
        $booking->date=$event->date;
        $booking->time_begin=$event->time_begin;
        $booking->time_end=$event->time_end;*/
       

        
        $booking->patient_id=$id;
        $booking->therapist_id=$request->therapist_id;
        $booking->therapist_name=$request->therapist_name;
        $booking->date=$request->date;
        $booking->time_begin=$request->time_begin;
        $booking->time_end=$request->time_end;
        $id=$user->id;
        $event=event::find($id);
       $event= DB::table('events')->where('full_name',$name)->delete();

        $booking->save();

        
        return redirect()->back()->with('message','Your appointment is created');

    }
    public function confirm($id){
            $event=event::find($id);
            $event-> DB::table('events')->where('full_name',$name)->delete();
    }

    public function booking1($id){
        $event=event::find($id);
        if(Auth::id())
  {
      

  return view('booking',compact('event'));
  }  
  else{
      return redirect('login');
  } 
       
        
    }



   
}
