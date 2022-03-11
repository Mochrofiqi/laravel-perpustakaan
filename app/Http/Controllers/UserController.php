<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'asc');

        if(request('search')){
            $user->where('nama', 'like', '%' . request('search') . '%');
        }
        return view('pengguna.data-pengguna', [
            'title' => 'Data User',
            'users' => $user->get()
        ]);
    }
    public function create()
    {
        return view('pengguna.tambah-pengguna', [
            'title' => 'Tambah Data User'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'level' => 'required',
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'foto' => 'image|file|max:5120'

        ]);
        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto-user');
        }

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/user')->with('success', 'Data user berhasil ditambahkan');
    }
    public function edit(User $user)
    {
        return view('pengguna.edit-pengguna', [
            'title' => 'Edit Data User',
            'user' => $user
        ]);
    }
    public function update( Request $request, User $user)
    {
        $rules = [
            'level' => 'required',
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'username' => 'required',
            'foto' => 'image|file|max:5120'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $validatedData['foto'] = $request->file('foto')->store('foto-user');
        }

        User::where('id', $user->id)->update($validatedData);
        return redirect('/user')->with('success', 'Data user berhasil diupdate');
    }
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/user');
    }
}
