<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Pemesanan.php';
$sesi = $_SESSION['user'];
$jadwal_id = $_POST['jadwal_id'];
$user_id = $sesi['id'];
$kursi_id = $_POST['kursi_id'];
$film_id = $_POST['film_id'];
$studio_id = $_POST['studio_id'];
$tanggal = $_POST['tanggal'];
$total_harga = 35000;

$data = [
    $jadwal_id,
    $user_id,
    $kursi_id,
    $film_id,
    $studio_id,
    $tanggal,
    $total_harga
];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Pemesanan();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'edit':
        $data[] = $_POST['idx'];
        $model->edit($data);
        break;
    case 'hapus';
        unset($data);
        $data[] = $_POST['idx'];
        $model->hapus($data);
    default:
        header('Location:index.php?hal=home');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=home');
