<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'struktur_organisasi';
    protected $fillable = ['nama', 'jabatan', 'kelompok'];

    public function scopePemerintahan($query)
    {
        return $query->where('kelompok', 'pemerintahan');
    }

    public function scopeBpd($query)
    {
        return $query->where('kelompok', 'bpd');
    }
}
