<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('jemaats', function (Blueprint $table) {
            $table->text('nama_anak')->nullable()->after('jumlah_anak');
        });
    }

    public function down()
    {
        Schema::table('jemaats', function (Blueprint $table) {
            $table->dropColumn('nama_anak');
        });
    }
};

