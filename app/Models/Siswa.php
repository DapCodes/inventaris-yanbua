<?php

namespace App\Models;

use App\Models\Peminjaman;
use App\Models\BarangKeluar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama', 'nis', 'kelas'];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function barangKeluars()
    {
        return $this->hasMany(BarangKeluar::class);
    }

}
