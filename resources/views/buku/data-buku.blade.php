@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="card-box p-20">
            <div class="pl-20 pt-20 text-center">
                <h4 class="text-black text-center h2  ">Data Buku</h4>
            </div>
            <hr class="bg-secondary">
            <div class="p-10">
                <a href="buku/create" class="btn btn-success"><strong>Tambah Data Buku</strong></a>
            </div>

            <div class="row justify-content-end">
                <div class="col-md-3 pt-2">
                    <form action="/buku">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Pencarian.." name="search" id="search" value="{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-10">
                <table class="table hover multiple-select-row data-table-export nowrap fs-6 ">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">No</th>
                            <th>Kode Buku</th>
                            <th>Nama Buku</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Stock</th>
                            <th>Gambar</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bukus as $buku)
                        <tr>
                            <td class="table-plus">{{ $loop->iteration }}</td>
                            <td>{{ $buku->kode_buku }}</td>
                            <td>{{ $buku->nama_buku }}</td>
                            <td>{{ $buku->kategori->nama_kategori }}</td>
                            <td>{{ $buku->penulis_buku }}</td>
                            <td>{{ $buku->penerbit_buku }}</td>
                            <td>{{ $buku->tahun_terbit }}</td>
                            <td>{{ $buku->stock_buku }}</td>
                            <td>

                                @if ($buku->gambar_buku)
                                <img src="{{ asset('storage/' . $buku->gambar_buku) }}" alt="image" width="50">
                                @else
                                <img src="/img/slide/kosong.png" alt="image" width="50">
                                @endif

                            </td>
                            <td>
                                <a href="/buku/{{ $buku->id }}/edit" class="btn btn-warning">Edit</a>

                                <form class="d-inline-block" action="/buku/{{ $buku->id }}" method="POST">
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
