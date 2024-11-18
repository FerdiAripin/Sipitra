@extends('backend.v_layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Jadwal Kegiatan</h2>

    <form action="{{ route('backend.jadwal.update', $jadwal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_kegiatan">Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control" value="{{ $jadwal->nama_kegiatan }}" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $jadwal->lokasi }}" required>
        </div>

        <div class="form-group">
            <label for="waktu_mulai">Waktu Mulai</label>
            <input type="datetime-local" name="waktu_mulai" id="waktu_mulai" class="form-control" value="{{ \Carbon\Carbon::parse($jadwal->waktu_mulai)->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="form-group">
            <label for="waktu_selesai">Waktu Selesai</label>
            <input type="datetime-local" name="waktu_selesai" id="waktu_selesai" class="form-control" value="{{ \Carbon\Carbon::parse($jadwal->waktu_selesai)->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4">{{ $jadwal->deskripsi }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('backend.jadwal.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
