<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posyandu;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use App\Models\JadwalKegiatan;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('updated_at', 'desc')->get();
        return view('backend.v_user.index', [
            'judul' => 'Data User',
            'index' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posyandus = Posyandu::all();
        return view('backend.v_user.create', [
            'judul' => 'Tambah User',
            'posyandus' => $posyandus,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validasi inputan form
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|max:255|email|unique:user',
            'role' => 'required',
            'hp' => 'required|min:10|max:13',
            'password' => 'required|min:4|confirmed',
            'foto' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
            'posyandu_id' => 'required|exists:posyandus,id', // Menambahkan validasi untuk posyandu_id
        ], $messages = [
            'foto.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'foto.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.'
        ]);

        // Set default status
        $validatedData['status'] = 0;

        // Menyimpan foto jika ada
        if ($request->file('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $originalFileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
            $directory = 'storage/img-user/';

            // Simpan gambar dengan ukuran yang ditentukan
            ImageHelper::uploadAndResize($file, $directory, $originalFileName, 385, 400);

            // Simpan nama file gambar di database
            $validatedData['foto'] = $originalFileName;
        }

        // Proses password dengan aturan keamanan yang ditentukan
        $password = $request->input('password');
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/';
        if (preg_match($pattern, $password)) {
            $validatedData['password'] = Hash::make($validatedData['password']);

            // Menambahkan posyandu_id yang dipilih pengguna ke dalam data
            $validatedData['posyandu_id'] = $request->input('posyandu_id'); // Menyimpan posyandu_id yang dipilih

            // Membuat user baru dengan data yang telah tervalidasi
            User::create($validatedData);

            return redirect()->route('backend.user.index')->with('success', 'Data berhasil tersimpan');
        } else {
            return redirect()->back()->withErrors(['password' => 'Password harus terdiri dari kombinasi huruf besar, huruf kecil, angka, dan simbol karakter.']);
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil data user berdasarkan ID
        $user = User::findOrFail($id);

        // Ambil semua data Pos Yandu
        $posyandus = Posyandu::all();

        // Kirim data user dan pos_yandus ke view
        return view('backend.v_user.edit', [
            'judul' => 'Ubah User',
            'edit' => $user,
            'posYandus' => $posyandus, // Data Pos Yandu
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        // Validasi data
        $rules = [
            'nama' => 'required|max:255',
            'role' => 'required',
            'status' => 'required',
            'hp' => 'required|min:10|max:13',
            'foto' => 'image|mimes:jpeg,jpg,png,gif|file|max:1024',
            'posyandu_id' => 'required|exists:posyandus,id', // Validasi posyandu_id
        ];

        $messages = [
            'foto.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
            'foto.max' => 'Ukuran file gambar Maksimal adalah 1024 KB.',
            'posyandu_id.required' => 'Pos Yandu harus dipilih.',
            'posyandu_id.exists' => 'Pos Yandu yang dipilih tidak valid.',
        ];

        // Validasi input
        $validatedData = $request->validate($rules, $messages);

        // Jika ada foto yang diupload
        if ($request->file('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto && file_exists(public_path('storage/img-user/' . $user->foto))) {
                unlink(public_path('storage/img-user/' . $user->foto));
            }

            // Proses simpan foto baru
            $file = $request->file('foto');
            $filename = date('YmdHis') . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $directory = 'storage/img-user/';
            ImageHelper::uploadAndResize($file, $directory, $filename, 385, 400);

            // Simpan nama file baru ke database
            $validatedData['foto'] = $filename;
        }

        // Update data user dengan data yang telah divalidasi
        $user->update($validatedData);

        return redirect()->route('backend.user.index')->with('success', 'Data berhasil diperbaharui');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $user = User::findOrFail($id);
        if ($user->foto) {
            $oldImagePath = public_path('storage/img-user/') . $user->foto;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $user->delete();
        return redirect()->route('backend.user.index')->with('success', 'Data berhasil dihapus');
    }

    public function formUser()
    {
        return view('backend.v_user.form', [
            'judul' => 'Laporan Data User',
        ]);
    }

    public function cetakUser(Request $request)
    {
        // Menambahkan aturan validasi
        $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
        ], [
            'tanggal_awal.required' => 'Tanggal Awal harus diisi.',
            'tanggal_akhir.required' => 'Tanggal Akhir harus diisi.',
            'tanggal_akhir.after_or_equal' => 'Tanggal Akhir harus lebih besar atau sama dengan Tanggal Awal.',
        ]);

        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');

        $query =  User::whereBetween('created_at', [$tanggalAwal, $tanggalAkhir])
            ->orderBy('id', 'desc');

        $user = $query->get();
        return view('backend.v_user.cetak', [
            'judul' => 'Laporan User',
            'tanggalAwal' => $tanggalAwal,
            'tanggalAkhir' => $tanggalAkhir,
            'cetak' => $user
        ]);
    }

    public function showUserList()
    {
        $users = User::orderBy('updated_at', 'desc')->get();
        return view('kader', [
            'judul' => 'Data User',
            'users' => $users
        ]);
    }
}
