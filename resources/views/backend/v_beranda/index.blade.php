@extends('backend.v_layouts.app')
@section('content')
    <!-- contentAwal -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body border-top">
                    <h3 class="card-title"> {{ $judul }}</h3>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading"> Selamat Datang, {{ Auth::user()->nama }}</h4>
                        Terima kasih telah menggunakan Aplikasi Sipitra. Berdasarkan hak akses yang Anda miliki, Anda dapat
                        mengakses berbagai fitur dan fungsi yang tersedia sesuai dengan peran Anda sebagai
                        <b>
                            @if (Auth::user()->role == 1)
                                Super Admin
                            @elseif(Auth::user()->role == 0)
                                Admin
                            @endif
                        </b>
                        Ini adalah halaman utama dari aplikasi, di mana Anda dapat melihat berbagai informasi penting,
                        melakukan pengelolaan data, serta mengakses fitur lainnya sesuai dengan kebutuhan Anda. Kami
                        berharap Anda dapat memanfaatkan aplikasi ini dengan sebaik-baiknya.
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card" role="region" aria-labelledby="jadwalKegiatanCard">
                    <div class="card-body">
                        <h5 class="card-title" id="jadwalKegiatanCard">
                            <i class="fas fa-calendar-check"></i> Jadwal Kegiatan
                        </h5>
                        <p class="card-text">Kelola semua jadwal kegiatan dengan mudah dan efisien.
                            Lihat, tambahkan, atau edit jadwal kegiatan yang akan datang kapan saja.
                            Pastikan setiap kegiatan berjalan dengan lancar.</p>
                        <a href="{{ route('backend.jadwal.index') }}" class="btn btn-primary" role="button"
                            aria-label="Lihat jadwal kegiatan lebih lanjut">Lihat Jadwal</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card" role="region" aria-labelledby="dokumentasiKegiatanCard">
                    <div class="card-body">
                        <h5 class="card-title" id="dokumentasiKegiatanCard">
                            <i class="fas fa-camera"></i> Dokumentasi Kegiatan
                        </h5>
                        <p class="card-text">Kelola semua jadwal kegiatan dengan mudah dan praktis.
                            Lihat, tambahkan, atau edit jadwal kegiatan yang akan datang sesuai kebutuhan.
                            Pastikan setiap kegiatan terorganisir dengan baik.</p>
                        <a href="{{ route('backend.dokumentasi.index') }}" class="btn btn-primary" role="button"
                            aria-label="Lihat dokumentasi kegiatan lebih lanjut">Lihat Dokumentasi</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card" role="region" aria-labelledby="profilCard">
                    <div class="card-body">
                        <h5 class="card-title" id="profilCard">
                            <i class="fas fa-users"></i> Daftar User
                        </h5>
                        <p class="card-text">Berikut adalah beberapa pengguna yang sudah terdaftar dan bergabung bersama
                            Anda di sini.
                            Mereka telah menjadi bagian dari komunitas ini dan siap untuk saling berbagi pengalaman.</p>
                        <a href="{{ route('backend.user.index') }}" class="btn btn-primary" role="button"
                            aria-label="Perbarui profil pengguna">Lihat Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- contentAkhir -->
@endsection
