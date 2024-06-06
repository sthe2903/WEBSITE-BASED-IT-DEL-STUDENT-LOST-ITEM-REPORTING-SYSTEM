@extends('layout.layaouts')
@extends('layout.header')

@section('navbar')
<body style="background-color:#D4D4D4;">
<br>
<div class="container">
    <a href="menemukan" class="text-start" style="text-decoration: none;">Kembali ke Daftar Menemukan</a><br><br>
    <form action="" style="width:1200px; background-color:white; padding:30px 30px 30px 30px;" method="post" enctype="multipart/form-data">
      @csrf
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="barang">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Pemilik</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="pemilik">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">No.Telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="telepon">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="lokasi">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Ciri-ciri</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="deskripsi">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label" >Kategori</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="kategori" placeholder="Kategori: elektroknik,sehari-hari,uang dll">
            </div>
          </div>

        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="gambar" name="gambar">
          </div>
         </div>
         <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" type="submit">Laporkan Barang Hilang!</button>
          </div>
    </form><br>
</body>
    @endsection
    
    @section('foother')
    <br>
    @endsection