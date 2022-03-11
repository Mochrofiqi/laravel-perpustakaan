<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="icon" type="image/png" sizes="30x30" href="/img/ikon/bookshelf.png">
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/utama.css" rel="stylesheet">
    <title>Perpustakaan Moonlight</title>

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
  <body>

  @include('utama.layouts.header')

  <main id="main">

    @yield('content')

  </main>

    @include('utama.layouts.footer')

    <script src="/asset/js/bootstrap.bundle.min.js"></script>

  </body>
</html>


