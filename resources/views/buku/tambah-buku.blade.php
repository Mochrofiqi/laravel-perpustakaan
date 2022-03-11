@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="text-center">
                    <h4 class="text-blue h3">Tambah Data Buku</h4>
                </div>
            </div>
            <form action="/buku" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Kode Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="kode_buku" type="text" placeholder="Masukkan kode buku">
                        @error('kode_buku')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Nama Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="nama_buku" type="text" placeholder="Masukkan nama buku">
                        @error('nama_buku')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Kategori Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="kategori_id" >
                            <option selected>Pilih Kategori</option>

                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach

                        </select>
                        @error('kategori_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Penulis Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="penulis_buku" type="text" placeholder="Masukkan penulis buku">
                        @error('penulis_buku')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Penerbit Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="penerbit_buku" type="text" placeholder="Masukkan penerbit buku">
                        @error('penerbit_buku')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Tahun Terbit Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="tahun_terbit" type="text" placeholder="Masukkan tahun terbit buku">
                        @error('tahun_terbit')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Stock Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="stock_buku" type="number" placeholder="Masukkan stock buku">
                        @error('stock_buku')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6" for="gambar_buku">Gambar Buku</p>
                    <div class="custom-file col-sm-12 col-md-10 ">
                        <input type="file" id="gambar_buku" name="gambar_buku"
                            class="custom-file-input form-control @error('gambar_buku') is-invalid @enderror"
                            onchange="previewImage()">
                        <label class="custom-file-label">Pilih file gambar</label>
                        @error('gambar_buku')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-12 col-md-10 image" style="margin-left: 200px !important;">
                        <img class="img-preview img-fluid" width="200">
                    </div>
                </div>
                <div class="text-center">
                    <a href="/buku" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage(){
        const gambar = document.getElementById('gambar_buku');
        const img = document.querySelector('.img-preview');

        img.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function (oFREvent) {
            img.src = oFREvent.target.result;
        }
    }
</script>

@endsection
