<?php
include_once 'koneksi.php';
include_once 'models/Kursi.php';
$studio_id = $_POST['studio_id'];
$nomor = $_POST['nomor'];
$data = [
    $studio_id,
    $nomor

];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Kursi();
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
        header('Location:index.php?hal=kursi');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=kursi');
