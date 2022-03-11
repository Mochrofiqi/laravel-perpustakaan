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
    <title>Login</title>

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
              <a href="/register" class="btn btn-warning " style="font-family: Lucida Sans"><strong>Register</strong></a>
            </div>
        </div>
    </header>

    <div class="box2">
        <img src="/img/gambar/login.jpg" width="800" alt="">
    </div>

    <div class="login box">
        <main class="form-signin">
            <h1 class="text-center text-primary" style="font-family: Lucida Sans">Login</h1>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <p for="email" class="form-label h5 pt-3 pb-1">Email Address</p>
                    <div class="input-group custom">
                    <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
                    </div>
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <p for="password" class="form-label h5 pb-1">Password</p>
                    <div class="input-group custom">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="**********">
                    </div>
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="text-center" style="font-family: Segoe UI">
                    <button class="btn btn-primary btn-lg" type="submit">Login</button>
                    <div class="font-16 weight-600 pt-1 pb-1" data-color="#707373">OR</div>
					<div class="text-center">
						<a class="btn btn-outline-primary btn-lg btn-block" href="register">Register To Create Account</a>
                    </div>
                </div>
            </form>
        </main>
    </div>

    <script src="/asset/js/bootstrap.bundle.min.js"></script>

</body>
</html>
