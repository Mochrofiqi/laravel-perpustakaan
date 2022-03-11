@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">

        <!-- horizontal Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="text-center">
                    <h4 class="text-blue h3">Tambah Data User</h4>
                </div>
            </div>
            <form  action="/user" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Keterangan User</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="level" aria-label="Default select example">
                            <option selected>Pilih</option>
                            <option value="Admin">Admin</option>
                            <option value="Anggota">Anggota</option>
                        </select>
                        @error('level')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Nama Lengkap</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="nama" type="text"
                            placeholder="Masukkan nama lengkap">
                         @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Jenis Kelamin</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="jenis_kelamin" aria-label="Default select example">
                            <option selected>Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Alamat</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="alamat" type="text"
                            placeholder="Masukkan alamat">
                        @error('alamat')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Telepon</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="telepon" type="number"
                            placeholder="Masukkan telepon">
                        @error('telepon')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Email Address</p>
                    <div class="col-sm-12 col-md-10">
                        <input type="email" class="form-control" name="email" placeholder="Masukkan email address">
                        @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Username</p>
                    <div class="col-sm-12 col-md-10">
                        <input type="text" class="form-control" name="username" placeholder="Masukkan username">
                        @error('username')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Password</p>
                    <div class="col-sm-12 col-md-10">
                        <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                        @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6" for="foto">Foto</p>
                    <div class="custom-file col-sm-12 col-md-10 ">
                        <input type="file" id="foto" name="foto"
                            class="custom-file-input form-control @error('foto') is-invalid @enderror"
                            onchange="previewImage()">
                        <label class="custom-file-label">Pilih file foto</label>
                        @error('foto')
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
                    <a href="/user" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script>
        function previewImage(){
            const gambar = document.getElementById('foto');
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
