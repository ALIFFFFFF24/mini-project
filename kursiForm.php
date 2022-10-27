<?php
$objStudio = new Studio();
$dataStudio = $objStudio->dataStudio();
?>
<section class="advt-post bg-gray py-5">
    <div class="container">
        <form action="kursiController.php" method="POST">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Add Seat</h3>
                    </div>
                    <div class="col-lg-12">


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
                        <h6 class="font-weight-bold pt-4 pb-1">Seat Number:</h6>
                        <input type="text" name="nomor" id="nomor" class="form-control bg-white" placeholder="Seat Number" required>
                        <div class="col-12 mt-3">
                            <button type="submit" name="proses" value="simpan" class="btn btn-success btn-lg">Simpan</button>
                            <input type="hidden" name="idx" value="<?= $idedit ?>"><button type=" submit" name="proses" value="batal" class="btn btn-info btn-lg">
                                Batal</button>

                        </div>
            </fieldset>
        </form>
    </div>
</section>