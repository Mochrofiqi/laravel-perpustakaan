@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="card-box mb-20">
            <div class="pl-20 pt-20 text-center">
                <h4 class="text-black text-center h2">Data Peminjaman</h4>
            </div>
            <hr class="bg-secondary">
            <div class="pl-20 pb-10 pr-20">
                <a href="peminjaman/create" class="btn btn-success"><strong>Tambah Data Peminjaman</strong></a>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-3 pt-2">
                    <form action="/peminjaman">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Pencarian.." name="search" id="search" value="{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="pb-20">
                <table class="table hover multiple-select-row data-table-export nowrap fs-6">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">No</th>
                            <th>Kode Peminjaman</th>
                            <th>Nama User</th>
                            <th>Kode Buku</th>
                            <th>Nama Buku</th>
                            <th>Kategori Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjamans as $peminjaman)
                        <tr>
                            <td class="table-plus">{{ $loop->iteration }}</td>
                                <td>{{ $peminjaman->kode_peminjaman }}</td>
                                <td>{{ $peminjaman->user->nama }}</td>
                                <td>{{ $peminjaman->buku->kode_buku }}</td>
                                <td>{{ $peminjaman->buku->nama_buku }}</td>
                                <td>{{ $peminjaman->buku->kategori->nama_kategori }}</td>
                                <td>{{ $peminjaman->created_at }}</td>
                                <td>{{ $peminjaman->tanggal_pengembalian }}</td>
                                <td>{{ $peminjaman->status }}</td>
                                <td>{{ $peminjaman->keterangan }}</td>
                                <td>
                                    <a href="/peminjaman/{{ $peminjaman->id }}/edit" class="btn btn-warning">Edit</a>

                                    <form class="d-inline-block" action="/peminjaman/{{ $peminjaman->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
