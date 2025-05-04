<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $fillable = ['buku_id', 'diterima_oleh', 'jumlah', 'tanggal', 'catatan'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function Pengguna()
    {
        return $this->belongsTo(User::class);
    }
}
