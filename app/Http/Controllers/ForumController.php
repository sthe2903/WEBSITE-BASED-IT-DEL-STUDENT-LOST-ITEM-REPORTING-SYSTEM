<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.fmenemukan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/menemukan';

        $file->move($tujuanFile,$namafile);
        $newGaleri = new Forum;
        $newGaleri->gambar = $namafile;
        $newGaleri -> barang = $request->barang;
        $newGaleri -> status = $request->status;
        $newGaleri -> penemu = $request->penemu;
        $newGaleri -> telepon = $request->telepon;
        $newGaleri -> lokasi = $request->lokasi;
        $newGaleri -> kategori= $request->kategori;
        $newGaleri -> deskripsi = $request->deskripsi;
        $newGaleri->save();
        return redirect()->intended('/menemukan')->with("flash_message", "Menu berhasil Ditambahkan");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proseseditmenemukan(Request $request,$id)
    {
        $pena =Forum::find($id);
        $pena->update([
            'barang'=> $request->barang,
            'penemu'=>$request->penemu,
            'telepon'=>$request->telepon,
            'lokasi'=>$request->lokasi,
            'status'=>$request->status

        ]);
        return redirect()->intended('contact')->with("flash_message", "Menu berhasil Diubah");
 
    }
    public function editmenemukan($id){
        $pena = Forum::find($id);
        return view('contact.editmenemukan',compact('pena'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function deletemenemukan($id)
    {
        Forum::destroy($id);
        return redirect('contact')->with('flash_message', 'Data ini akan dihapus?');  
    }
}
