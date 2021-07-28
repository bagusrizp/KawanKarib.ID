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

  <title>Register</title>

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">

</head>

<body class="background">
  <!-- Top -->
  <section class="top">
    <div class="container">
      <div class="row-3 text-end mt-5 mb-4">
        <a class="btn-ku" href="/KawanKarib.ID">
          <i class="fas fa-angle-left"></i> Beranda
        </a>
      </div>
    </div>
  </section>
  <!-- End Top -->

  <!-- Login -->
  <section class="register">
    <div class="container">
      <div class="row text-center mb-4">
        <h1 class="text-white">Daftar Akun<br>KawanKarib.ID</h1>
      </div>
      <div class="row justify-content-center mb-4">
        <div class="col-sm-5">
          <div class="card">
            <div class="card-body">
              <form class="ms-4 me-4 mt-2 mb-4" action="" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3">
                  <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
                </div>
                <div class="mb-3">
                  <label for="tgl_lahir" class="form-label">Jenis Kelamin</label>
                  <select class="form-select">
                    <option selected>- Pilih Jenis Kelamin -</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="telepon" class="form-label">No Telepon</label>
                  <input type="text" class="form-control" name="telepon" placeholder="Masukkan No Telepon">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                <div class="mb-3">
                  <label for="password2" class="form-label">Konfirmasi Password</label>
                  <input type="password" class="form-control" name="password2" placeholder="Masukkan Konfirmasi Password">
                </div>
                <div class="text-center">
                  <button class="" type="submit">Daftar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center mb-5">
        <span class="text-white">Sudah punya akun?
          <a href="index.php"> Masuk Yuk!</a>
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