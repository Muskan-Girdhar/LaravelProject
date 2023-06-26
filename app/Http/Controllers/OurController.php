<?php

namespace App\Http\Controllers;
use App\Models\user;

use App\Http\Requests\UserpostRequest;
use App\Http\Requests\AddpostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
use Hash;

class OurController extends Controller
{
    public function loginget()
    {
      return view('login');
    }
    public function registrationget()
    {
      return view('registration');
    }
    public function addpostget()
    {
      return view('Addpost');
    }

  // ------------------------------

    public function loginpost(UserpostRequest $request)
    {
      $validated = $request->validated();

    $myusers=user::where('email','=',$request->email)->first();
    if($myusers)
   {
    if(Hash::check($request->password,$myusers->password))
    {
        $request->session()->put('loginId',$myusers->id);
        return redirect('dashboard');
    }
    else{
        return back();
    }
   }
   else
           {
            return back();
           }
    }

    public function registrationpost(Request $request)
    {
      $this->validate($request,[
        'name'=>'required|min:5|max:20|string',
         'email'=>'bail|required|email|unique:users,email',
         'password'=>'required|min:5|max:12',
      ]);
      
      // $myusers = new user;
      //  $myusers->name= $request->name;
      //  $myusers->email= $request->email;
      //  $myusers->password= Hash::make($request->password);
      //  $res=$myusers->save();

    DB::table('users')->insert([
        'name'=>$request->name,
        'email' =>$request->email ,
        'password'=> Hash::make($request->password),
    ]);

       $myusers=DB::table('users')->where('email','=',$request->email)->first();
       $request->session()->put('loginId',$myusers->id);
      return redirect('dashboard');
    }
   
   
    public function addpost(AddpostRequest $request)
    {
      $validated = $request->validated();
 
      return $request->all();
      DB::table('posts')->insert([
        'tittle'=>$request->tittle,
        'description' =>$request->description ,
        'file' => $request->file,
        'coursetype' =>$request->coursetype,
        'posttype'=>$request->postingtype,
        'user_id'=> $request->session()->get('loginId'),

    ]);

    $file = $request->file;
    $filename = time().'.'.$file->getClientOriginalExtension();
    $request->file->move('assets',$filename);

       return $request->all();
    }

    // ------------------------

public function dashboard()
{
  return view('dashboard');
}
}

