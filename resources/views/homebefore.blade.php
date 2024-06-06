@extends('layout.layaouts')
@extends('layout.header')

@section('navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootsrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
<style>

    .jumbotron {
         position: relative;
         background:  url("img/background1.png") center center;
         width: 100%;
         height: 100%;
         background-size: cover;
         overflow:  hidden;
         padding: 250px;
         filer:  blur(5px);

    }
    .btn-success{
        background-color: #005B66;
    }
</style>

<div class="jumbotron">
    <div class="container">
    <h1>Selamat Datang di Website Kami</h1>
    <p1>Laporkan dan Temukan barangmu dengan mudah disini.</p1><br><br>
    <button type="button" class="btn btn-success"><a href="register" class="text-white" style="text-decoration: none;"> Register </a></button> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
    <button type="button" class="btn btn-success"><a href="login" class="text-white" style="text-decoration: none;"> Login</a></button> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  
    </div>   
</head>

<body>
    
</body>
</html>










@endsection


<br>
@section('foother')



@endsection