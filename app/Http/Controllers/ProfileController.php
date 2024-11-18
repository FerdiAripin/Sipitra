<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Tampilkan halaman edit profil
    public function edit()
    {
        $user = Auth::user(); // Mendapatkan data user yang sedang login
        return view('backend.profile.edit', compact('user'));
    }

    // Perbarui data profil
    public function update(Request $request)
{
    // // Validasi input
    // $request->validate([
    //     'name' => 'required|string|max:255',
    //     'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
    //     'password' => 'nullable|confirmed|min:8', // password optional jika tidak diubah
    // ]);

    // $user = Auth::user(); // Mendapatkan data user yang sedang login

    // // Menggunakan update() untuk memperbarui data user
    // $user->update([
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'password' => $request->password ? Hash::make($request->password) : $user->password,
    // ]);

    // return redirect()->route('backend.profile.edit')->with('success', 'Profil berhasil diperbarui');
}

}
