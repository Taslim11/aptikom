<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>APTIKOM SULBAR</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('/')}}assets/img/logo_APTIKOM.jpeg" rel="icon">
  <link href="{{ asset('/')}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="{{ asset('/')}}https://fonts.googleapis.com" rel="preconnect">
  <link href="{{ asset('/')}}https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="{{ asset('/')}}https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('/')}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('/')}}assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('/')}}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('/')}}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('/')}}assets/css/main.css" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Eterna
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4 light"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-youtube"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ url('/')}}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="logo_nav.jpg" alt="" >
        </a>
          <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ url('/')}}" class="active">HOME</a></li>
            <li class="dropdown"><a href="#"><span>PROFIL</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('profil-sejarah')}}">Sejarah</a></li>
                <li><a href="{{ url('profil-visimisi')}}">Visi dan Misi</a></li>
                <li><a href="{{ url('profil-tujuanFungsiTugas')}}">Tujuan, Fungsi dan Tugas</a></li>
                <li><a href="{{ url('profil-strukturOrganisasi')}}">Struktur Organisasi</a></li>
                <li><a href="{{ url('profil-pengurus')}}">Pengurus APTIKOM SULBAR</a></li>
                <li><a href="{{ url('profil-artiLogo')}}">Arti Logo APTIKOM</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>TUPOKSI</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('tupoksi-bendaharaUmum')}}">Bendahara Umum</a></li>
                <li><a href="{{ url('tupoksi-kesekretariatan')}}">Kesekretariatan</a></li>
                <li class="dropdown"><a href="#"><span>Bagian Khusus</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Humas dan Branding</a></li>
                    <li><a href="#">Sistem Informasi</a></li>
                    <li><a href="#">Audit dan Pembinaan Organisasi</a></li>
                    <li><a href="#">Legalitas dan Advokasi</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kluster Kelompok Keilmuan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Keilmuan bidang artificial Intelligence</a></li>
                    <li><a href="#">Keilmuan bidang multimedia</a></li>
                    <li><a href="#">Keilmuan bidang transformation</a></li>
                    <li><a href="#">Keilmuan bidang high performance and dustrubuted computing</a></li>
                    <li><a href="#">Keilmuan Bidang System Security</a></li>
                    <li><a href="#">Keilmuan Bidang  Bioinformatics</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kluster Bidang Pengembangan Perguruan Tinggi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Bidang SMPI dan Akreditasi</a></li>
                    <li><a href="#">Bidang Kurikulum berbasis KINI</a></li>
                    <li><a href="#">Bidang Manajemen Sistem Informasi Perguruan Tinggi</a></li>
                    <li><a href="#">Bidang Internasionalisasi Perguruan Tinggi</a></li>
                    <li><a href="#">Bidang Forum Aptikom</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kluster Bidang Pengembangan SDM</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Bidang Jabatan Fungsional</a></li>
                    <li><a href="#">Bidang Doctorsodikinas Camp</a></li>
                    <li><a href="#">Bidang Publikasi Dosen</a></li>
                    <li><a href="#">Bidang Penulisan Buku Ajar</a></li>
                    <li><a href="#">Bidang Hibah dan Lomba</a></li>
                    <li><a href="#">Bidang Kompetensi Dosen</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kluster Pengembangan Kerja Sama</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Bidang Kerjasama Industri</a></li>
                    <li><a href="#">Bidang Kerjasama Luar Negeri</a></li>
                    <li><a href="#">Bidang Kerjasama Pemerintah dan Lembaga Lainnya</a></li>
                    <li><a href="#">Bidang Kerjasama Perguruan Tinggi</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Badan Otonom</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Bidang LSP Informatika</a></li>
                    <li><a href="#">Bidang LAM Infokom</a></li>
                    <li><a href="#">Bidang Pemerataan Pendidikan</a></li>
                    <li><a href="#">Bidang Penerbitan Jurnal</a></li>
                    <li><a href="#">Bidang Conference dan Seminar</a></li>
                    <li><a href="#">Bidang Lembaga Pelatihan Kompetensi</a></li>
                    <li><a href="#">Bidang Platform Inovasi dan Komersialisasi Produk</a></li>
                  </ul>
                </li>
              </ul>
            </li>  
            <li><a href="berita">BERITA</a></li>
            <li class="dropdown"><a href="#"><span>KONFERENSI</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('https://icic-aptikom.org/2024/')}}">ICIC</a></li>
                <li><a href="{{ url('https://rakornasaptikom2024.methodist.ac.id/semnastik/home')}}">SEMNASTIK</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>KEANGGOTAAN</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('pendaftaran')}}">Pendaftaran Anggota</a></li>
                <li><a href="{{ url('https://dias.aptikom.org/list-anggota')}}">Data Anggota Individu</a></li>
                <li><a href="{{ url('https://dias.aptikom.org/list-anggota-prodi')}}">Data Anggota PRODI</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>ARSIP</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Buku Panduan Kurikulum Bidang INFOKOM Berbasis OBE/KKNI/SKKNI</a></li>
                <li><a href="#">Surat Keputusan</a></li>
                <li><a href="#">Naskah Sumpah Jabatan</a></li>
                <li><a href="#">AD/ART APTIKOM</a></li>
                <li><a href="#">Job deks DPP APTIKOM</a></li>
                <li><a href="#">Buletin APTIKOM</a></li>
                <li><a href="#">Buku Saku APTIKOM</a></li>
                <li><a href="#">Mars APTIKOM</a></li>
              </ul>
            </li> 
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>
 
    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/rakornas-2017.jpg" alt="">
          <div class="carousel-container">
            <h2><span>APTIKOM SULBAR</span></h2>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/rakornas-2017.jpg" alt="">
          <div class="carousel-container">
            <h2>Asosiasi Perguruan Tinggi Informatika dan Komputer Sulawesi Barat</h2>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <div class="featured container">

        <div class="row gy-4">


        </div>

      </div>

    </section><!-- /Hero Section -->

    <section class="news py-5">
      <div class="container">
        <!-- Section Title -->
      <div class="container section-title mt-5" data-aos="fade-up">
        <h2>Berita APTIKOM</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->
        <div class="row g-4">
          <!-- Berita 1 -->
          <div class="col-md-4">
            <div class="card h-100">
              <img src="assets/img/berita/1.jpg" class="card-img-top" alt="Gambar Berita">
              <div class="card-body">
                <h5 class="card-title">Healthkathon 2024 kerjasama APTIKOM dengan BPJS Kesehatan</h5>
                <p class="card-text">
                  Deskripsi singkat berita. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <a href="detail-berita.html" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <!-- Berita 2 -->
          <div class="col-md-4">
            <div class="card h-100">
              <img src="assets/img/berita/2.jpg" class="card-img-top" alt="Gambar Berita">
              <div class="card-body">
                <h5 class="card-title">PKS/MoU RAKORNAS APTIKOM TAHUN 2024</h5>
                <p class="card-text">
                  Deskripsi singkat berita. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <a href="detail-berita.html" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <!-- Berita 3 -->
          <div class="col-md-4">
            <div class="card h-100">
              <img src="assets/img/berita/3.jpg" class="card-img-top" alt="Gambar Berita">
              <div class="card-body">
                <h5 class="card-title">SELAMAT DATANG DI RAKORNAS APTIKOM TAHUN 2024</h5>
                <p class="card-text">
                  Deskripsi singkat berita. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <a href="detail-berita.html" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    
    <!-- Clients Section -->
    <section id="clients" class="section clients">
      <style>
        @media (min-width: 992px) {
          .swiper-slide img {
            max-width: 180px; /* Sesuaikan ukuran gambar */
            height: auto; /* Pertahankan proporsi gambar */
            margin: 0 auto; /* Ratakan gambar di tengah */
            display: block; /* Pastikan gambar dianggap elemen block */
          }
    
          .swiper-slide {
            display: flex; /* Gunakan flexbox untuk perataan */
            justify-content: center; /* Ratakan horizontal */
            align-items: center; /* Ratakan vertical */
            margin: 0 75px; /* Tambahkan jarak horizontal antar slide */
          }
        }
      </style>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/Logo_ICIC.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Logo_lAM_INFOKOM.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Logo_LSP_INFORMATIKA.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/Logo_MOOC_APTIKOM.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination "></div>
        </div>

      </div>

    </section><!-- /Clients Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 me-5 mt-5">
          <img src="assets/img/logo-APTIKOM-footer.png" style="width: 170px" class="mb-3">
          <p>Asosiasi Pendidikan Tinggi Informatika dan Komputer Sulawesi Barat</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-youtube"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 ms-5 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Kontak</span>
          </a>
          <div class="footer-contact pt-3">
            <p>APTIKOM Central Office : Gd. Graha Simatupang, Menara I A Lantai 5, Kampus Universitas Gunadarma, Jl. TB Simatupang Kav. 38, Jakarta</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">APTIKOM</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/')}}assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('/')}}assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('/')}}assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('/')}}assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('/')}}assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('/')}}assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('/')}}assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset('/')}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('/')}}assets/js/main.js"></script>

</body>

</html>