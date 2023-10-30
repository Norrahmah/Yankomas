<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PEMAJUAN HAM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/kemenkumham.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">


<style>
    .form-group {
        margin-bottom: 20px;
    }

    .form-group select,
    .form-group input {
        margin-top: 5px;
    }

    .card-body {
        padding: 20px;
    }
</style>

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
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

<div class="logo">
  <div class="row align-items-center">
    <a href="index.html" style="display: flex; align-items: center; text-decoration: none;">
      <img src="{{asset('assets/img/kemenkumham.png')}}" alt="" class="img-fluid" style="margin-right: 20px; width: 40px;">
      <h1 class="text-light" style="font-size: 20px; margin-top: 0;"><span>Pemajuan HAM</span></h1>
    </a>
  </div>
</div>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('pengaduan-awal')}}">Pengaduan</a></li>
          <li><a href="{{url('status')}}">Status Pengaduan</a></li>
          <li><a href="{{url('kontak')}}">Contact Us</a></li>
          <li class="dropdown"><a href="#"><span> </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('login')}}">Login</a></li>
              <li><a href="{{url('logout')}}">Logout</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!-- End Header -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <div class="col-md-12">
          <form action="{{ route('datadiri.store', ['id' => $pengaduan->id]) }}" method="post">
            {{ csrf_field() }}
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
        
            <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id }}"> <!-- Gunakan ID pengaduan yang sesuai -->
            <div class="card-body">
                <h2>Lengkapi Data Diri </h2>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
        
                <div class="form-group">
                    <label for="tempat">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat">
                </div>
        
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir">
                </div>
        
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <select name="pekerjaan" class="form-control">
                        <option value="" disabled selected>Pilih Pekerjaan</option>
                        <option> Guru </option>
                        <option> Dosen </option>
                        <option> Mahasiswa </option>
                        <option> Pegawai </option>
                        <option> Buruh </option>
                        <option> Petani </option>
                        <option> Pedagang </option>
                        <option> TNI </option>
                        <option> Polisi </option>
                        <!-- Tambahkan pilihan pekerjaan lainnya di sini -->
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select name="agama" class="form-control">
                        <option value="" disabled selected>Pilih Agama</option>
                        <option> Islam </option>
                        <option> Hindu </option>
                        <option> Budha </option>
                        <option> Konghucu </option>
                        <option> Katolik </option>
                        <option> Protestan </option>
                        <!-- Tambahkan pilihan agama lainnya di sini -->
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
        
                <div class="form-group">
                    <label for="telp">No Telepon</label>
                    <input type="text" class="form-control" name="telp">
                </div>
        
            </div>
            <!-- /.card-body -->
        
            <div class="card-footer" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        
 
          </div>

        </div>

      </div>
    </section>
   <!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
   <!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <!-- End Features Section -->

  </main><!-- End #main -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data pengaduan Anda telah berhasil disimpan </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Konten modal di sini -->
          Pengaduan anda terjamin keamanan dan kerahasiannya, selanjutnya silahkan lengkapi data diri.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Footer ======= -->
  @include('awal.footer_awal')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <!-- Tambahkan kode JavaScript di bawah </form> -->

  <script>
    window.onload = function() {
      // Ganti 'myModal' dengan ID modal Anda
      var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
        keyboard: false
      });
  
      myModal.show();
    };
  </script>

</body>

</html>