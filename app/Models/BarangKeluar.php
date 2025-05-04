<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $fillable = ['buku_id', 'siswa_id', 'jumlah', 'alasan', 'denda', 'tanggal'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
