<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Whoops\Run;

class Peminjaman extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
