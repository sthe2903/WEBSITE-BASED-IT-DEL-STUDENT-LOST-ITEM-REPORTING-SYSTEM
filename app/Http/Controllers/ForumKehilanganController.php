<?php

namespace App\Http\Controllers;

use App\Models\ForumKehilangan;
use Illuminate\Http\Request;

class ForumKehilanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addlaporan()
    {
        return view('contact.fkehilangan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prosesaddlaporan(Request $request)
    {
        
        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/kehilangan';

        $file->move($tujuanFile,$namafile);
        $newGaleri = new ForumKehilangan;
        $newGaleri->gambar = $namafile;
        $newGaleri -> barang = $request->barang;
        $newGaleri -> pemilik = $request->pemilik;
        $newGaleri -> telepon = $request->telepon;
        $newGaleri -> lokasi = $request->lokasi;
        $newGaleri -> kategori= $request->kategori;
        $newGaleri -> deskripsi = $request->deskripsi;
        $newGaleri->save();
        return redirect()->intended('/menemukan')->with("flash_message", "Menu berhasil Ditambahkan");

    }
    public function deletekehilangan($id)
    {
        ForumKehilangan::destroy($id);
        return redirect('contact')->with('flash_message', 'Data ini akan dihapus?');  
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //  
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumKehilangan  $forumKehilangan
     * @return \Illuminate\Http\Response
     */
    public function show(ForumKehilangan $forumKehilangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumKehilangan  $forumKehilangan
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumKehilangan $forumKehilangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForumKehilangan  $forumKehilangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumKehilangan $forumKehilangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumKehilangan  $forumKehilangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumKehilangan $forumKehilangan)
    {
        //
    }
}
