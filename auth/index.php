<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
  <script src="../assets/fontawesome/js/all.js"></script>

  <!-- Sweet Alert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Login</title>

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">

</head>

<body class="background">
  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      echo "<script>
      Swal.fire({
        icon: 'error',
        title: 'Login Gagal',
        text: 'Email atau Password salah!',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true
      });
      </script>";
    } else if ($_GET['pesan'] == "logout") {
      echo "<script>
      Swal.fire({
        icon: 'success',
        title: 'Logout Berhasil',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true
      });
      </script>";
    } else if ($_GET['pesan'] == "belum_login") {
      echo "<script>
      Swal.fire({
        icon: 'warning',
        title: 'Anda belum login',
        text: 'Silahkan login untuk mengakses halaman'
      });
      </script>";
    }
  }
  ?>
  <!-- Top -->
  <section class="top">
    <div class="container">
      <div class="row-3 text-end mt-5 mb-4">
        <a class="btn-ku" href="../index.php">
          <i class="fas fa-angle-left"></i> Beranda
        </a>
      </div>
    </div>
  </section>
  <!-- End Top -->

  <!-- Login -->
  <section class="login">
    <div class="container">
      <div class="row text-center mt-4 mb-4">
        <h1 class="text-white">KawanKarib.ID</h1>
      </div>
      <div class="row justify-content-center mb-4">
        <div class="col-sm-5">
          <div class="card shadow">
            <div class="card-body">
              <form class="ms-4 me-4 mt-2 mb-4" action="cek_login.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                <div class="text-center">
                  <button class="shadow" type="submit">Masuk</button>
                </div>
              </form>
              <div class="text-center">
                <a href="">Lupa Password?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center mb-5">
        <span class="text-white">Belum punya akun?
          <a href="register.php"> Daftar disini!</a>
        </span>
      </div>
    </div>
  </section>
  <!-- End Login -->


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