<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyGambarNullableInBeritasTable extends Migration
{
    public function up()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->string('gambar')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->string('gambar')->nullable(false)->change(); // jika ingin rollback
        });
    }
}
