@extends('backend.v_layouts.app')
@section('content')

<div class="container">
    <h2>Tambah Dokumentasi Kegiatan</h2>
    <form action="{{ route('backend.dokumentasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>File (Foto/Video)</label>
            <input type="file" name="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Upload</button>
    </form>
</div>

@endsection
