@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">

        <!-- horizontal Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="text-center">
                    <h4 class="text-blue h3">Tambah Data Peminjaman</h4>
                </div>
            </div>
            <form action="/peminjaman" method="POST">
                @csrf

                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Kode Peminjaman</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="kode_peminjaman" type="text" placeholder="Masukkan kode peminjaman">
                        @error('kode_peminjaman')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Nama User</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="user_id" >
                            <option selected>Pilih User</option>

                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->nama }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Nama Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="buku_id" >
                            <option selected>Pilih Buku</option>

                            @foreach ($bukus as $buku)
                                <option value="{{ $buku->id }}">{{ $buku->kode_buku }}, {{ $buku->nama_buku }}, {{ $buku->kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                        @error('buku_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Tanggal Pengembalian</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="tanggal_pengembalian" type="text" placeholder="Masukkan tanggal pengembalian">
                        @error('tanggal_pengembalian')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Status</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="status" >
                            <option selected>Pilih Status</option>
                            <option value="Belum Dikembalikan">Belum Dikembalikan</option>
                            <option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
                        </select>
                        @error('status')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Keterangan</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="keterangan" >
                            <option selected>Pilih Keterangan</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                            <option value="Tidak Telat">Tidak Telat</option>
                            <option value="Telat">Telat</option>
                        </select>
                        @error('keterangan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                    <br>
                <div class="text-center">
                    <a href="/peminjaman" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
