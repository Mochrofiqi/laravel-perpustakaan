@extends('admin.layouts.master')

@section('content')

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="text-center">
                <h4 class="text-blue h3">Edit Data Kategori</h4>
            </div>
        </div>
        <form action="/kategori/{{ $kategori->id }}" method="POST">
            @method('put')
            @csrf
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" for="kode_kategori">Kode Kategori</p>
                <div class="col-sm-12 col-md-10">
                    <input readonly class="form-control" type="text" name="kode_kategori" id="kode_kategori"
                        value="{{ old('kode_kategori', $kategori->kode_kategori) }}"
                        placeholder="Masukkan kode kategori">
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" for="nama_kategori">Nama Kategori</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="nama_kategori" id="nama_kategori"
                        value="{{ old('nama_kategori', $kategori->nama_kategori) }}"
                        placeholder="Masukkan nama kategori">
                </div>
            </div>
            <br>
            <div class="text-center">
                <a href="/kategori" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
