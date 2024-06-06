
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>   
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
        color: black;
        font-family: 'Playfair Display', serif;
    }
    .btn{
        background: #2DAD00;
    }
    
</style>
<div class="container" style="margin: 180px auto;" >
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-transparent">
                <div class="card-body"  style="background: rgba(255, 255, 255, 0.5);border-radius: 25px;">
                    <form method="post" action="/register">
                        @csrf
                        <br>
                        <center><h2 class="text-white" style="font-family:Bodoni Moda;">Laporkan Saja!</h2></center><br>
                        <div class="form-group row">
                            <div class="col-md-12 input-group-prepend">
                                <table style="margin-left: 50px; border:-1px;">
                                <td><span class="input-group-text border-md border-right-0"><i class="fas fa-user-circle"></i></span></td>
                                <td style="width: 400px;"><input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus placeholder="{{ __('Nama') }}">
                                </td>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                </table>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 input-group-prepend">
                                <table style="margin-left: 50px; border:-1px;">
                                <td><span class="input-group-text border-right-0"><i class="fas fa-envelope"></i></span></td>
                                <td style="width: 400px;"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" placeholder="{{ __('Alamat E-Mail') }}">
                                </td>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                </table>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 input-group-prepend">
                                <table style="margin-left: 50px; border:-1px;">
                               <td> <span class="input-group-text border-right-0"><i class="fas fa-phone"></i></span></td>
                                <td style="width: 400px;"><input id="" type="text" class="form-control" name="nomor" required  placeholder="No.Telp..">
                                </td>
                                </table>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 input-group-prepend">
                                <table style="margin-left: 50px; border:-1px;">
                                <td><span class="input-group-text border-right-0"><i class="fas fa-lock"></i></span></td>
                                <td style="width:400px;"><input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
                            </td>
                                </table>
                        </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <center>
                                    <button type="submit" class="btn btn-primary my-4">
                                    Register
                                </button>
                            </center>
                            <p class="text-center">Sudah memiliki akun?
                                    <a href="login">
                                        {{ __(' Login.') }}
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
