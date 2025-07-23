<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pddrw extends Model
{
    use HasFactory;

    protected $table = 'tabel_pddrw';
    protected $primaryKey = 'id'; 
    protected $fillable = ['rw', 'rt', 'lakilaki', 'perempuan', 'jumlah'];

    public $timestamps = false;
}
