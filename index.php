<?php
session_start();
include_once("koneksi.php");
include_once("header.php");
include_once("navbar.php");

include_once("models/User.php");
include_once("models/Kategori.php");
include_once("models/Movie.php");
include_once("models/Studio.php");
include_once("models/Kursi.php");
include_once("models/Jadwal.php");
include_once("models/Pemesanan.php");
echo '<br/';
$hal = $_REQUEST['hal'];
if (!empty($hal)) {
    include_once $hal . '.php';
} else {
    include_once 'home.php';
}
include_once 'footer.php';
