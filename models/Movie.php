<?php
class Movie
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataMovie()
    {
        $sql = "SELECT f.id,f.judul,k.nama as kat,f.tanggal_rilis,f.sinopsis,f.cover
        FROM film f INNER JOIN kategori k ON f.kategori_id = k.id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getMovie($id)
    {
        $sql = "SELECT f.id,f.judul,k.nama as kat,f.tanggal_rilis,f.sinopsis,f.cover
        FROM film f INNER JOIN kategori k ON f.kategori_id = k.id WHERE f.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function getMovieJudul($data)
    {
        $sql = "SELECT f.id,f.judul,k.nama as kat,f.tanggal_rilis,f.sinopsis,f.cover
        FROM film f INNER JOIN kategori k ON f.kategori_id = k.id WHERE f.data = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO film (judul,kategori_id,tanggal_rilis,sinopsis,cover) VALUES (?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function edit($data)
    {
        $sql = "UPDATE film SET judul=?, kategori_id=?, tanggal_rilis=?, sinopsis=?, cover=? WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($data)
    {
        $sql = "DELETE FROM film WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
