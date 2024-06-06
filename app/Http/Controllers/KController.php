<?php

namespace App\Http\Controllers;

use App\Models\ForumKehilangan;
use Illuminate\Http\Request;

class KController extends Controller
{
    public function index(){
        $formk = ForumKehilangan::all();
        return view('kehilangan',compact('formk'));
    }
    public function push(Request $request){
        if($request){
            $formk = ForumKehilangan::where('kategori','like','%'.$request->cari.'%')->get();
        }else{
           $formk = ForumKehilangan::all();
        }
        return view('kehilangan',compact('formk'));

    }
}
