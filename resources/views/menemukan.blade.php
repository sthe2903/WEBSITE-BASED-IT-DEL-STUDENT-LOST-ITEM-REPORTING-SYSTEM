@extends('layout.layaouts')
@extends('layout.header')

@section('navbar')
<br>
<div class="container">
    <div class="btn " style="background-color:hsl(188, 50%, 25%)">
      <a href="/create-menemukan" class="text-white" style="text-decoration: none;">  Laporkan Barang Ditemukan</a>
    </div>
</div>
    <div class="contaiter" style="align-items: center;">
       
          <form action="{{ route('menemukan') }}" method="GET" style="margin-left: 400px;">
            <input type="text" name="cari" placeholder="Cari Kategori----" value="{{ old('cari') }}" style="width: 70%;height:40px;border:rgb(9, 100, 104);background-color:rgb(216, 214, 214);">
            <input type="submit" value="CARI" class="btn btn-info" style="height: 40px;border-radius:none;background-color: #205860;color:aliceblue;" >
          </form> </div>
          <div class="container">
          <p1>
            <a class="btn text-white" style="background-color: #205860"  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="bi bi-info-circle"></i>Info
            </a>
            
          </p1>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
             Sebelum melakukan <b>PENGAMBILAN</b> barang,ingat lah terlebih dahulu:
             <ul>
               <li>ID Barang</li>
               <li>Nama Barang</li>
             </ul>
            </div>
          </div></div>
          <div class="container">
            <div class="row mt-4">
              @foreach ($pena as $barang)
                <div class="col-md-4 mt-3">
                  <div class="card " style="background-color: rgb(235, 235, 235);box-shadow:black 5px;">
                    <img src="{{  asset('asset/menemukan/'.$barang->gambar) }}" alt="" width="80px" height="280px"" class="card-img-top" style="padding: 10px 10px 10px 10px;" alt="...">
                   <span class="text-start " style="padding-left:10px "><b>Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp</b>{{ $barang->penemu }}</span>
                   <span class="text-start" style="padding-left:10px "><b>Telp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp</b>{{ $barang->telepon }}</span>
                   <span class="text-start" style="padding-left:10px "><b>Lokasi&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp</b>{{ $barang->lokasi }}</span>
                   <span class="text-start" style="padding-left:10px "><b>Kategori&nbsp:&nbsp</b>{{ $barang->kategori }}</span>
                   <div class="d-grid gap-3 d-md-block" style="padding-left: 10px;">
                     <button class="btn btn-info" type="button" style="width: 100px"><a href="/create-ambil" style="text-decoration: none;color:white;"> Ambil</a></button>
                   <button class="btn btn-success" type="button" style="width: 100px">{{ $barang->status }}</button>
                   <button class="btn btn-outline-danger "disable type="button" style="width: 70px" >ID:&nbsp{{ $barang->id}}</button>
                  </div><br>
                  </div>
                </div>@endforeach
            </div>
          </div><br><br>
    @endsection
    
    @section('foother')
    <br>
    @endsection