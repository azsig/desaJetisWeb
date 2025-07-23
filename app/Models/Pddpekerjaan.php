<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pddpekerjaan extends Model
{
    use HasFactory;

    protected $table = 'tabel_pddpekerjaan';
    protected $primaryKey = 'id';
    protected $fillable = ['pekerjaan', 'jumlah'];

    public $timestamps = false;
}
