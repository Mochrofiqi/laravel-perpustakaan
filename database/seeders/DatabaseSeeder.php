<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'level' => 'Admin',
            'nama' => 'Moch. Rofiqi',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Pasuruan',
            'telepon' => '082334151624',
            'email' => 'rofiqi@gmail.com',
            'username' => 'mochrofiqi',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'level' => 'Anggota',
            'nama' => 'Sinta Yulia',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Malang',
            'telepon' => '082255132788',
            'email' => 'sinta@gmail.com',
            'username' => 'sintayulia',
            'password' => bcrypt('12345678')
        ]);

        Kategori::create([
            'kode_kategori' => 'KD001',
            'nama_kategori' => 'Novel'
        ]);
        Kategori::create([
            'kode_kategori' => 'KD002',
            'nama_kategori' => 'Komik'
        ]);
        Kategori::create([
            'kode_kategori' => 'KD003',
            'nama_kategori' => 'Fiksi'
        ]);

        Buku::create([
            'kode_buku' => 'BK001',
            'nama_buku' => 'Laskar Pelangi',
            'kategori_id' => 1,
            'penulis_buku' => 'Candra Wijaya',
            'penerbit_buku' => 'Buku Sanjaya',
            'tahun_terbit' => '2010',
            'stock_buku' => '20',
        ]);
        Buku::create([
            'kode_buku' => 'BK002',
            'nama_buku' => 'Boruto',
            'kategori_id' => 2,
            'penulis_buku' => 'Kevin Candra',
            'penerbit_buku' => 'Bintang Kasih',
            'tahun_terbit' => '2012',
            'stock_buku' => '30',
        ]);
        Buku::create([
            'kode_buku' => 'BK003',
            'nama_buku' => 'Moon',
            'kategori_id' => 3,
            'penulis_buku' => 'Angel Selina',
            'penerbit_buku' => 'Bintang Abadi',
            'tahun_terbit' => '2019',
            'stock_buku' => '50',
        ]);
    }
}
