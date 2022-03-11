@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="text-center">
                    <h4 class="text-blue h3">Edit Data User</h4>
                </div>
            </div>
            <form  action="/user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Keterangan User</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="level" id="level">
                            <option value="">Pilih</option>

                                @if (old('level', $user->level)== "Admin")
                                    <option value="Admin" selected>Admin</option>
                                    <option value="Anggota" >Anggota</option>
                                @else
                                    <option value="Admin" >Admin</option>
                                    <option value="Anggota" selected>Anggota</option>
                                @endif

                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Nama Lengkap</p>
                    <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nama" type="text"
                        placeholder="Masukkan nama lengkap" value="{{ old('nama', $user->nama) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Jenis Kelamin</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">Pilih</option>

                                @if (old('jenis_kelamin', $user->jenis_kelamin)== "Perempuan")
                                    <option value="Laki-Laki" >Laki-Laki</option>
                                    <option value="Perempuan" selected>Perempuan</option>
                                @else
                                    <option value="Laki-Laki" selected>Laki-Laki</option>
                                    <option value="Perempuan" >Perempuan</option>
                                @endif

                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Alamat</p>
                    <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="alamat" type="text"
                        placeholder="Masukkan alamat" value="{{ old('alamat', $user->alamat) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Telepon</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="telepon" type="number"
                            placeholder="Masukkan telepon" value="{{ old('telepon', $user->telepon) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Email Address</p>
                    <div class="col-sm-12 col-md-10">
                        <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Username</p>
                    <div class="col-sm-12 col-md-10">
                        <input type="text" class="form-control" name="username" value="{{ old('username', $user->username) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6" for="foto">Foto</p>
                    <div class="custom-file col-sm-12 col-md-10 ">
                        <input type="file" id="foto" name="foto"
                            class="custom-file-input form-control @error('foto') is-invalid @enderror"
                            onchange="previewImage()">
                            <label class="custom-file-label"> Pilih file foto</label>
                            @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-12 col-md-10 image" style="margin-left: 200px !important;">
                        <input type="hidden" name="fotoLama" value="{{ $user->foto }}">

                        @if ($user->foto)
                        <img src="{{ asset('storage/' . $user->foto) }}" class="img-preview img-fluid" width="200">
                        @else
                        <img class="img-preview img-fluid" width="200">
                        @endif

                    </div>
                </div>
                <div class="text-center">
                    <a href="/user" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-success">Update</button>
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
