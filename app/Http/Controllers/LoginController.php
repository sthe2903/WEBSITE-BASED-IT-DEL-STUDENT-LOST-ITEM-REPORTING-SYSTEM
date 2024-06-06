<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index1(){
        return view('login');
    }
    public function authenticate(Request $request){

        $request->validate([
               'email' => 'required',
               'password' => 'required'
           ]);

           $input = $request->all();
           if(auth()->attempt(array('email' => $input['email'],'password'=> $input['password']))){
               if(auth()->user()->role == "a"){
                   return redirect('/contact');
               }else{
                   return redirect('/home');
               }
           }
       
           return back()->with('loginError', 'Login Faild!!')->onlyInput('email');
   }

   public function logout(Request $request){
       Auth::logout();

   $request->session()->invalidate();

   $request->session()->regenerateToken();

   return redirect('/');
   }

}
