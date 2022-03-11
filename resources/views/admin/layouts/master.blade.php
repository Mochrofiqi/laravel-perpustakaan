<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="30x30" href="/img/ikon/bookshelf.png">
    <link href="/css/dashboard.css" rel="stylesheet">
    <title>{{ $title }}</title>

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

    @include('/admin/layouts.header')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
        <h1 class="h2">{{ $title }}</h1>

    </main>

    @yield('content2')

    <div class="box">
        @yield('content')
    </div>

    @include('/admin/layouts.footer')

  </body>
</html>
