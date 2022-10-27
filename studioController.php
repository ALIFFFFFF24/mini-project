<?php
include_once 'koneksi.php';
include_once 'models/Studio.php';
$nama = $_POST['nama'];
$data = [
    $nama

];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Studio();
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
        header('Location:index.php?hal=studio');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=studio');
