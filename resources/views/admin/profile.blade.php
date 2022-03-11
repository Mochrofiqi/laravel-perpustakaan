@extends('admin.layouts.master')

@section('content')

        <div class="card-box pd-20 height-100-p mb-30">
            <div class="section-title text-center">
                <h2 class="pb-20">Akun Profile</h2>
            </div>

            <div class="row justify-content-center p-2">
                <div class="col-md-10">
                    <table class="table table-bordered border-dark">
                        <thead class="table-dark text-center fs-6">
                            <tr>
                                <th>Keterangan</th>
                                <th>Identitas Profile</th>
                            </tr>
                        </thead>
                        <tbody class="text-center fs-6">
                            <tr>
                                <td>Foto</td>
                                <td>
                                    @if (auth()->user()->foto)
                                        <img src="{{ asset('storage/' . auth()->user()->foto ) }}" alt="image" width="50" class="m-1">
                                    @else
                                        <img src="/img/slide/kosong.png" alt="image" width="50" class="m-1">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{ auth()->user()->username }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ auth()->user()->nama }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ auth()->user()->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ auth()->user()->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td>{{ auth()->user()->telepon }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ auth()->user()->email }}</td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="/user/{{ auth()->user()->id }}/edit" class="btn btn-warning p-2">Edit Profile</a>
                    </div>
                </div>
            </div>
</div>

@endsection
