<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index() {
        $peminjaman = Peminjaman::where('status', 'Belum Dikembalikan');

        if(auth()->user()->level == 'Anggota'){
            $peminjaman = Peminjaman::where('kode_peminjaman', auth()->user()->id)->get();
        }

        if(request('search')){
            $peminjaman->where('kode_peminjaman', 'like', '%' . request('search') . '%');
        }
        return view('peminjaman.data-peminjaman', [
            'title' => 'Data Peminjaman',
            'peminjamans' => $peminjaman->get()
        ]);
    }
    public function create()
    {
        return view('peminjaman.tambah-peminjaman', [
            'title' => 'Tambah Data Peminjaman',
            'users' => User::all(),
            'bukus' => Buku::all()
        ]);
    }
    public function store(Request $request, Buku $buku)
    {
        $validatedData = $request->validate([
            'kode_peminjaman' => 'required',
            'user_id' => 'required',
            'buku_id' => 'required',
            'tanggal_pengembalian' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ]);

        Peminjaman::create($validatedData);
        $pinjamBuku = Buku::where('id', $validatedData['buku_id'])->first();
        $pinjamBuku->stock_buku -= 1;
        $pinjamBuku->update();
        return redirect('/peminjaman')->with('success', 'Data peminjaman berhasil ditambahkan');
    }
    public function edit(Peminjaman $peminjaman)
    {
        return view('peminjaman.edit-peminjaman', [
            'title' => 'Edit Data Peminjaman',
            'peminjaman' =>$peminjaman,
            'users' => User::all(),
            'bukus' => Buku::all()
        ]);
    }
    public function update( Request $request, Peminjaman $peminjaman)
    {
        $rules = [
            'kode_peminjaman' => 'required',
            'user_id' => 'required',
            'buku_id' => 'required',
            'tanggal_pengembalian' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Peminjaman::where('id', $peminjaman->id)->update($validatedData);

        $kembali = Peminjaman::where('id', $peminjaman->id)->first();
        if($kembali->status == 'Sudah Dikembalikan'){
            $pinjamBuku = Buku::where('id', $validatedData['buku_id'])->first();
            $pinjamBuku->stock_buku += 1;
            $pinjamBuku->update();
        }elseif($kembali->status == 'Belum Dikembalikan'){
            $pinjamBuku = Buku::where('id', $validatedData['buku_id'])->first();
            $pinjamBuku->stock_buku -= 1;
            $pinjamBuku->update();
        }

        return redirect('/peminjaman')->with('success', 'Data peminjaman berhasil diupdate');
    }
    public function destroy(Peminjaman $peminjaman)
    {
        Peminjaman::destroy($peminjaman->id);

        if($peminjaman->status == 'Belum Dikembalikan'){
            return redirect('/peminjaman');
        }elseif($peminjaman->status == 'Sudah Dikembalikan'){
            return redirect('/pengembalian');
        }
    }
}
