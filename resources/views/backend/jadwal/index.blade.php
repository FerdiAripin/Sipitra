@extends('backend.v_layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{ route('backend.jadwal.create') }}">
            <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Jadwal Kegiatan</button>
        </a>
        <div class="card mt-3">
            <div class="card-body">
                <h3 class="card-title">Daftar Jadwal Kegiatan</h3>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Lokasi</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                                <th>Deskripsi</th>
                                <th>Ditambahkan Oleh</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_kegiatan }}</td>
                                <td>{{ $row->lokasi }}</td>
                                <td>{{ $row->waktu_mulai->format('d-m-Y H:i') }}</td>
                                <td>{{ $row->waktu_selesai->format('d-m-Y H:i') }}</td>
                                <td>{{ $row->deskripsi }}</td>
                                <td>{{ $row->user->nama }}</td>
                                <td>
                                    <a href="{{ route('backend.jadwal.edit', $row->id) }}" class="btn btn-cyan btn-sm">Ubah</a>
                                    <form method="POST" action="{{ route('backend.jadwal.destroy', $row->id) }}" style="display:inline-block;">
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

