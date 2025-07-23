<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;

    public $incrementing = true;
    protected $table = 'berita';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'keterangan',
        'tanggal',
        'gambar'
    ];

    protected $appends = ['gambar_thumbnail'];

    public function getGambarThumbnailAttribute()
    {
        $url = $this->gambar;

        if (empty($url)) {
            return null;
        }

        if (preg_match('/\/file\/d\/([^\/]+)/', $url, $matches)) {
            $fileId = $matches[1];
        } elseif (preg_match('/id=([^&]+)/', $url, $matches)) {
            $fileId = $matches[1];
        } elseif (preg_match('/\/uc\?export=view&id=([^&]+)/', $url, $matches)) {
            $fileId = $matches[1];
        } else {
            return $url;
        }

        return "https://drive.google.com/thumbnail?id=".$fileId."&sz=w1000";
    }

    public function getTanggalFormattedAttribute()
    {
        return \Carbon\Carbon::parse($this->tanggal)->isoFormat('D MMMM Y');
    }
}
