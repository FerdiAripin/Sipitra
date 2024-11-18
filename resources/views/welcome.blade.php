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

    <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

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
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    {{-- <li><a href="#features">Features</a></li> --}}
                    <li class="dropdown"><a href="#"><span>Fitur</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('/kader') }}">Kader</a></li>
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
                            <li><a href="{{ url('/jadwal-kegiatan') }}">Jadwal Kegiatan</a></li>
                            {{-- <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li> --}}
                            <li><a href="{{ url('/dokumentasi-kegiatan') }}">Dokumentasi</a></li>
                        </ul>
                    </li>
                    {{-- <li><a href="#team">Team</a></li>
                    <li><a href="#pricing">Pricing</a></li> --}}
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Kontak</a></li>
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

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>

                    <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                        <h1>Selamat Datang di Website Informasi Posyandu <span> Kelurahan Cipawitra</span></h1>
                        <p>Menyajikan berbagai informasi seputar Posyandu Kelurahan Cipawitra</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Mulai</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Lihat Video</span></a>
                        </div>
                    </div>

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

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">

                    <div class="col-xl-5 content">
                        <h3>Tentang Kami</h3>
                        <h2>Visi & Misi</h2>
                        <p> Kami berkomitmen untuk memberikan edukasi
                            kesehatan dan pencegahan penyakit. Kerja sama dengan puskesmas dan dinas kesehatan
                            memperkuat upaya kami dalam mewujudkan generasi sehat dan berkualitas.</p>
                        <a href="#" class="read-more"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-buildings"></i>
                                    <h3>Visi</h3>
                                    <p>Menjadi pos yandu yang aktif, mandiri, dan terpercaya dalam memberikan layanan
                                        kesehatan ibu, anak, serta keluarga di lingkungan kelurahan kami. Lorem ipsum
                                        dolor sit, amet consectetur adipisicing elit. Quaerat cumque atque ipsa
                                        explicabo nesciunt reprehenderit rem ut quasi, voluptatum, dolorum labore
                                        deserunt officiis totam dolor velit nihil natus inventore itaque.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-clipboard-pulse"></i>
                                    <h3>Misi</h3>
                                    <p> 1. Menyediakan Pelayanan Berkualitas <br>
                                        2. Meningkatkan Kesehatan Masyarakat <br>
                                        3. Memberdayakan Kader Pos Yandu <br>
                                        4. Menggalang Kerja Sama dengan Pihak Terkait <br>
                                        5. Mengembangkan Program Edukasi dan Pencegahan <br>
                                </div>
                            </div> <!-- End Icon Box -->


                        </div>
                    </div>

                </div>
            </div>

        </section><!-- /About Section -->



        <!-- Gallery Section -->
        <!-- Gallery Section -->
        {{-- <section id="gallery" class="gallery section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Dokumentasi</h2>
                <div><span>Dokumentasi</span> <span class="description-title">Kegiatan</span></div>
                <p>Fitur dokumentasi ini berisi galeri foto-foto kegiatan pos yandu yang telah dilakukan. Melalui
                    dokumentasi ini <br> Anda dapat melihat momen-momen penting dalam setiap acara yang kami
                    selenggarakan</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                    @foreach ($dokumentasi as $item)
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="{{ asset('uploads/dokumentasi/' . $item->image_path) }}" class="glightbox" data-gallery="images-gallery">
                                    <img src="{{ asset('uploads/dokumentasi/' . $item->image_path) }}" alt="Dokumentasi Kegiatan" class="img-fluid">
                                </a>

                            </div>
                        </div><!-- End Gallery Item -->
                    @endforeach
                </div>
            </div>

        </section><!-- /Gallery Section -->-= --}}



        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <div class="container-fluid">

                <div class="row gy-4">

                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h3><span>Pertanyaan yang sering</span><strong> Diajukan</strong></h3>
                            <p>
                                Di bawah ini adalah beberapa pertanyaan yang sering diajukan terkait dengan layanan
                                dan kegiatan di pos yandu. Jika Anda memiliki pertanyaan lain, jangan ragu untuk
                                menghubungi kami.
                            </p>
                        </div>

                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                            <div class="faq-item faq-active">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Apa tujuan dari website Pos Yandu ini?</h3>
                                <div class="faq-content">
                                    <p>Website ini bertujuan untuk memberikan informasi terkini mengenai kegiatan,
                                        jadwal, serta layanan yang tersedia di Pos Yandu. Kami juga menyediakan
                                        dokumentasi, berita kesehatan, dan akses bagi masyarakat untuk
                                        berpartisipasi dalam program Pos Yandu.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Bagaimana cara mengakses jadwal kegiatan di Pos Yandu melalui website?</h3>
                                <div class="faq-content">
                                    <p>Anda dapat melihat jadwal kegiatan Pos Yandu pada halaman khusus di website
                                        ini. Jadwal tersebut akan selalu diperbarui untuk memastikan Anda
                                        mendapatkan informasi terbaru mengenai waktu dan jenis kegiatan yang akan
                                        berlangsung.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Apa saja layanan yang tersedia dalam website informasi Posyandu ini?</h3>
                                <div class="faq-content">
                                    <p>Website Pos Yandu menyediakan berbagai layanan, termasuk jadwal kegiatan
                                        rutin seperti pemeriksaan kesehatan, imunisasi, dan edukasi kesehatan yang
                                        dapat diakses secara online. Pengunjung dapat mengakses dokumentasi foto
                                        kegiatan, serta mendapatkan informasi mengenai kader Pos Yandu. Tersedia
                                        juga artikel dan tips kesehatan untuk ibu dan anak. Website ini juga
                                        memungkinkan pengunjung menghubungi Pos Yandu melalui halaman kontak,
                                        menyampaikan pengaduan, dan memperoleh berita terbaru terkait kegiatan dan
                                        pembaruan layanan.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="assets/img/faq.jpg" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <div><span>Check Our</span> <span class="description-title">Contact</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

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

</body>

</html>
