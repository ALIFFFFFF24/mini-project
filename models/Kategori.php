<?php
class Kategori
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataKategori()
    {
        $sql = "SELECT * FROM kategori";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getKategori($id)
    {
        $sql = "SELECT * FROM kategori WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO kategori (nama) VALUES (?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function edit($data)
    {
        $sql = "UPDATE kategori SET nama=? WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($data)
    {
        $sql = "DELETE FROM kategori WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
