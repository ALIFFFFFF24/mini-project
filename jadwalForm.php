<?php
$objMovie = new Movie();
$dataMovie = $objMovie->dataMovie();

$objStudio = new Studio();
$dataStudio = $objStudio->dataStudio();

?>
<section class="advt-post bg-gray py-5">
    <div class="container">
        <form action="jadwalController.php" method="POST">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Add Schedule</h3>
                    </div>
                    <div class="col-lg-12">
                        <h6 class="font-weight-bold pt-4 pb-1">Time :</h6>
                        <input type="time" name="waktu" id="waktu" class="form-control bg-white" required>

                        <h6 class="font-weight-bold pt-4 pb-1">Date :</h6>
                        <input type="date" name="tanggal" id="tanggal" class="form-control bg-white" required>

                        <h6 class="font-weight-bold pt-4 pb-1">Movie :</h6>

                        <select class="form-control main" name="film_id">
                            <option selected>-- Choose Movie --</option>
                            <?php
                            foreach ($dataMovie as $mov) {

                            ?>
                                <option value=" <?= $mov['id'] ?>"><?= $mov['judul'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <h6 class="font-weight-bold pt-4 pb-1">Studio :</h6>

                        <select class="form-control main" name="studio_id">
                            <option selected>-- Choose Studio --</option>
                            <?php
                            foreach ($dataStudio as $stu) {

                            ?>
                                <option value=" <?= $stu['id'] ?>"><?= $stu['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <div class="col-12 mt-3">
                            <button type="submit" style="margin-left: -15px;" name="proses" value="simpan" class="btn btn-success btn-lg">Simpan</button>
                            <input type="hidden" name="idx" value="<?= $idedit ?>"><button type=" submit" name="proses" value="batal" class="btn btn-info btn-lg">
                                Batal</button>

                        </div>
            </fieldset>
        </form>
    </div>
</section>