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
        Schema::table('galeri_kegiatans', function (Blueprint $table) {
            $table->string('link_google_foto')->nullable();
        });
    }

    public function down()
    {
        Schema::table('galeri_kegiatans', function (Blueprint $table) {
            $table->dropColumn('link_google_foto');
        });
    }
};
