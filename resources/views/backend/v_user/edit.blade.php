@extends('backend.v_layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('backend.user.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="card-body">
                        <h3 class="card-title">{{$judul}}</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto</label>
                                    @if ($edit->foto)
                                    <img src="{{ asset('storage/img-user/' . $edit->foto) }}" class="foto-preview" width="100%">
                                    @else
                                    <img src="{{ asset('storage/img-user/img-default.jpg') }}" class="foto-preview" width="100%">
                                    @endif
                                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" onchange="previewFoto()">
                                    @error('foto')
                                    <div class="invalid-feedback alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8">
                                @if(auth()->user()->role == 1) <!-- Super Admin only can edit role and status -->
                                <div class="form-group">
                                    <label>Hak Akses</label>
                                    <select name="role" class="form-control @error('role') is-invalid @enderror">
                                        <option value="" {{ old('role', $edit->role) == '' ? 'selected' : '' }}> - Pilih Hak Akses -</option>
                                        <option value="1" {{ old('role', $edit->role) == '1' ? 'selected' : '' }}>Super Admin</option>
                                        <option value="0" {{ old('role', $edit->role) == '0' ? 'selected' : '' }}>Admin</option>
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="" {{ old('status', $edit->status) == '' ? 'selected' : '' }}> - Pilih Status -</option>
                                        <option value="1" {{ old('status', $edit->status) == '1' ? 'selected' : '' }}>Aktif</option>
                                        <option value="0" {{ old('status', $edit->status) == '0' ? 'selected' : '' }}>NonAktif</option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                @else
                                <!-- For Admin users, they cannot edit role and status, just show them -->
                                <div class="form-group">
                                    <label>Hak Akses</label>
                                    <input type="text" value="{{ $edit->role == 1 ? 'Super Admin' : 'Admin' }}" class="form-control" disabled>
                                    <input type="hidden" name="role" value="{{ $edit->role }}">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" value="{{ $edit->status == 1 ? 'Aktif' : 'NonAktif' }}" class="form-control" disabled>
                                    <input type="hidden" name="status" value="{{ $edit->status }}">
                                </div>
                                @endif

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" value="{{ old('nama', $edit->nama) }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama">
                                    @error('nama')
                                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{ old('email', $edit->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email">
                                    @error('email')
                                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>HP</label>
                                    <input type="text" onkeypress="return hanyaAngka(event)" name="hp" value="{{ old('hp', $edit->hp) }}" class="form-control @error('hp') is-invalid @enderror" placeholder="Masukkan Nomor HP">
                                    @error('hp')
                                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Pos Yandu</label>
                                    @if(auth()->user()->role == 1) <!-- Super Admin can edit Pos Yandu -->
                                        <select name="posyandu_id" class="form-control @error('posyandu_id') is-invalid @enderror">
                                            <option value="" {{ old('posyandu_id', $edit->posyandu_id) == '' ? 'selected' : '' }}> - Pilih Pos Yandu - </option>
                                            @foreach ($posYandus as $posyandu)
                                                <option value="{{ $posyandu->id }}" {{ old('posyandu_id', $edit->posyandu_id) == $posyandu->id ? 'selected' : '' }}>
                                                    {{ $posyandu->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    @else
                                        <!-- For non-super admin, just display the selected Pos Yandu -->
                                        <input type="text" value="{{ $edit->posyandu ? $edit->posyandu->nama : 'Tidak ada Pos Yandu' }}" class="form-control" disabled>
                                        <input type="hidden" name="posyandu_id" value="{{ $edit->posyandu_id }}">
                                    @endif
                                    @error('posyandu_id')
                                        <div class="invalid-feedback alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label>Password Baru</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password Baru">
                                    @error('password')
                                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Konfirmasi Password Baru</label>
                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi Password Baru">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Perbaharui</button>
                            <a href="{{ route('backend.user.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
