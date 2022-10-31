<?php
include_once 'koneksi.php';
include_once 'models/User.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
$role = "user";
$data = [
    $nama,
    $username,
    $email,
    $no_hp,
    $password,
    $role
];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new User();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    default:
        header('Location:login.php');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:login.php');
