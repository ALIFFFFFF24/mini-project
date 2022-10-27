<?php
class Kursi
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataKursi()
    {
        $sql = "SELECT * FROM kursi";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getKursi($id)
    {
        $sql = "SELECT * FROM kursi WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO kursi (studio_id,nomor) VALUES (?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function edit($data)
    {
        $sql = "UPDATE kursi SET studio_id=?, nomor=? WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($data)
    {
        $sql = "DELETE FROM kursi WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
