<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyPetaColumnOnPosyandusTable extends Migration
{
    public function up()
    {
        Schema::table('posyandus', function (Blueprint $table) {
            $table->text('peta')->change(); // Mengubah tipe kolom 'peta' menjadi TEXT
        });
    }

    public function down()
    {
        Schema::table('posyandus', function (Blueprint $table) {
            $table->string('peta', 255)->change(); // Kembalikan ke VARCHAR(255) jika dibutuhkan
        });
    }
}
