<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DokumentasiKegiatan extends Model
{
    protected $table = 'dokumentasi_kegiatan';
    protected $fillable = ['judul', 'deskripsi', 'file', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
