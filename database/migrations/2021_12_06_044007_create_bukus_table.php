<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->char('kode_buku', 5)->unique();
            $table->string('nama_buku');
            $table->foreignId('kategori_id');
            $table->string('penulis_buku');
            $table->string('penerbit_buku');
            $table->string('tahun_terbit');
            $table->integer('stock_buku');
            $table->string('gambar_buku')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
    }
}
