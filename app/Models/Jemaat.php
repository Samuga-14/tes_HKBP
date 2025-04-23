<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    use HasFactory;

    protected $fillable = ['nama','tanggal_lahir', 'jenis_kelamin', 'alamat', 'status_pernikahan', 'nama_pasangan', 'jumlah_anak'];
}
