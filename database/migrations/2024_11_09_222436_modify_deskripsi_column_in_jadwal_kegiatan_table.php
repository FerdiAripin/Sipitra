<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyDeskripsiColumnInJadwalKegiatanTable extends Migration
{
    public function up()
    {
        Schema::table('jadwal_kegiatan', function (Blueprint $table) {
            // Ubah kolom 'deskripsi' menjadi nullable
            $table->text('deskripsi')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('jadwal_kegiatan', function (Blueprint $table) {
            // Kembalikan kolom 'deskripsi' menjadi tidak nullable
            $table->text('deskripsi')->nullable(false)->change();
        });
    }
}
