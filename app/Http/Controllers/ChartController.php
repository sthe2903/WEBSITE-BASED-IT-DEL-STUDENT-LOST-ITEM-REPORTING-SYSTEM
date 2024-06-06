<?php

namespace App\Http\Controllers;

use id;
use Illuminate\Http\Request;
use App\Models\ForumKehilangan;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $formk =  $users =ForumKehilangan::select(DB::raw("COUNT(*) as count"))
        // ->where('kategori',['elektronik','sehari-hari','uang'])
        ->groupBy(DB::raw("(kategori)"))
        ->pluck('count');
          
        return view('home', compact('formk'));
    }
}
