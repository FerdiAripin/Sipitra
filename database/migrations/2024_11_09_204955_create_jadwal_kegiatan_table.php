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
    Schema::create('jadwal_kegiatan', function (Blueprint $table) {
        $table->id();
        $table->string('nama_kegiatan');
        $table->string('lokasi');
        $table->timestamp('waktu_mulai');
        $table->timestamp('waktu_selesai');
        $table->text('deskripsi');
        $table->unsignedBigInteger('user_id');
        // Sesuaikan dengan nama tabel yang benar (user) dan referensikan kolom id
        $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kegiatan');
    }
};
