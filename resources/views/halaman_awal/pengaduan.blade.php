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
           <form action="{{ url ('simpan_input_pengaduan/store') }}" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
                <div class="card-body">
                <h2>Isi Pengaduan Anda</h2>

                  <div class="form-group">
                    <label>Judul Pengaduan</label>
                    <input type="text" class="form-control" name="judul">
                  </div>

                  <div class="form-group">
                    <label>Kategori</label>
                    <select type="text" name="id_kategori" class="form-control" placeholder="Kategori">
                        <option value="" disabled selected>Pilih Kategori</option>
                        @foreach($sspengaduan as $item)
                        <option value="{{$item->id}}">{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
        
                <div class="form-group">
                    <label>Nama Saudara / Kuasa Hukum yang Mendampingi</label>
                    <input type="text" class="form-control" name="nm_sdr_ksa_hkm">
                </div>

                  <div class="form-group">
                    <label>Pokok Permasalahan</label>
                    <textarea class="form-control" name="pokok" rows="5" placeholder="Message" required></textarea>
                  </div>

                  <div class="form-group">
                    <label>Uraian Permasalahan</label>
                    <textarea class="form-control" name="uraian" rows="5" placeholder="Message" required></textarea>
                  </div>

                  <div class="form-group">
                    <label>Data dan Informasi</label>
                    <input type="text" class="form-control" name="data_info">
                  </div>

                  <div class="form-group">
                    <label>Hal - hal yang dimohon</label>
                    <input type="text" class="form-control" name="hal_dimohon">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Upload Tanda tangan (tanpa latar belakang, format file: PNG)</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="upload_ttd" name="upload_ttd">
                        </div>
                    </div>
                </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Upload Bukti</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="upload_bukti" name="upload_bukti">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Upload KTP</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="upload_ktp" name="upload_ktp">
                      </div>
                    </div>
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

 

</body>

</html>