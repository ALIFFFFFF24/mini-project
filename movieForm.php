<?php
$objKategori = new Kategori();
$dataKategori = $objKategori->dataKategori();
?>
<section class="advt-post bg-gray py-5">
    <div class="container">
        <form action="movieController.php" method="POST">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Add Film</h3>
                    </div>
                    <div class="col-lg-12">
                        <h6 class="font-weight-bold pt-4 pb-1">Movie Title:</h6>
                        <input type="text" name="judul" id="judul" class="form-control bg-white" placeholder="Category Title" required>

                        <h6 class="font-weight-bold pt-4 pb-1">Movie Category:</h6>

                        <select class="form-control main" name="kategori_id">
                            <option selected>-- Choose Category --</option>
                            <?php
                            foreach ($dataKategori as $kat) {

                            ?>
                                <option value=" <?= $kat['id'] ?>"><?= $kat['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <h6 class="font-weight-bold pt-4 pb-1">Release Date:</h6>
                        <input type="date" name="tanggal_rilis" id="tanggal_rilis" class="form-control bg-white" required>

                        <h6 class="font-weight-bold pt-4 pb-1">Synopsis:</h6>
                        <textarea name="sinopsis" id="" cols="30" class="form-control bg-white" required rows="10"></textarea>

                        <h6 class="font-weight-bold pt-4 pb-1">Cover:</h6>
                        <input type="text" name="cover" id="cover" class="form-control bg-white" required>
                        <div class="col-12 mt-3">
                            <button type="submit" name="proses" value="simpan" class="btn btn-success btn-lg">Simpan</button>
                            <input type="hidden" name="idx" value="<?= $idedit ?>"><button type=" submit" name="proses" value="batal" class="btn btn-info btn-lg">
                                Batal</button>

                        </div>
            </fieldset>
        </form>
    </div>
</section>