{{-- @extends('layout.pagelogin')

@section('title','Harian - login') --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Kiwi+Maru:wght@300&family=Noto+Sans+JP&family=Playfair+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

{{-- @section('container') --}}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');

    body{
        background-image: url('img/background.png');
        background-size: cover;
    }
    #logologin{
        margin: auto;
        padding-top: 30px;
        padding-bottom: 30px;
        width: 100%
    }
    h3{
        font-family: 'Kiwi Maru', serif;
    }
    label{
        font-family: 'Source Sans Pro', sans-serif;
    }
    .btn{
        background-color: #2DAD00;
    }


</style>
    <div class="container" style="margin: 180px auto;">
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <div class="bg-transparent">
                    <div class="card-body" style="background: rgba(255, 255, 255, 0.5);border-radius: 25px;width:600px;" >
                        <form method="POST" action="login">
                            @csrf
                           <br>
                                <center><h2 class="text-white" style="font-family:Bodoni Moda;">Laporkan Saja!</h2></center> <br>
                                <h3 class="text-center">LOGIN</h3>
                                @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close white" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>@endif
                            <div class="form-group row">
                                <div class="col-md-12 input-group-prepend">
                                    <table style="margin-left: 40px; border:-1px;"> 
                                        <tr style="padding-bottom: 20px;">
                                    <td><span class="input-group-text border-right-0"><i class="fas fa-envelope"></i></span></td>
                                    <td style="width: 400px;"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail') }}">
                                            </td>        
                                    {{-- @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}

                                    </tr> <br></table><br>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-12 input-group-prepend">
                                   <table style="margin-left: 40px;border:-1px;"> <tr>
                                   <td> <span class="input-group-text border-right-0"><i class="fas fa-lock"></i></span></td>
                                    <td style="width: 400px;"><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
                                            </td>    
                                    {{-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                
                                </tr>
                                </div></table>
                            </div>
    <br><br>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingat Saya') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <center>
                                        <button type="submit" class="btn text-white">
                                           L O G I N
                                        </button>
                                    </center>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <p class="text-center">
                                        {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration: none;">
                                        {{ __('Lupa Password?') }}
                                    </a>
                                        @endif --}}
                                    
                                        <a  href="register" style="text-decoration: none;">
                                            {{ __('Belum memiliki akun?') }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}