<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    public function users(Request $request){
       
        $users=user::all();
        return view('Admin.users' ,
        compact('users'));
    }
    public function deleteuser($id)
    {
        $users=user::find($id);
        $users->delete();
        return redirect()->back()->with('message','User is deleted');
    }
    public function createuser(){
       
        return view('Admin.createuser');
        
    }

 public function newuser(Request $request){
    $users= new user;
    $users->name=$request->name;
    $users->usertype=$request->usertype; 
    $users->email=$request->email;
    $users->password=$request->password;
    $users->save();
    return redirect()->back()->with('message','New user is created');
   
 }
    /*update
    return User::create([
        'name' => $users['name'],
        'email' => $users['email'],
        'usertype'=>$users['usertype'],
        'password' => Hash::make($data['password'])
      ]);
     $users= new user;
        $users=$id->$request->id;
        $users=$name->$request->name;
        $users=$usertype->$request->usertype;
    */

public function chat(){
return view('Admin.chat');
}
}
