<?php
$objJadwal = new Jadwal();
$objMovie = new Movie();
$objStudio = new Studio();
$objKursi = new Kursi();
$dataMovie = $objMovie->dataMovie();
$dataJadwal = $objJadwal->dataJadwal();
$dataStudio = $objStudio->dataStudio();
$dataKursi = $objKursi->dataKursi();

$idJadwal = $_REQUEST['idjadwal'];
$jad = !empty($idJadwal) ? $objJadwal->getJadwal($idJadwal) : array();
?>
<section class="advt-post bg-gray py-5">
    <div class="container">
        <form action="pemesananController.php" method="POST">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Buy Ticket</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">User :</h6>
                        <input type="text" name="user_id" class="form-control bg-white" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Seat :</h6>

                        <select class="form-control main" name="kursi_id">
                            <option selected>-- Choose Seat --</option>
                            <?php
                            foreach ($dataKursi as $kur) {

                            ?>
                                <option value=" <?= $kur['id'] ?>"><?= $kur['nomor'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Time :</h6>
                        <input type="time" value="<?= $jad['waktu']; ?>" class="form-control bg-white" required disabled>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Movie :</h6>
                        <input class="form-control bg-white" required type="text" value="<?= $jad['jud']; ?>" disabled>
                        <input type="hidden" name="film_id" value="<?= $jad['idFilm']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Studio :</h6>
                        <input class="form-control bg-white" required type="text" value="<?= $jad['stu']; ?>" disabled>
                        <input type="hidden" name="studio_id" value="<?= $jad['idStudio']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Date :</h6>
                        <input type="date" value="<?= $jad['tanggal']; ?>" class="form-control bg-white" required disabled>
                        <input type="hidden" name="tanggal" value="<?= $jad['tanggal']; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Total Harga :</h6>
                        <input class="form-control bg-white" name="total_harga" required type="number" value="35000" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-danger" name="proses" value="simpan" onclick="return confirm('Buy Ticket ?')">Buy</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</section>