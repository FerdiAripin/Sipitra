<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    public function show($posyanduId)
    {
        // Ambil data user berdasarkan posyandu_id
        $users = User::where('posyandu_id', $posyanduId)->get();

        // Ambil data posyandu berdasarkan posyanduId (optional, untuk tampilan header posyandu)
        $posyandu = Posyandu::findOrFail($posyanduId);

        // Kirim data ke view
        return view('posyandu.show', compact('users', 'posyandu'));
    }
}
