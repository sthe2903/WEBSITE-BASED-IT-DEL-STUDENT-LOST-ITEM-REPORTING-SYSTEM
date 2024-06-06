@extends('layout.layaouts')
@extends('layout.header')

@section('navbar')
<body style="background-color:#D4D4D4;">
    

<br>
<div class="container">
<div class="">
    <form action="/edit-menemukan/{{$pena->id}}" method="post" enctype="multipart/form-data" style="width:1200px; background-color:white; padding:30px 30px 30px 30px;">
      @csrf
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="barang" value="{{ $pena->barang }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Penemu</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="penemu" value="{{ $pena->penemu }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">No.Telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="telepon" value="{{ $pena->telepon }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="lokasi" value="{{ $pena->lokasi }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label" >status</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="status" value="{{ $pena->status }}">
            </div>
          </div>
        </div>
         </div><br>
         <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" type="submit">U p d a t e !</button>
          </div></div>
    </form><br></body>
    @endsection
    
    @section('foother')
    <br>
    @endsection