<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Kelompok 2 | Laporan Nilai</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color: #37517e;">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="home.html">Kelompok 2</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="home.html">Home</a></li>
          <li class="dropdown">
            <a href="#">
              <span>Tampil Data</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li><a href="info/mhs.php">Mahasiswa</a></li>
              <li><a href="info/dosen.php">Dosen</a></li>
              <li><a href="info/matkul.php">Mata Kuliah</a></li>
              <li><a href="info/nilai.php">Nilai</a></li>
            </ul>
          </li>
          <li><a class="nav-link active" href="laporan.html">Laporan</a></li>
          <li>
            <a class="getstarted" href="about.html">About</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container mt-lg-5" data-aos="fade-up">
        <div class="section-title">
          <h2>Laporan Nilai</h2>
          <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur
            ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
            quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
            Quia fugiat sit in iste officiis commodi quidem hic quas.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <table class="table table-striped table-hover">
              <thead style="background-color: #37517e;" class="text-light">
                <tr>
                  <td>No</td>
                  <td>NPM</td>
                  <td>Nama Mahasiswa</td>
                  <td>Mata Kuliah</td>
                  <td>Hadir</td>
                  <td>Tugas</td>
                  <td>UTS</td>
                  <td>UAS</td>
                  <td>Rata rata</td>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1; 
                  foreach ($data as $item) {
                    ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $item['npm'] ?></td>
                  <td><?= $item['nama'] ?></td>
                  <td><?= $item['nama_mk'] ?></td>
                  <td><?= $item['nhadir'] ?></td>
                  <td><?= $item['ntugas'] ?></td>
                  <td><?= $item['uts'] ?></td>
                  <td><?= $item['uas'] ?></td>
                  <td><?= ($item['nhadir']+$item['ntugas']+$item['uts']+$item['uas'])/4 ?></td>
                </tr>
                <?php
                $i++;
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->
  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Kelompok 2</h3>
            <p>
              A108 Baker Street
              <br />
              New York, NY 535022
              <br />
              United States
              <br />
              <br />
              <strong>Phone:</strong>
              +1 5589 55488 55
              <br />
              <strong>Email:</strong>
              info@example.com
              <br />
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="index.html">Home</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i>
                <a href="about.html">About us</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>
              Cras fermentum odio eu feugiat lide par naso tierra videa magna
              derita valies
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright
        <strong><span>Kelompok 2</span></strong>
        . All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by
        <a href="https://bootstrapmade.com/">Kelompok 2</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
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