@extends('backend.v_layouts.app')
@section('content')
<!-- contentAwal -->

<div class="row">

    <div class="col-12">
        @if(auth()->user()->role == 1) <!-- Cek apakah user adalah super admin -->
            <a href="{{ route('backend.user.create') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
            </a>
        @endif
        <div class="card">
            <div class="card-body">
                <h3 class="card-title"> {{$judul}} </h3>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Posyandu</th>
                                <th>Role</th>
                                <th>Status</th>
                                @if(auth()->user()->role == 1) <!-- Cek apakah user adalah super admin -->
                                    <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($index as $row)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{$row->nama}} </td> <!-- Perbaikan di sini -->
                                <td> {{$row->email}} </td> <!-- Perbaikan di sini -->
                                <td> {{$row->posyandu->nama ?? 'Tidak ada Pos Yandu'}} </td> <!-- Menampilkan Pos Yandu -->
                                <td>
                                    @if ($row->role == 1)
                                    <span class="badge badge-success">Super Admin</span>
                                    @elseif($row->role == 0)
                                    <span class="badge badge-primary">Admin</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->status == 1)
                                    <span class="badge badge-success">Aktif</span>
                                    @elseif($row->status == 0)
                                    <span class="badge badge-secondary">NonAktif</span>
                                    @endif
                                </td>
                                @if(auth()->user()->role == 1) <!-- Cek apakah user adalah super admin -->
                                <td>
                                    <a href="{{ route('backend.user.edit', $row->id) }}" title="Ubah Data">
                                        <button type="button" class="btn btn-cyan btn-sm"><i class="far fa-edit"></i> Ubah</button>
                                    </a>

                                    <form method="POST" action="{{ route('backend.user.destroy', $row->id) }}" style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm show_confirm" data-konf-delete="{{ $row->nama }}" title='Hapus Data'>
                                            <i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- contentAkhir -->
@endsection
