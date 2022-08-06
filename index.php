<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
  <script src="assets/fontawesome/js/all.js"></script>

  <title>KawanKarib</title>

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #419EE0;">
    <div class="container">
      <a class="navbar-brand" href="#">KawanKarib.ID</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="navbar-item">
            <a class="nav-link active" href="index.php">Beranda</a>
          </li>
          <li class="navbar-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-dark" href="#">Webinar</a></li>
              <li><a class="dropdown-item text-dark" href="#">Konseling</a></li>
              <li><a class="dropdown-item text-dark" href="#">Mentorship</a></li>
            </ul>
          </li>
          <li class="navbar-item">
            <a class="nav-link" href="about.php">Tentang Kami</a>
          </li>
        </ul>
        <a class="nav-btn" href="auth/index.php">Masuk</a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars" style="color: white;"></i>
      </button>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Site top -->
  <section class="jumbotron">
    <div class="content">
      <div class="row">
        <aside class="home-main">
          <div class="text-1">Ayo,</div>
          <div class="text-1">Daftarkan Sekarang</div>
          <div class="text-2">Tanpa disadari, sebenarnya kesehatan mental juga harus diperhatikan loh yuk, daftarkan sekarang</div>
          <a class="shadow" href="auth/register.php">Daftar Sekarang</a>
        </aside>
      </div>
    </div>
  </section>
  <!-- End Site Top -->

  <!-- Site Mid -->
  <section class="site">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 mt-5 mb-3 text-center">
          <img src="img/img2.svg" alt="">
          <div class="point fs-1">100+</div>
          <p>Terdapat 100 lebih <br> Konsultan yang sudah bergabung</p>
        </div>
        <div class="col-sm-4 mt-5 mb-3 text-center">
          <img src="img/img3.svg" alt="">
          <div class="point fs-1">100+</div>
          <p>Terdapat 100 lebih <br> Pasien yang sudah bergabung</p>
        </div>
        <div class="col-sm-4 mt-5 mb-3 text-center">
          <img src="img/img4.svg" alt="">
          <div class="point fs-1">100+</div>
          <p>Terdapat 100 lebih <br> Komunitas yang sudah bergabung</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Site Mid -->

  <!-- Kata Mereka -->
  <section class="km">
    <div class="container">
      <div class="row text-center mt-5 mb-4">
        <div class="col">
          <h2>Kata Mereka</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-sm-4">
          <div class="card shadow">
            <div class="card-body">
              <img src="img/Person/2.jpg" alt="Orang 1">
              <h5 class="card-title mt-2">Albert Wicaksono</h5>
              <h6 class="card-subtitle mb-2">Pengusaha</h6>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis pariatur, alias assumenda rerum fugiat distinctio explicabo aliquid culpa repellendus iusto!</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card shadow">
            <div class="card-body">
              <img src="img/Person/1.jpg" alt="Orang 2">
              <h5 class="card-title mt-2">Maria Delove</h5>
              <h6 class="card-subtitle mb-2">Mahasiswi</h6>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis pariatur, alias assumenda rerum fugiat distinctio explicabo aliquid culpa repellendus iusto!</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card shadow">
            <div class="card-body">
              <img src="img/Person/3.jpg" alt="Orang 3">
              <h5 class="card-title mt-2">Joko Mashuri</h5>
              <h6 class="card-subtitle mb-2">Karyawan</h6>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis pariatur, alias assumenda rerum fugiat distinctio explicabo aliquid culpa repellendus iusto!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center mt-4">
        <div class="col-ms-3">
          <a class="btn-km shadow" href="">Lebih Lanjut</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Kata Mereka -->

  <!-- Footer -->
  <footer class="footer mt-5 py-3">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-sm-6">
          <span>&copy; <?= DATE('Y'); ?> All rights reserved</span>
        </div>
        <div class="col-sm-6 text-end">
          By <a class="link" href="">KawanKarib.ID</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>