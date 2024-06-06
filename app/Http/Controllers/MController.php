<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MController extends Controller
{
    public function index(Request $request){
        if($request){
            $pena = Forum::where('kategori','like','%'.$request->cari.'%')->get();
        }else{
           $pena = Forum::all();
        }
        return view('menemukan',compact('pena'));

    }
    
}
