<?php
class Jadwal
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataJadwal()
    {
        $sql = "SELECT j.id,j.waktu,j.tanggal,f.id as idFilm,f.judul as jud,s.nama as stu,s.id as idStudio
        FROM jadwal j INNER JOIN film f ON j.film_id = f.id
        INNER JOIN studio s ON j.studio_id = s.id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getJadwal($id)
    {
        $sql = "SELECT j.id,j.waktu,j.tanggal,f.id as idFilm,f.judul as jud,s.nama as stu,s.id as idStudio
        FROM jadwal j INNER JOIN film f ON j.film_id = f.id
        INNER JOIN studio s ON j.studio_id = s.id WHERE j.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO jadwal (waktu,tanggal,film_id,studio_id) VALUES (?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function edit($data)
    {
        $sql = "UPDATE jadwal SET waktu=?, tanggal=?, film_id=?, studio_id=? WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($data)
    {
        $sql = "DELETE FROM jadwal WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
