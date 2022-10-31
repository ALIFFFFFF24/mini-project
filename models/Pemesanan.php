<?php
class Pemesanan
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataPemesanan()
    {
        $sql = "SELECT p.id,p.user_id,u.nama as nama,j.waktu as waktu,f.judul as jud,k.nomor as kur,s.nama as stu,p.tanggal,p.total_harga
        FROM pemesanan p INNER JOIN film f ON p.film_id = f.id
        INNER JOIN kursi k ON p.kursi_id = k.id
        INNER JOIN studio s ON p.studio_id = s.id
        INNER JOIN jadwal j ON p.jadwal_id = j.id
        INNER JOIN user u ON p.user_id = u.id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getPemesanan($id)
    {
        $sql = "SELECT p.id,p.user_id,j.waktu as waktu,f.judul as jud,k.nomor as kur,s.nama as stu,p.tanggal,p.total_harga
        FROM pemesanan p INNER JOIN film f ON p.film_id = f.id
        INNER JOIN kursi k ON p.kursi_id = k.id
        INNER JOIN studio s ON p.studio_id = s.id
        INNER JOIN jadwal j ON p.jadwal_id = j.id
        WHERE p.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function getPemesananUser($id)
    {
        $sql = "SELECT p.id,p.user_id,j.waktu as waktu,f.judul as jud,k.nomor as kur,s.nama as stu,p.tanggal,p.total_harga
        FROM pemesanan p INNER JOIN film f ON p.film_id = f.id
        INNER JOIN kursi k ON p.kursi_id = k.id
        INNER JOIN studio s ON p.studio_id = s.id
        INNER JOIN jadwal j ON p.jadwal_id = j.id
        WHERE p.user_id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO pemesanan (jadwal_id,user_id,kursi_id,film_id,studio_id,tanggal,total_harga) VALUES (?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function edit($data)
    {
        $sql = "UPDATE pemesanan SET user_id=?, kursi_id=?, film_id=?, studio_id=?, tanggal=? , total_harga=? WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($data)
    {
        $sql = "DELETE FROM pemesanan WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
