<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index2(){
        return view('register');
    }
    public function store(Request $request )
    {
      $validateData = $request->validate([
           'name' => 'required|max:255',
           'email'=>'required|email',
           'nomor' => 'required|max:20;',
           'password' =>'required|min:5|max:10'
        
          
       ]);
    $validateData['password'] = Hash::make($validateData['password']);

    User::create($validateData);

  
    return redirect('/login')->with('success',"Registrasi Behasil! Silahkan Login");
}
}
