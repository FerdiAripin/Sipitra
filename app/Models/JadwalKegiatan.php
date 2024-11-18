<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalKegiatan extends Model
{
    protected $table = 'jadwal_kegiatan';
    protected $fillable = [
        'nama_kegiatan', 'lokasi', 'waktu_mulai', 'waktu_selesai', 'deskripsi', 'user_id'
    ];

    // Tambahkan casting agar waktu_mulai dan waktu_selesai dianggap sebagai datetime
    protected $casts = [
        'waktu_mulai' => 'datetime',
        'waktu_selesai' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
