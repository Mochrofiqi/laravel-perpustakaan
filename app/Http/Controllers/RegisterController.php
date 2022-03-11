<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('utama.register');

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|email|unique:users',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success', 'Registration successfully!');

        return redirect('/login')->with('success', 'Registration successfully!');
    }
}
