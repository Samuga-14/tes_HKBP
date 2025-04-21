<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'beritas'; // supaya Laravel gak nebak 'berita' jadi 'beritum'

    protected $fillable = ['judul', 'deskripsi', 'gambar', 'tanggal_publikasi'];

    public function getRouteKeyName()
{
    return 'id';
}

}
