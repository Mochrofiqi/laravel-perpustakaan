@extends('admin.layouts.master')

@section('content')

    <div class= "col-md-9 ms-sm-auto col-lg-12 px-md-2">
        <div class="row align-items-center">
            <div class="col-md-3">
                <img src="img/gambar/gambar.png" width="350" alt="">
            </div>

            <div class="col-md-9" style="padding-left: 100px">
                <h3 class="font-30" style="font-family: Lucida Sans Unicode">
                    <strong>SELAMAT DATANG</strong>
                    <h2 class="weight-700 font-40 fs-1 text-primary"><strong>{{ auth()->user()->nama }}</strong></h2>
                </h3>
                <h5 class="font-20" style="padding-right: 10px">Selamat datang di halaman admin dari Perpustakaan Moonlight.</h5>
            </div>
        </div>
    </div>

@endsection

@section('content2')

<div class="box2">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="row" style="padding-left: 10px">
                    <div class="col-6 p-3">
                        <img src="img/ikon/people.png" width="" class="card-img-top" alt="...">
                    </div>
                    <div class="col-6 pt-3">
                        <h4 style="padding-left: 14px">USER</h4>
                        <h4 style="padding-left: 37px">{{ $user_count }}</h4>
                        <a href="/user" class="btn btn-info" >More Info</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="row" style="padding-left: 10px">
                    <div class="col-6 p-4">
                        <img src="img/ikon/book-stack.png" width="" class="card-img-top" alt="...">
                    </div>
                    <div class="col-6 pt-3">
                        <h4 style="padding-left: 13px">BUKU</h4>
                        <h4 style="padding-left: 37px">{{ $buku_count }}</h4>
                        <a href="/buku" class="btn btn-info" >More Info</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="row" style="padding-left: 5px">
                    <div class="col-6 p-3">
                        <img src="img/ikon/delivering.png" width="" class="card-img-top" alt="...">
                    </div>
                    <div class="col-6 pt-4">
                        <h5 class="fs-6">PEMINJAMAN</h5>
                        <h4 style="padding-left: 37px">{{ $peminjaman_count }}</h4>
                        <a href="/peminjaman" class="btn btn-info" >More Info</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="row" style="padding-left: 0px">
                    <div class="col-6 p-4">
                        <img src="img/ikon/return2.png" width="" class="card-img-top" alt="...">
                    </div>
                    <div class="col-6 pt-4">
                        <h5 class="fs-6">PENGEMBALIAN</h5>
                        <h4 style="padding-left: 37px">{{ $pengembalian_count }}</h4>
                        <a href="/pengembalian" class="btn btn-info" >More Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
