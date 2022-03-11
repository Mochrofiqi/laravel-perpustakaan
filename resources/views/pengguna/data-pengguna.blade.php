@extends('admin.layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">

        <!-- Checkbox select Datatable End -->
        <!-- Export Datatable start -->
        <div class="card-box mb-20">
            <div class="pl-20 pt-20 text-center">
                <h4 class="text-black text-center h2">Data User</h4>
            </div>
            <hr class="bg-secondary">
            <div class="pl-20 pb-10 pr-20">
                <a href="/user/create" class="btn btn-success"><strong>Tambah Data User</strong></a>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-3 pt-2">
                    <form action="/user">
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
                            <th>Keterangan</th>
                            <th>Nama User</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Foto</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="table-plus">{{ $loop->iteration }}</td>
                                <td>{{ $user->level }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->jenis_kelamin }}</td>
                                <td>{{ $user->alamat }}</td>
                                <td>{{ $user->telepon }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->username }}</td>
                                <td>

                                    @if ($user->foto)
                                    <img src="{{ asset('storage/' . $user->foto) }}" alt="image" width="50">
                                    @else
                                    <img src="/img/slide/kosong.png" alt="image" width="50">
                                    @endif

                                </td>
                                <td>
                                    <a href="/user/{{ $user->id }}/edit" class="btn btn-warning">Edit</a>
                                    <form class="d-inline-block" action="/user/{{ $user->id }}" method="POST">
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
