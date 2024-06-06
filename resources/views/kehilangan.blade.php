@extends('layout.layaouts')
@extends('layout.header')

@section('navbar')
<br>
<div class="container">
    <div class="btn" style="background-color:#205860">
      <button style="border: none;background-color:#205860"><a href="/create-laporan" style="text-decoration: none;color:rgb(255, 255, 255); border:none;">Laporkan barang hilang </a> <span class="las la-user-plus">

     {{-- <a href="forum01" class="text-white" style="text-decoration: none;">  Laporkan Barang Hilang</a> --}}
    </div>
</div>
    <div class="contaiter">
      <form action="/kehilangan" method="GET" style="margin-left: 400px;">
        <input type="text" name="cari" placeholder="Cari Kategori----" value="{{ old('cari') }}" style="width: 70%;height:40px;border:white;background-color:rgb(221, 221, 221);">
        <input type="submit" value="CARI"class="btn btn-info" style="height: 40px;border-radius:none;background-color:#205860;color:rgb(255, 255, 255)">
      </form>
          <div class="container">
            <div class="row mt-3">
              @foreach ($formk as $lose)
                <div class="col-md-4" >
                  <div class="card border-dark" style="background-color:#dddede">
                    <img src="{{  asset('asset/kehilangan/'.$lose->gambar) }}" alt="" width="80px" height="300px"" class="card-img-top" style="padding: 10px 10px 10px 10px;" alt="...">
                    <span class="text-start " style="padding-left:10px " ><b>Nama Barang:</b>&nbsp{{ $lose->barang }} </span>
                    <span class="text-start" style="padding-left:10px "><b>Nama Pemilik:</b>&nbsp{{ $lose->pemilik }}</span>
                    <span class="text-start" style="padding-left:10px "><b>Kategori&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   :</b>&nbsp{{ $lose->kategori }}</span>
                    <span class="text-start" style="padding-left:10px "><b>Telp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp         :</b>&nbsp<i>{{ $lose->telepon }}</i></span>
                    <span class="text-start" style="padding-left:10px "><b>Deskripsi&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   :</b>&nbsp{{ $lose->deskripsi }}</span>
                    <span class="text-start" style="padding-left:10px "><b>Lokasi&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      :</b>&nbsp{{ $lose->lokasi}}</span>
                    <br>
                  </div>
                  <br>
                </div>
            
              @endforeach
        </div>
    </div><br>
    @endsection
    
    @section('foother')
    <br>
    @endsection