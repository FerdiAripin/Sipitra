<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokumentasiKegiatan;
use Illuminate\Support\Facades\Storage;

class DokumentasiKegiatanController extends Controller
{
    public function index()
    {
        $dokumentasi = DokumentasiKegiatan::with('user')->get();
        return view('backend.dokumentasi.index', compact('dokumentasi'));
    }

    public function create()
    {
        return view('backend.dokumentasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file' => 'required|file|mimes:jpg,png,mp4|max:20480', // 20MB max size
        ]);

        // Simpan file
        $file = $request->file('file')->store('uploads/dokumentasi', 'public');

        DokumentasiKegiatan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $file,
            'user_id' => auth()->id(), // Menyimpan siapa yang meng-upload
        ]);

        return redirect()->route('backend.dokumentasi.index')->with('success', 'Dokumentasi berhasil ditambahkan');
    }

    public function edit(DokumentasiKegiatan $dokumentasi)
    {
        return view('backend.dokumentasi.edit', compact('dokumentasi'));
    }

    public function update(Request $request, DokumentasiKegiatan $dokumentasi)
    {
        $request->validate([
            'file' => 'nullable|file|mimes:jpg,jpeg,png,mp4|max:10240',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('file')) {
            // Jika file baru di-upload, hapus file lama dan simpan file baru
            $dokumentasi->file = $request->file('file')->store('dokumentasi');
        }

        $dokumentasi->deskripsi = $request->deskripsi;
        $dokumentasi->save();

        return redirect()->route('backend.dokumentasi.index')->with('success', 'Dokumentasi berhasil diperbarui');
    }

    public function destroy(DokumentasiKegiatan $dokumentasi)
    {
        Storage::disk('public')->delete($dokumentasi->file);
        $dokumentasi->delete();

        return redirect()->route('backend.dokumentasi.index')->with('success', 'Dokumentasi berhasil dihapus');
    }

    public function showForVisitors()
    {
        // Mengambil semua data jadwal kegiatan
        $dokumentasi = DokumentasiKegiatan::all();

        // Mengarahkan ke view untuk pengunjung dan mengirimkan data jadwal
        return view('dokumentasi', compact('dokumentasi'));
    }
}
