<?php
$dsn = 'mysql:dbname=tiketbioskop;host=localhost';
$user = 'root';
$password = '';

try{    
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,TRUE);
}catch (PDOException $e){
    echo 'Terjadi kesalahan saat koneksi/query dgn sebab '.$e->getMessage();
}
