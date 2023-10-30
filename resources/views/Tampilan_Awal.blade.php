
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PEMAJUAN HAM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/kemenkumham.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('awal.header_awal')
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Pelayanan Komunikasi Masyarakat</span></h2>
          <p class="animate__animated animate__fadeInUp">Pelayanan Komunikasi Masyarakat (YANKOMAS) adalah kegiatan pelayanan komunikasi masyarakat 
             Kantor Wilayah Kementerian Hukum dan HAM Kalimantan Selatan yang menangani masalah pengaduan 
             masyarakat terhadap indikasi terjadinya suatu pelanggaran HAM. YANKOMAS memberikan layanan 
             terhadap masyarakat tentang adanya permasalahan hak asasi manusia yang dikomunikasikan maupun 
             yang tidak atau belum dikomunikasikan.</p>
             <a href="{{url('pengaduan-awal/create')}}" class="btn-get-started animate__animated animate__fadeInUp" style="font-size: 20px;">BUAT PENGADUAN</a>

        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Langkah Membuat Pengaduan</h2>
          <p class="animate__animated animate__fadeInUp">  1. Masyarakat bisa langsung membuat pengaduan tanpa perlu login.
             <br>
             2. Setelah selesai membuat pengaduan wajib mengisi  Data Diri.
             <br>
             3. Masyarakat harus login untuk mencek status pengaduan. Silahkan untuk menunggu status pengaduan, apakah ditanggapi atau tidak.
             <br>
             4. Apabila Status Pengaduan Ada Unsur Pelanggaran HAM, maka akan ada pemanggilan dan akan diberitahukan lewat email atau whatsaap.
             <br>
             <br></p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->


      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <section id="services">
     <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(auth()->check())
                    <!-- Konten layanan di sini -->
                @else
                    <div class="alert alert-warning" role="alert" style="background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px;">
                        Anda harus login terlebih dahulu untuk melihat status pengaduan. <a href="{{ route('login') }}" class="alert-link">Login sekarang</a>.
                    </div>
                @endif
            </div>
        </div>
    </div>
    </section>

  <main id="main">

    <!-- ======= Services Section ======= -->

    

   <!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
   <!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('awal.footer_awal')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>