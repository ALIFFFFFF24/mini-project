<?php
include_once 'koneksi.php';
include_once 'models/Jadwal.php';
$waktu = $_POST['waktu'];
$tanggal = $_POST['tanggal'];
$film_id = $_POST['film_id'];
$studio_id = $_POST['studio_id'];
$data = [
    $waktu,
    $tanggal,
    $film_id,
    $studio_id
];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Jadwal();
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
        header('Location:index.php?hal=jadwal');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=jadwal');
