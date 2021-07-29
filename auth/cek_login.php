<?php

session_start();

require 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
$cek = mysqli_fetch_row($login);

if ($cek > 0) {
  $_SESSION['email'] = $email;
  $_SESSION['status'] = "login";
  header("location:../home/");
} else {
  header("location:index.php?pesan=gagal");
}
