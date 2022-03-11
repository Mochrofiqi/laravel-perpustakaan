@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">

        <!-- horizontal Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="text-center">
                    <h4 class="text-blue h3">Tambah Data Kategori Buku</h4>
                </div>
            </div>

            <form  action="/kategori" method="POST" >
                @csrf
                <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" for="kode_kategori">Kode Kategori</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="kode_kategori" type="text" placeholder="Masukkan kode kategori">
                    @error('kode_kategori')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6" for="nama_kategori">Nama Kategori</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="nama_kategori" placeholder="Masukkan nama kategori">
                        @error('nama_kategori')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <a href="/kategori" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
