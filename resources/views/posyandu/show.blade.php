@extends('layouts.app')

@section('content')
    <div class="container-fluid my-5">

        <!-- Header Section -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Informasi Posyandu</h2>
            <div>Posyandu <span>{{$posyandu->nama}}</span></div>
        </div><!-- End Section Title -->

        <!-- Posyandu Details -->
        <div class="row">
            <!-- Foto Posyandu -->
            <div class="col-12 mb-4 d-flex justify-content-center" data-aos="fade-up">
                <img src="{{ asset('storage/foto-posyandu/' . ($posyandu->foto ?: 'default.jpg')) }}"
                    alt="Foto Posyandu {{ $posyandu->nama }}" class="img-fluid w-100 rounded shadow-sm"
                    style="max-width: 60%; margin-bottom: 50px;">
            </div>
        </div>

        <div class="row g-4">
            <!-- Tentang Posyandu -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title fw-bold text-center">Tentang Posyandu</h3>
                        <p class="card-text text-muted text-center">
                            {{ $posyandu->deskripsi }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Lokasi di Peta -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title fw-bold text-center">Lokasi Posyandu</h3>
                        <div class="mt-3">
                            @if (!empty($posyandu->peta))
                                <iframe src="{{ $posyandu->peta }}" width="100%" height="300" style="border:0;"
                                    allowfullscreen="" loading="lazy" class="rounded">
                                </iframe>
                            @else
                                <p class="text-muted text-center">Lokasi belum tersedia.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container section-title" data-aos="fade-up" style="margin-top: 100px; margin-bottom:-50px">
            <div>Data Kader di Posyandu <span>{{$posyandu->nama}}</span></div>
        </div><!-- End Section Title -->

        <!-- Daftar Kader -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-5" data-aos="fade-up">
            @foreach ($users as $user)
                <div class="col mb-4">
                    <div class="card shadow-sm border-0 rounded-3" style="max-width: 250px; margin: 0 auto;">
                        <div class="position-relative">
                            <!-- Membesarkan sedikit ukuran gambar -->
                            <img src="{{ asset('storage/img-user/' . ($user->foto ?: 'default.jpg')) }}"
                                class="img-fluid rounded-3" alt="User Photo"
                                style="object-fit: cover; height: 200px; width: 100%; border-radius: 15px;">
                            <div class="position-absolute bottom-0 start-0 p-3 bg-dark bg-opacity-50 w-100 text-center">
                                <h5 class="text-white fs-5">{{ $user->nama }}</h5>
                            </div>
                        </div>
                        <div class="card-body text-center p-3">
                            <!-- Memperbesar sedikit ukuran teks -->
                            <p class="card-text text-muted small">
                                <i class="fas fa-envelope me-2"></i> {{ $user->email }}
                            </p>
                            <p class="card-text text-muted small mb-3">
                                <i class="fas fa-phone-alt me-2"></i> {{ $user->hp }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>





    </div>
@endsection
