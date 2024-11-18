<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posyandu extends Model
{
    use HasFactory;

    protected $table = 'posyandus';

    protected $fillable = ['nama', 'alamat'];

    // app/Models/PosYandu.php

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
