<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pddusia extends Model
{
    use HasFactory;

    protected $table = 'tabel_pddusia';
    protected $primaryKey = 'id';
    protected $fillable = ['umur', 'lakilaki', 'perempuan', 'jumlah'];

    public $timestamps = false;
}
