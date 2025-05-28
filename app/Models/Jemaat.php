<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jemaat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'status_pernikahan',
        // 'nama_pasangan', // Dihapus
        // 'jumlah_anak',   // Dihapus
        // 'nama_anak'      // Dihapus (ini sepertinya tidak terpakai di migrasi awalmu juga)
    ];

    // Casting untuk tanggal lahir agar otomatis jadi objek Carbon
    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    /**
     * Scope untuk query jemaat yang berulang tahun hari ini
     */
    public function scopeUlangTahunHariIni($query)
    {
        return $query->whereMonth('tanggal_lahir', now()->month)
                    ->whereDay('tanggal_lahir', now()->day)
                    ->orderBy('nama');
    }

    /**
     * Scope untuk query jemaat yang berulang tahun bulan ini
     */
    public function scopeUlangTahunBulanIni($query)
    {
        return $query->whereMonth('tanggal_lahir', now()->month)
                    ->orderByRaw('DAY(tanggal_lahir)');
    }

    /**
     * Get age attribute
     */
    public function getUmurAttribute()
    {
        // Tambahkan pengecekan jika tanggal_lahir null untuk menghindari error
        if ($this->tanggal_lahir) {
            return Carbon::parse($this->tanggal_lahir)->age;
        }
        return null;
    }

    // Relasi anak dihapus karena kolom jumlah_anak dihapus
    // public function anak()
    // {
    //     return $this->hasMany(Anak::class);
    // }
}