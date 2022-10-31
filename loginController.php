<?php
session_start();
include_once 'koneksi.php';
include_once 'models/User.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = [
    $username,
    $password
];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new User();
$rs = $model->cekLogin($data);
if (!empty($rs)) { //sukses login
    $_SESSION['user'] = $rs;
    //diarahkan ke suatu halaman
    header('location:index.php?hal=home');
} else { //gagal login
    echo '<script>alert("User/Password Anda Salah!!!");history.back();</script>';
}
