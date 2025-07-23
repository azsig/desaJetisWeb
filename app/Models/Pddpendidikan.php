<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pddpendidikan extends Model
{
    use HasFactory;

    protected $table = 'tabel_pddpendidikan';
    protected $primaryKey = 'id';
    protected $fillable = ['pendidikan', 'jumlah'];

    public $timestamps = false;
}
