<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .navbar{
            background-color:  #005B66;
;;
        }
        .navbar-nav{
            padding: 20px;
            padding-left: 20px;
        }
        .btn{
            background-color: #0B474F;
        }
        .dropdown-menu{
          background-color: #005B66;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a class="navbar-brand text-white" href="#">Laporkan Saja!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="home">Home</a>
              </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <li class="nav-item">
                <a class="nav-link text-white" href="kehilangan">Kehilangan</a>
              </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <li class="nav-item">
                <a class="nav-link text-white" href="menemukan">Menemukan</a>
              </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             
              
            </ul>
          </div>@auth
          <li class="nav-item dropdown" style="list-style: none;">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back,{{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item text-dark"><i class="bi bi-box-arrow-left"></i>&nbspLog Out</button> 
                </form>
                </li>            
            </ul>
          </li>

              @else
            <li class="nav-item " style="list-style: none;">
              <a href="/login" class="nav-link text-white"><i class="bi bi-person-circle "></i></li>Login</a>&nbsp&nbsp&nbsp
            </li>    @endauth
        </div>
      </nav>

<div class="contater">
    @yield('navbar')
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>