<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->string('kode_peminjaman', 5)->unique();
            $table->foreignId('user_id');
            $table->foreignId('buku_id');
            $table->date('tanggal_pengembalian');
            $table->enum('status', ['Sudah Dikembalikan', 'Belum Dikembalikan']);
            $table->enum('keterangan', ['Tidak Ada', 'Tidak Telat', 'Telat']);
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
        Schema::dropIfExists('peminjamen');
    }
}
