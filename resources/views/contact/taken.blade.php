@extends('layout.layaouts')
@extends('layout.header')

@section('navbar')
<body style="background-color:#D4D4D4;">
    

<br>
<div class="container">
<div class="">
    <a href="menemukan" class="text-start" style="text-decoration: none;">Kembali ke Daftar Menemukan</a><br><br>
    <form action="" method="post" enctype="multipart/form-data" style="width:1200px; background-color:white; padding:30px 30px 30px 30px;">
      @csrf
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Pengambil</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="pengambil">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="barang">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">ID Barang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="id_barang">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label" >NIM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="nim">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="telepon">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label" >Waktu Pengambilan</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="inputPassword" name="waktu" placeholder="d-m-Y">
            </div>
          </div>
          
         <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" type="submit">Kirim Pengambilan Barang!</button>
          </div></div>
    </form><br></body>
    @endsection
    
    @section('foother')
    <br>
    @endsection