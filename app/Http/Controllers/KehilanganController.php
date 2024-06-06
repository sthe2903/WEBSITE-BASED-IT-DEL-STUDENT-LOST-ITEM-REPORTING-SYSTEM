<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumKehilangan;
use Illuminate\Support\Facades\DB;

class KehilanganController extends Controller
{
    public function index(){
        $formk = ForumKehilangan::all();
        return view('kehilangan',compact('formk'));
    }
    public function cari(Request $request){
        $cari = $request->cari;
        
        $formk = DB::table('forum')
        ->where('kategori','like',"%".$cari."%")
        ->paginate();

        return view('menemukan',['forum'=>$formk]);
    }

}
