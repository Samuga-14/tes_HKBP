<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturKepengurusan extends Model
{
    use HasFactory;
    protected $table = 'struktur_kepengurusans';
    protected $fillable = ['nama', 'jabatan'];
}
