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

  <title>KawanKarib.ID</title>

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
            <a class="nav-link" href="/KawanKarib.ID">Beranda</a>
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
            <a class="nav-link active" href="#">Tentang Kami</a>
          </li>
        </ul>
        <a class="nav-btn" href="auth/">Masuk</a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars" style="color: white;"></i>
      </button>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Site top -->
  <section class="about">
    <div class="content">
      <div class="row">
        <aside class="home-main">
          <div class="text-1">Yuk, Kenalan dengan <br>kami!</div>
          <div class="text-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
        </aside>
      </div>
    </div>
  </section>
  <!-- End Site Top -->

  <!-- Site Mid -->
  <section class="siteabout">
    <div class="container">
        <div class="row text-center">
            <span class="mt-3 fs-1">Berawal dari kami</span>
        </div>
      <div class="row">
        <div class="col-sm-4 mt-5 text-center">
          <div class="point fs-4">Pratama Puji Ariyanto</div>
          <p>Mahasiswa UPNVJATIM</p>
        </div>
        <div class="col-sm-4 mt-5 text-center">
          <div class="point fs-4">Bagus Rizky Prasetyo</div>
          <p>Mahasiswa UPNVJATIM</p>
        </div>
        <div class="col-sm-4 mt-5 text-center">
          <div class="point fs-4">Ruben Coda S.I</div>
          <p>Mahasiswa UPNVJATIM</p>
        </div>
      </div>
      <div class="row text-center">
          <div class="mb-3">
             <img src="img/img6.png" alt="">
          </div>
      </div>
    </div>
  </section>
  <!-- End Site Mid -->

  <!-- Start site bottom -->
  <section class="sitebottom">
    <div class="container">
    <div class="row text-center">
            <span class="mt-3 fs-1">Layanan Kami</span>
        </div>
      <div class="row">
        <div class="col-sm-4 mt-5 mb-3 text-center">
          <img src="img/img7.svg" alt="">
          <div class="point fs-3">Mentorship</div>
          <p>Lorem Ipsum is simply dummy <br> text of the printing and </br> typesetting industry.</p>
        </div>
        <div class="col-sm-4 mt-5 mb-3 text-center">
          <img src="img/img8.svg" alt="">
          <div class="point fs-3">Webinar</div>
          <p>Lorem Ipsum is simply dummy <br> text of the printing and </br> typesetting industry.</p>
        </div>
        <div class="col-sm-4 mt-5 mb-3 text-center">
          <img src="img/img9.svg" alt="">
          <div class="point fs-3">Konseling</div>
          <p>Lorem Ipsum is simply dummy <br> text of the printing and </br> typesetting industry.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End site bottom -->

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