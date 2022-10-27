<?php
include_once 'koneksi.php';
include_once 'models/Movie.php';
$judul = $_POST['judul'];
$kategori_id = $_POST['kategori_id'];
$tanggal_rilis = $_POST['tanggal_rilis'];
$sinopsis = $_POST['sinopsis'];
$cover = $_POST['cover'];
$data = [
    $judul,
    $kategori_id,
    $tanggal_rilis,
    $sinopsis,
    $cover
];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Movie();
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
        header('Location:index.php?hal=movie');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=movie');
