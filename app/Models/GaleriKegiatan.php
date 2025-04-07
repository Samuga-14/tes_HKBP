<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriKegiatan extends Model
{
    use HasFactory;
    protected $table = 'galeri_kegiatans';
    protected $fillable = ['judul', 'deskripsi', 'gambar', 'video', 'tanggal_unggah'];
}
