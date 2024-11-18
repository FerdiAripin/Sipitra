@extends('backend.v_layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- Tombol Tambah Dokumentasi -->
        <a href="{{ route('backend.dokumentasi.create') }}">
            <button type="button" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Dokumentasi
            </button>
        </a>
        <div class="card mt-3">
            <div class="card-body">
                <h3 class="card-title">Daftar Dokumentasi Kegiatan</h3>
                <!-- Tabel Dokumentasi Kegiatan -->
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto/Video</th>
                                <th>Deskripsi</th>
                                <th>Waktu Upload</th>
                                <th>Ditambahkan Oleh</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dokumentasi as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <!-- Menampilkan foto/video -->
                                    @if($row->file)
                                        <img src="{{ asset('storage/' . $row->file) }}" width="100" alt="Dokumentasi">
                                    @else
                                        Video tersedia
                                    @endif
                                </td>
                                <td>{{ $row->deskripsi }}</td>
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y H:i') }}</td>
                                <td>{{ $row->user->nama }}</td>
                                <td>
                                    <!-- Tombol Ubah -->
                                    <a href="{{ route('backend.dokumentasi.edit', $row->id) }}" class="btn btn-cyan btn-sm">
                                        <i class="fas fa-edit"></i> Ubah
                                    </a>

                                    <!-- Form Hapus Dokumentasi -->
                                    <form method="POST" action="{{ route('backend.dokumentasi.destroy', $row->id) }}" style="display:inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
