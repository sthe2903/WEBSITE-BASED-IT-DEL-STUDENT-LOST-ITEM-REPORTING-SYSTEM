<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ambil;
use App\Models\Forum;
use Illuminate\Http\Request;
use App\Models\ForumKehilangan;

class AdminController extends Controller
{
    public function index(){
        $formk = ForumKehilangan::all();
        $pena = Forum::all();
        $ambil = Ambil::all();
        return view('contact.coba',compact('formk','pena','ambil'));
    }
    public function cari(Request $request){
        if($request){
            $pena = Forum::where('kategori','id','like','%'.$request->cari.'%')->get();
        }else{
           $pena = Forum::all();
        }
        return view('contact.coba',compact('pena'));

    }
}
