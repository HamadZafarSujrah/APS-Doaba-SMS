<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\admission;

use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\True_;

class MainController extends Controller
{
    function login(){
        return view("auth.login");
    }

    function register(){
        return view("auth.register");
    }

    function save(Request $req){
      $req->validate([
          'name'=>'required|max:20',
          'email'=>'required|email|unique:admins',
          'password'=>'required|min:5|max:20',
      ]);

      //insert into databsae
      $Admin= new Admin;
      $Admin->name = $req->name;
      $Admin->email = $req->email;
      $Admin->password = $req->password;
      $Admin->active = True;
      $save = $Admin->save();
      if($save){
          return back()->with('success','new user has been added into Database!');

 }else{
    return back()->with('fail','something went wrong try again later!');
      } }



    function check(Request $request){
        $request->validate([
            
            'email'=>'required|email',
            'password'=>'required|min:5|max:20']);
            
            $userEmail= Admin::where('email', $request->email)->first();
            $userPassword= Admin::where(([ ['password', '=', $request->password], ['active', '=',1] ])
            )->first();

            if (!$userEmail) {
                return back()->with('fail','we do not recognized your email address');


               } else 
               {
                   //check passwword
                  // dd($userEmail);

                   if(Admin::where(([ ['password', '=', $request->password], ['active', '=',1],['email',$userEmail->email] ]))->first())
                    {
                     $request->session()->put('LoggedUser',$userEmail->id);
                      return redirect('/dashboard');
                
                   }
                   else{
                    return back()->with('fail','Incorrect Password');
                   }
               }
            }

            function logout(){
                if(session()->has('LoggedUser')){
                    session()->pull('LoggedUser');
                    return redirect('/login');
                }
            }
        
            function dashboard(){
                $data=['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
                return view('dashboard',$data);
            }
            
            

}


    


  


