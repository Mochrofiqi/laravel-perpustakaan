<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBukuRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateBukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::orderBy('id', 'asc');

        if(request('search')){
            $buku->where('nama_buku', 'like', '%' . request('search') . '%');
        }
        return view('buku.data-buku', [
            'title' => 'Data Buku',
            'bukus' => $buku->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.tambah-buku', [
            'title' => 'Tambah Data Buku',
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_buku' => 'required|unique:bukus',
            'nama_buku' => 'required|max:255',
            'kategori_id' => 'required',
            'penulis_buku' => 'required|max:255',
            'penerbit_buku' => 'required|max:255',
            'tahun_terbit' => 'required',
            'stock_buku' => 'required',
            'gambar_buku' => 'image|file|max:5120'

        ]);

        if ($request->file('gambar_buku')) {
            $validatedData['gambar_buku'] = $request->file('gambar_buku')->store('gambar-buku');
        }

        Buku::create($validatedData);
        return redirect('/buku')->with('success', 'Data buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        return view('buku.edit-buku', [
            'title' => 'Edit Data Buku',
            'buku' => $buku,
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBukuRequest  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Buku $buku)
    {
        $rules = [
            'nama_buku' => 'required|max:255',
            'kategori_id' => 'required',
            'penulis_buku' => 'required|max:255',
            'penerbit_buku' => 'required|max:255',
            'tahun_terbit' => 'required',
            'stock_buku' => 'required',
            'gambar_buku' => 'image|file|max:5120'
        ];

        if ($request->kode_buku != $buku->kode_buku) {
            $rules['kode_buku'] = 'required|unique:bukus';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('gambar_buku')) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $validatedData['gambar_buku'] = $request->file('gambar_buku')->store('gambar-buku');
        }

        Buku::where('id', $buku->id)->update($validatedData);
        return redirect('/buku')->with('success', 'Data buku berhasil diupdate');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);
        return redirect('/buku');
    }
}
