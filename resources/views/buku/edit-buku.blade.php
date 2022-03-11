@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="text-center">
                    <h4 class="text-blue h3">Edit Data Buku</h4>
                </div>
            </div>
            <form action="/buku/{{ $buku->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h4">Kode Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input readonly class="form-control" name="kode_buku" type="text"
                            placeholder="Masukkan kode buku"  value="{{ old('kode_buku', $buku->kode_buku) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Nama Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="nama_buku" type="text" placeholder="Masukkan nama buku"
                        value="{{ old('nama_buku', $buku->nama_buku) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Kategori Buku</p>
                    <div class="col-sm-12 col-md-10">
                    <select class="form-control" name="kategori_id" value="{{ old('kategori_id', $buku->kategori->id) }}">
                        <option selected>Pilih Kategori</option>

                        @foreach ($kategoris as $kategori)
                            @if (old('kategori_id', $buku->kategori_id) == $kategori->id)
                                <option value="{{ $kategori->id }}" selected>{{ $kategori->nama_kategori }}</option>
                            @else
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori}}</option>
                            @endif
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Penulis Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="penulis_buku" type="text" placeholder="Masukkan penulis buku"
                            value="{{ old('penulis_buku', $buku->penulis_buku) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Penerbit Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="penerbit_buku" type="text" placeholder="Masukkan penerbit buku"
                            value="{{ old('penerbit_buku', $buku->penerbit_buku) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Tahun Terbit Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="tahun_terbit" type="text" placeholder="Masukkan tahun terbit buku"
                            value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Stock Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="stock_buku" type="number"
                            placeholder="Masukkan stock buku" value="{{ old('stock_buku', $buku->stock_buku) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <h5 class="col-sm-12 col-md-2 col-form-label" for="gambar">Gambar Buku</h5>
                    <div class="custom-file col-sm-12 col-md-10">
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
                        <input type="hidden" name="gambarLama" value="{{ $buku->gambar_buku }}">

                        @if ($buku->gambar_buku)
                        <img src="{{ asset('storage/' . $buku->gambar_buku) }}" class="img-preview img-fluid" width="200">
                        @else
                        <img class="img-preview img-fluid" width="200">
                        @endif

                    </div>
                </div>
                <div class="text-center">
                    <a href="/buku" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-success">Update</button>
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
