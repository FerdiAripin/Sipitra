@extends('backend.v_layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Hapus Jadwal Kegiatan</h2>
    <p>Apakah Anda yakin ingin menghapus jadwal kegiatan berikut?</p>
    <ul>
        <li>Nama Kegiatan: {{ $jadwal->nama_kegiatan }}</li>
        <li>Lokasi: {{ $jadwal->lokasi }}</li>
        <li>Waktu Mulai: {{ \Carbon\Carbon::parse($jadwal->waktu_mulai)->format('d-m-Y H:i') }}</li>
        <li>Waktu Selesai: {{ \Carbon\Carbon::parse($jadwal->waktu_selesai)->format('d-m-Y H:i') }}</li>
    </ul>

    <form action="{{ route('backend.jadwal.destroy', $jadwal->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ route('backend.jadwal.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
