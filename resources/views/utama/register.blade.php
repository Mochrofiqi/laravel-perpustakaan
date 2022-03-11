<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/utama.css" rel="stylesheet">
    <title>Register</title>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    </head>
  <body>
    <header class="text-white pt-1" style="background-color: rgb(50, 48, 48)">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-4 me-lg-auto justify-content-center">
              <h3><a href="/" class="nav-link text-white pb-1"><img src="/img/ikon/librarys.png" width="40" alt="">  Perpustakaan Moonlight</a></h3>
            </ul>

            <div class="text-end">
              <a href="/login" class="btn btn-warning " style="font-family: Lucida Sans"><strong>Login</strong></a>
            </div>
        </div>
    </header>

    <div class="box2">
        <img src="/img/gambar/register.jpg" width="800" alt="">
    </div>

    <div class="box3">
        <main class="form-signup">
            <h1 class="text-center text-primary" style="font-family: Lucida Sans">Register</h1>
            <form action="/register" method="POST">
                @csrf
                <section >
                    <div class="register" >
                        <div class="form-group row pb-2 pt-3">
                            <p class="col-sm-4 col-form-label h6">Nama Lengkap</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama">
                            </div>
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Jenis Kelamin</p>
                            <div class="col-sm-8">
                                <select class="form-control" name="jenis_kelamin" aria-label="Default select example">
                                    <option selected>Pilih</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                  </select>
                            </div>
                            @error('jenis_kelamin')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Alamat</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            @error('alamat')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Telepon</p>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="telepon">
                            </div>
                            @error('telepon')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                         @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Email Address*</p>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email">
                            </div>
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Username*</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="username">
                            </div>
                            @error('username')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Password*</p>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password">
                            </div>
                            @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Create Account</button>
                        </div>
                    </div>
                </section>
            </form>
        </main>
    </div>

    <script src="/asset/js/bootstrap.bundle.min.js"></script>

</body>
</html>
