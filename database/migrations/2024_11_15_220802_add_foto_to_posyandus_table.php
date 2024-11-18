<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('posyandus', function (Blueprint $table) {
            $table->string('foto')->nullable()->after('deskripsi'); // Menambahkan kolom 'foto' setelah kolom 'deskripsi'
        });
    }

    public function down()
    {
        Schema::table('posyandus', function (Blueprint $table) {
            $table->dropColumn('foto'); // Menghapus kolom 'foto' saat rollback
        });
    }
};
