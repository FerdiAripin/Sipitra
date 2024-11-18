@extends('backend.v_layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Dokumentasi</h5>

                <form action="{{ route('backend.dokumentasi.update', $dokumentasi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Input file -->
                    <div class="form-group">
                        <label for="file">File Foto/Video</label>
                        <input type="file" name="file" id="file" class="form-control">
                        @if ($dokumentasi->file)
                            <p>File yang diupload sebelumnya: <a href="{{ asset('storage/' . $dokumentasi->file) }}" target="_blank">Lihat file</a></p>
                        @endif
                    </div>

                    <!-- Input deskripsi -->
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $dokumentasi->deskripsi }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Dokumentasi</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
