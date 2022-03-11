@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">

        <!-- horizontal Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="text-center">
                    <h4 class="text-blue h3">Edit Data Peminjaman</h4>
                </div>
            </div>
            <form action="/peminjaman/{{ $peminjaman->id }}" method="POST">
                @method('put')
                @csrf

                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Kode Peminjaman</p>
                    <div class="col-sm-12 col-md-10">
                        <input readonly class="form-control" name="kode_peminjaman" type="text" placeholder="Masukkan kode peminjaman"
                        value="{{ old('kode_peminjaman', $peminjaman->kode_peminjaman) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Nama User</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="user_id" value="{{ old('user_id', $peminjaman->user->id) }}">
                            <option selected>Pilih User</option>

                            @foreach ($users as $user)
                                @if (old('user_id', $peminjaman->user_id) == $user->id)
                                    <option value="{{ $user->id }}" selected>{{ $user->nama }}</option>
                                @else
                                    <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Nama Buku</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="buku_id" value="{{ old('buku_id', $peminjaman->buku->id) }}" >
                            <option selected>Pilih Buku</option>

                            @foreach ($bukus as $buku)
                                @if (old('buku_id', $peminjaman->buku_id) == $buku->id)
                                    <option value="{{ $buku->id }}" selected>{{ $buku->kode_buku }}, {{ $buku->nama_buku }}, {{ $buku->kategori->nama_kategori }}</option>
                                @else
                                    <option value="{{ $buku->id }}" >{{ $buku->kode_buku }}, {{ $buku->nama_buku }}, {{ $buku->kategori->nama_kategori }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Tanggal Pengembalian</p>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="tanggal_pengembalian" type="text" placeholder="Masukkan tanggal pengembalian"
                            value="{{ old('tanggal_pengembalian', $peminjaman->tanggal_pengembalian) }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Status</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="status" value="{{ old('status', $peminjaman->status) }}">
                            <option selected>Pilih Status</option>

                            @if (old('status', $peminjaman->status)== "Belum Dikembalikan")
                                <option value="Belum Dikembalikan" selected>Belum Dikembalikan</option>
                                <option value="Sudah Dikembalikan" >Sudah Dikembalikan</option>
                            @else
                                <option value="Belum Dikembalikan" >Belum Dikembalikan</option>
                                <option value="Sudah Dikembalikan" selected>Sudah Dikembalikan</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <p class="col-sm-12 col-md-2 col-form-label h6">Keterangan</p>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="keterangan" value="{{ old('status', $peminjaman->keterangan) }}">
                            <option selected>Pilih Keterangan</option>

                            @if (old('keterangan', $peminjaman->keterangan)== "Tidak Ada")
                                <option value="Tidak Ada" selected>Tidak Ada</option>
                                <option value="Tidak Telat">Tidak Telat</option>
                                <option value="Telat">Telat</option>
                            @elseif (old('keterangan', $peminjaman->keterangan)== "Tidak Telat")
                                <option value="Tidak Ada">Tidak Ada</option>
                                <option value="Tidak Telat" selected>Tidak Telat</option>
                                <option value="Telat">Telat</option>
                            @else
                                <option value="Tidak Ada">Tidak Ada</option>
                                <option value="Tidak Telat">Tidak Telat</option>
                                <option value="Telat" selected>Telat</option>
                            @endif
                        </select>
                    </div>
                </div>
                    <br>
                <div class="text-center">
                    <a href="/peminjaman" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
