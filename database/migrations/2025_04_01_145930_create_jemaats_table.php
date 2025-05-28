<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jemaats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir'); // Sebaiknya tidak nullable jika ini data penting
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('alamat');
            // Mengubah opsi dan menghapus 'Janda', 'Duda' karena 'Cerai' bisa mencakup itu
            // atau bisa juga ditambahkan jika memang sangat spesifik dibutuhkan.
            // Untuk saat ini sesuai permintaan: Menikah, Belum Menikah, Cerai
            $table->enum('status_pernikahan', ['Belum Menikah', 'Menikah', 'Cerai']);
            // $table->string('nama_pasangan')->nullable(); // Dihapus
            // $table->integer('jumlah_anak')->default(0); // Dihapus
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jemaats');
    }
};