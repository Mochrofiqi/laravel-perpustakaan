<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::orderBy('id', 'asc');

        if(request('search')){
            $kategori->where('nama_kategori', 'like', '%' . request('search') . '%');
        }
        return view('kategori.data-kategori', [
            'title' => 'Data Kategori Buku',
            'kategoris' => $kategori->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.tambah-kategori', [
            'title' => 'Tambah Data Kategori Buku'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKategoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_kategori' => 'required|unique:kategoris',
            'nama_kategori' => 'required|max:255'
        ]);

        Kategori::create($validatedData);
        return redirect('/kategori')->with('success', 'Data kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit-kategori', [
            'title' => 'Ubah Data Kategori Buku',
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKategoriRequest  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $rules = [
            'nama_kategori' => 'required|max:255'
        ];

        if ($request->kode_kategori != $kategori->kode_kategori) {
            $rules['kode_kategori'] = 'required|unique:kategoris';
        }

        $validatedData = $request->validate($rules);

        Kategori::where('id', $kategori->id)->update($validatedData);
        return redirect('/kategori')->with('success', 'Data kategori buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);
        return redirect('/kategori')->with('success', 'Data kategori buku telah dihapus');
    }
}
