<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="Form.css">
</head>
<body>
    <div class="main">
        <div class="register">
            <h2>Form Registrasi</h2>
            <form id="register" action="foo.php" method="POST">
                <label>Nama Lengkap : </label><br>
                <input type="text" name="fname"
                id="nama" placeholder="Masukkan Nama Lengkap Anda!"><br><br>
                <label>Jenis Kelamin : </label><br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="wanita") echo "checked";?> value="wanita">Wanita
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="pria") echo "checked";?> value="pria">Pria<br><br>
                <label>Tempat Lahir : </label><br>
                <input type="text" name="birthplace"
                id="nama" placeholder="Masukkan Tempat Lahir Anda!"><br><br>
                <label>Tanggal Lahir : </label><br>
                <input type="date" name="birth"
                id="nama" placeholder="Masukkan Tanggal Lahir Anda!"><br><br>
                <label>Agama : </label><br>
                <select name="religion">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                </select><br><br>
                <label>Daerah : </label>
                <select name="area">
                    <option>Jawa</option>
                    <option>Sumatra</option>
                    <option>Kalimantan</option>
                    <option>Sulawesi</option>
                </select><br><br>
                <label>Alamat : </label><br>
                <textarea id="alamat" name="address" rows="3" placeholder="Dimana Anda Berada?"></textarea><br><br>
                <label>No. Telepon : </label><br>
                <input type="number" name="phone"
                id="nama" placeholder="Masukkan No. Telepon Anda!"><br><br>
                <label>Email : </label><br>
                <input type="email" name="email"
                id="nama" placeholder="Masukkan Email Anda!"><br><br>
                <label>Bahasa Yang Digunakan : </label><br>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="bahasa"
                id="ind">
                &nbsp;
                <span id="ind">Indonesia</span>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="bahasa"
                id="eng">
                &nbsp;
                <span id="eng">English</span>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="bahasa"
                id="jawa">
                &nbsp;
                <span id="jawa">Jawa</span><br><br>
                <input type="submit" value="Submit"
                name="submit" id="submit">
            </form>
        </div>
    </div>
</body>
</html>