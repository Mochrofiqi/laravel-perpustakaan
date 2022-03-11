@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">

        <!-- Checkbox select Datatable End -->
        <!-- Export Datatable start -->
        <div class="card-box mb-20">
            <div class="pl-20 pt-20 text-center">
                <h4 class=" text-black text-center h2">Data Kategori Buku</h4>
            </div>
            <hr class="bg-secondary">
            <div class="pl-20 pb-10 pr-20">
                <a href="/kategori/create" class="btn btn-success"><strong>Tambah Data Kategori Buku</strong></a>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-3 pt-2">
                    <form action="/kategori">
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
                            <th>Kode Kategori Buku</th>
                            <th>Nama Kategori Buku</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoris as $kategori)
                        <tr>
                            <td class="table-plus">{{ $loop->iteration }}</td>
                            <td>{{ $kategori->kode_kategori }}</td>
                            <td>{{ $kategori->nama_kategori }}</td>
                            <td>
                                <a href="/kategori/{{ $kategori->id }}/edit" class="btn btn-warning">Edit</a>

                                <form class="d-inline-block" action="/kategori/{{ $kategori->id }}" method="POST">
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
