<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sipitra</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-calendar/3.0.1/css/bootstrap-calendar.min.css"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .badge-status {
            display: inline-block;
            padding: 8.5px 10px;
            font-size: 13px;
            border-radius: 0.5rem;
            line-height: 1.5;
        }
    </style>

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Sipitra</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('welcome') }}" class="">Beranda</a></li>
                    <li><a href="{{route('welcome')}}#about">Tentang Kami</a></li>
                    {{-- <li><a href="#features">Features</a></li> --}}
                    <li class="dropdown"><a href="#"><span>Fitur</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('kader') }}">Kader</a></li>
                            <li class="dropdown"><a href="#"><span>Pos Yandu</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span><</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('posyandu.show', ['posyanduId' => 8]) }}">Posyandu Cigaluma RW 4</a></li>
                                    <li><a href="{{ route('posyandu.show', ['posyanduId' => 9]) }}">Posyandu Cipawitra RW 5</a></li>
                                    <li><a href="{{ route('posyandu.show', ['posyanduId' => 10]) }}">Posyandu Gn Reog RW 5</a></li>
                                    <li><a href="{{ route('posyandu.show', ['posyanduId' => 11]) }}">Posyandu Cilamajang RW 6</a></li>
                                    <li><a href="{{ route('posyandu.show', ['posyanduId' => 12]) }}">Posyandu Gn Bango RW 6</a></li>
                                    <li><a href="{{ route('posyandu.show', ['posyanduId' => 13]) }}">Posyandu Baitul Marhamah RW 7</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('posyandu.show', ['posyanduId' => 1]) }}">Posyandu Gn Nangka RW 1</a></li>
                            <li><a href="{{ route('posyandu.show', ['posyanduId' => 2]) }}">Posyandu Babakan RW 1</a></li>
                            <li><a href="{{ route('posyandu.show', ['posyanduId' => 3]) }}">Posyandu Cikunir hilir RW 2</a></li>
                            <li><a href="{{ route('posyandu.show', ['posyanduId' => 4]) }}">Posyandu Genteng RW 2</a></li>
                            <li><a href="{{ route('posyandu.show', ['posyanduId' => 5]) }}">Posyandu Gn Jambe RW 2</a></li>
                            <li><a href="{{ route('posyandu.show', ['posyanduId' => 6]) }}">Posyandu Cimanggu RW 3</a></li>
                            <li><a href="{{ route('posyandu.show', ['posyanduId' => 7]) }}">Posyandu Gn Bubut RW 4</a></li>
                        </ul>
                    </li>
                            <li><a href="{{ url('/jadwal') }}">Jadwal Kegiatan</a></li>
                            {{-- <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li> --}}
                            <li><a href="{{url('/dokumentasi-kegiatan')}}">Dokumentasi</a></li>
                        </ul>
                    </li>
                    {{-- <li><a href="#team">Team</a></li>
                    <li><a href="#pricing">Pricing</a></li> --}}
                    <li><a href="{{route('welcome')}}#faq">FAQ</a></li>
                    <li><a href="{{route('welcome')}}#contact">Kontak</a></li>
                    {{-- <li><a href="{{ route('backend.login') }}">Login</a></li> --}}
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

            <div class="container d-flex justify-content-start align-items-center"
                style="min-height: 40vh; padding-top: 40px;">
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
                    <h1>Halaman Informasi Mengenai Jadwal Kegiatan di Posyandu Kelurahan Cipawitra</h1>
                    <p>Di halaman ini, Anda dapat menemukan informasi seputar Jadwal Kegiatan yang ada di Posyandu
                        Kelurahan Cipawitra</p>
                    {{-- <div class="d-flex">
                        <a href="#about" class="btn-get-started">Mulai</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Lihat Video</span></a>
                    </div> --}}
                </div>
            </div>




            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>

        </section><!-- /Hero Section -->




        <section id="jadwal" class="jadwal section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Jadwal Kegiatan</h2>
                <div><span>Informasi Mengenai Jadwal Kegiatan Yang Sudah <br>atau Akan Dilaksanakan</span></div>
            </div><!-- End Section Title -->

            <!-- Jadwal List -->
            <div class="container">
                <div class="row">
                    @foreach ($jadwal as $item)
                        @php
                            // Mendapatkan waktu saat ini
                            $current_time = \Carbon\Carbon::now();
                            // Membandingkan waktu dengan kegiatan
                            $start_time = \Carbon\Carbon::parse($item->waktu_mulai);
                            $end_time = \Carbon\Carbon::parse($item->waktu_selesai);

                            // Menentukan status kegiatan
                            if ($current_time->isBefore($start_time)) {
                                $status = 'Akan Datang';
                                $status_class = 'badge-info';
                            } elseif ($current_time->isBetween($start_time, $end_time)) {
                                $status = 'Sedang Berlangsung';
                                $status_class = 'badge-success';
                            } else {
                                $status = 'Sudah Selesai';
                                $status_class = 'badge-secondary';
                            }
                        @endphp

                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <h3 class="card-title">{{ \Illuminate\Support\Str::limit($item->nama_kegiatan, 18) }}</h3>
                                    <p class="card-text text-muted">Lokasi: {{ $item->lokasi }}</p>
                                    <p class="card-text text-muted">Waktu Mulai:
                                        {{ $item->waktu_mulai->format('d-m-Y H:i') }}</p>
                                    <p class="card-text text-muted">Waktu Selesai:
                                        {{ $item->waktu_selesai->format('d-m-Y H:i') }}</p>
                                    <!-- Badge Status with Increased Height -->
                                    <span class="badge {{ $status_class }} badge-status">{{ $status }}</span>
                                    <!-- Button to trigger Modal -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#jadwalModal{{ $item->id }}"
                                        style="padding: 7.5px 21px; font-size: 13px; border-radius: 0.5rem; line-height: 1.5; background-color:#17A2B8">
                                        <strong>Detail</strong>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for each Jadwal -->
                        <div class="modal fade" id="jadwalModal{{ $item->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="jadwalModalLabel{{ $item->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="jadwalModalLabel{{ $item->id }}">
                                            {{ $item->nama_kegiatan }}</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Deskripsi :</strong>:</p>
                                        <p>{{ $item->deskripsi }}</p>
                                        <p><strong>Lokasi:</strong> {{ $item->lokasi }}</p>
                                        <p><strong>Waktu Mulai:</strong> {{ $item->waktu_mulai->format('d-m-Y H:i') }}
                                        </p>
                                        <p><strong>Waktu Selesai:</strong>
                                            {{ $item->waktu_selesai->format('d-m-Y H:i') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>














    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Bootslander</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Bootslander</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>
