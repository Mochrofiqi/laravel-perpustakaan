<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index() {
        $peminjaman = Peminjaman::where('status', 'Sudah Dikembalikan');

        if(request('search')){
            $peminjaman->where('kode_peminjaman', 'like', '%' . request('search') . '%');
        }
        return view('pengembalian.data-pengembalian', [
            'title' => 'Data Pengembalian',
            'peminjamans' => $peminjaman->get()
        ]);
    }

}
