<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPetaAndDeskripsiToPosyandus extends Migration
{
    /**
     * Tambahkan kolom baru ke tabel 'posyandus'.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posyandus', function (Blueprint $table) {
            $table->string('peta')->nullable()->after('nama'); // Kolom untuk link Google Maps
            $table->text('deskripsi')->nullable()->after('peta'); // Kolom untuk deskripsi
        });
    }

    /**
     * Hapus kolom yang ditambahkan.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posyandus', function (Blueprint $table) {
            $table->dropColumn(['peta', 'deskripsi']); // Menghapus kolom peta dan deskripsi
        });
    }
}
