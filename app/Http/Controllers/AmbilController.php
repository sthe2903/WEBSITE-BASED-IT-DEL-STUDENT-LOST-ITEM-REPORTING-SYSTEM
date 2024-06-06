<?php

namespace App\Http\Controllers;

use App\Models\Ambil;
use Illuminate\Http\Request;

class AmbilController extends Controller
{
    public function ambil(){
        return view('contact.taken');
    }
    public function prosesambil(Request $request){
        Ambil::create($request->all());
        return redirect()->intended('/menemukan')->with("flash_message", "Laporan Berhasil Dikirim");
    }
}
