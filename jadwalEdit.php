<?php
$objJadwal = new Jadwal();
$objMovie = new Movie();
$objStudio = new Studio();
$dataMovie = $objMovie->dataMovie();
$dataJadwal = $objJadwal->dataJadwal();
$dataStudio = $objStudio->dataStudio();

$idedit = $_REQUEST['idedit'];
$jad = !empty($idedit) ? $objJadwal->getJadwal($idedit) : array();
?>
<section class="advt-post bg-gray py-5">
    <div class="container">
        <form action="jadwalController.php" method="POST">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Edit Schedule</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Time :</h6>
                        <input type="time" name="waktu" id="waktu" value="<?= $jad['waktu']; ?>" class="form-control bg-white" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Date :</h6>
                        <input type="date" name="tanggal" id="tanggal" value="<?= $jad['tanggal']; ?>" class="form-control bg-white" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Movie :</h6>

                        <select class="form-control main w-50" name="film_id">
                            <?php
                            foreach ($dataMovie as $mov) {
                                $sel1 = $jad['film_id'] == $mov['id'] ? 'selected' : '';
                            ?>
                                <option value=" <?= $mov['id'] ?>" <?= $sel1 ?>><?= $mov['judul'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Studio :</h6>
                        <select class="form-control w-50 main" name="studio_id">
                            <?php
                            foreach ($dataStudio as $stu) {
                                $sel1 = $stu['studio_id'] == $stu['id'] ? 'selected' : '';
                            ?>
                                <option value=" <?= $stu['id'] ?>" <?= $sel1 ?>><?= $stu['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-danger" name="proses" value="edit" onclick="return confirm('Edit Data ?')">Edit</button>
                        <input type="hidden" name="idx" value="<?= $idedit ?>">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</section>