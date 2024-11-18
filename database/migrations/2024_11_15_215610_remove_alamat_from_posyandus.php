<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveAlamatFromPosyandus extends Migration
{
    /**
     * Jalankan migration untuk menghapus kolom 'alamat' dari tabel 'posyandus'.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posyandus', function (Blueprint $table) {
            $table->dropColumn('alamat'); // Menghapus kolom 'alamat'
        });
    }

    /**
     * Membatalkan perubahan jika diperlukan.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posyandus', function (Blueprint $table) {
            $table->string('alamat'); // Menambahkan kembali kolom 'alamat' jika rollback
        });
    }
}
