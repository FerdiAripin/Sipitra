<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\JadwalKegiatan;
use App\Notifications\JadwalKegiatanDitambahkan;

class JadwalKegiatanController extends Controller
{
    public function index()
    {
        // Mengambil semua jadwal kegiatan
        $jadwal = JadwalKegiatan::all();

        // Menghitung jumlah kegiatan yang sudah ditambahkan
        $jumlahKegiatan = JadwalKegiatan::count();

        // Mengirimkan data jumlah kegiatan ke view
        return view('backend.jadwal.index', compact('jadwal', 'jumlahKegiatan'));
    }

    public function create()
    {
        return view('backend.jadwal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'required|date|after_or_equal:waktu_mulai',
            'deskripsi' => 'nullable|string',
        ]);

        // Mengonversi waktu_mulai dan waktu_selesai ke format Carbon
        $waktuMulai = Carbon::parse($request->waktu_mulai);
        $waktuSelesai = Carbon::parse($request->waktu_selesai);


        JadwalKegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'lokasi' => $request->lokasi,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'deskripsi' => $request->deskripsi,
            'user_id' => auth()->id(), // Menyimpan user yang menambahkan
        ]);

        return redirect()->route('backend.jadwal.index')->with('success', 'Jadwal Kegiatan berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Temukan jadwal kegiatan berdasarkan ID
        $jadwal = JadwalKegiatan::findOrFail($id);

        // Tampilkan view untuk mengedit jadwal kegiatan, sambil mengirimkan data jadwal ke view
        return view('backend.jadwal.edit', compact('jadwal'));
    }

    // Method untuk mengupdate data jadwal kegiatan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'required|date|after_or_equal:waktu_mulai',
            'deskripsi' => 'nullable|string',
        ]);

        $jadwal = JadwalKegiatan::findOrFail($id);
        $jadwal->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'lokasi' => $request->lokasi,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('backend.jadwal.index')->with('success', 'Jadwal Kegiatan berhasil diperbarui');
    }

    // Method untuk menghapus data jadwal kegiatan
    public function destroy($id)
    {
        $jadwal = JadwalKegiatan::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('backend.jadwal.index')->with('success', 'Jadwal Kegiatan berhasil dihapus');
    }

    public function showForVisitors()
    {
        // Mengambil semua data jadwal kegiatan
        $jadwal = JadwalKegiatan::all();

        // Mengarahkan ke view untuk pengunjung dan mengirimkan data jadwal
        return view('jadwal', compact('jadwal'));
    }
}
