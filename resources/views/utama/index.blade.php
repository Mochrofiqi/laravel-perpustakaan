@extends('utama.layouts.master')

@section('content')

<div class="box4">
    <div class="row m-1 justify-content-center">
        <h2 class="text-center pb-3" style="font-family: Lucida Sans">Selamat Datang di Perpustakaan Moonlight</h2>

        <div class="col-8">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/slide/slide3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/slide/slide2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/img/slide/slide8.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
      </div>
      <div class="box5 text-center"  style="font-family: Verdana">
      <p class="h6">Perpustakaan Moonlight merupakan fasilitas atau tempat menyediakan sarana
        bahan bacaan dan mencari ilmu dengan cara membaca. Perpustakaan ini terletak di daerah Malang Kota dan dibuka untuk
        masyarakat umum yang ingin meminjam atau membaca buku.</p>
        <p class="h6">"Buku adalah jendela ilmu pengetahuan". Kita bisa mendapatkan wawasan dan pengetahuan yang luas dengan membaca
            berbagai buku sebab dengan membaca buku, wawasanmu akan bertambah.</p>
        </div>
    </div>
</div>

@endsection
