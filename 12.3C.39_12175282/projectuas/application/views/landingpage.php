<!DOCTYPE html>
<html lang="en">
<?echo form_open('landingpage'); ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - Perpustakaan Cermat</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(''); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(''); ?>css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Perpustakaan Cermat</a>
        <a class="btn btn-primary" href="index.php/landingpage/login">Login</a>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Pusat Ilmu Seluas Lautan</h1>
          </div>
          <div class="col-9 col-md-4 mx-auto">
            <!-- <button type="submit" class="btn btn-block btn-lg btn-primary">Daftar Keanggotaan</button> -->
          </div>
          <!--<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                </div>
              </div>
            </form>
          </div> -->
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Basis Data Anggota Terkomputerisasi</h3>
              <p class="lead mb-0">Data keanggotaan Anda disimpan dalam basis data yang aman</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Untuk Segala Lapisan Masyarakat</h3>
              <p class="lead mb-0">Kami menyediakan buku-buku dari bermacam jenis untuk pembaca dari berbagai kalangan!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Persyaratan Pinjam Buku Mudah</h3>
              <p class="lead mb-0">Untuk meminjam sebuah buku, Anda hanya perlu mendaftarkan diri di situs ini!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/buku.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Koleksi Buku Terbesar Se-Kelurahan!</h2>
            <p class="lead mb-0">Dengan koleksi buku yang amat banyak, Anda tidak perlu takut untuk kehabisan bahan bacaan!</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/perpus.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Rapi dan Nyaman</h2>
            <p class="lead mb-0">Ruangan yang nyaman dan tenang sangat cocok untuk menggugah minat baca Anda!</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/pinjam.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Mudahnya Meminjam Buku</h2>
            <p class="lead mb-0">Hanya dengan mendaftarkan diri Anda secara online di situs ini, Anda dapat meminjam buku apa saja di Perpustakaan Cermat!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->

    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto mb-2">
            <h2 class="mb-2">Ayo daftar keanggotaan sekarang!</h2>
          </div>
        </div>
        <?php echo form_open('landingpage/register'); ?>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <div class="form-group">
            <div class="form-row">
              <div class="col-12 col-md-6 mb-2 mb-md-2">
                <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" placeholder="Nama Depan*" required="required">
              </div>
              <div class="col-12 col-md-6 mb-2 mb-md-2">
                <input type="text" id="lastname" name="lastname" class="form-control form-control-lg" placeholder="Nama Belakang*" required="required">
              </div>
            </div>
            <div class="form-row">
              <div class="col-12 col-md-6 mb-2 mb-md-2">
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email*" required="required">
              </div>
              <div class="col-12 col-md-6 mb-2 mb-md-2">
                <input type="contactno" id="contactno" name="contactno" class="form-control form-control-lg" placeholder="Nomor Kontak*" required="required">
              </div>
            </div>
            <div class="form-row">
              <div class="col-12 col-md-12 mb-2 mb-md-2">
                <input type="address" id="address" name="address" class="form-control form-control-lg" placeholder="Alamat*" required="required">
              </div>
            </div>
            <div class="form-row">
              <div class="col-12 col-md-12 mb-2 mb-md-2 mx-auto">
                <p>*wajib diisi</p>
              </div>
              <div class="col-12 col-md-12 mb-2 mb-md-2 mx-auto">
                <?php echo form_submit( 'submit', 'Daftar Keanggotaan' , 'class = "btn btn-primary"'); ?>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">Tentang</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Hubungi Kami</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Ketentuan Perpustakaan</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Kebijakan Privasi</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Perpustakaan Cermat 2018. Segala Hak Dilindungi.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(''); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
