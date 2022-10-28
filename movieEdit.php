<?php
$objMovie = new Movie();
$objKategori = new Kategori();
$dataMovie = $objMovie->dataMovie();
$dataKategori = $objKategori->dataKategori();

$idedit = $_REQUEST['idedit'];
$mov = !empty($idedit) ? $objMovie->getMovie($idedit) : array();
?>
<section class="advt-post bg-gray py-5">
    <div class="container">
        <form action="movieController.php" method="POST">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Edit Movies</h3>
                    </div>
                    <div class="col">
                        <h6 class="font-weight-bold pt-4 pb-1">Movie Title:</h6>
                        <input type="text" name="judul" id="judul" class="form-control bg-white" placeholder="Category Title" value="<?= $mov['judul']; ?>" required>

                        <h6 class="font-weight-bold pt-4 pb-1">Movie Category:</h6>
                        <select class="form-control main" name="kategori_id">
                            <option selected>-- Choose Category --</option>
                            <?php
                            foreach ($dataKategori as $kat) {
                                $sel1 = $mov['kategori_id'] == $kat['id'] ? 'selected' : '';
                            ?>
                                <option value=" <?= $kat['id'] ?>" <?= $sel1 ?>><?= $kat['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <h6 class="font-weight-bold pt-4 pb-1">Release Date:</h6>
                        <input type="date" name="tanggal_rilis" id="tanggal_rilis" value="<?= $mov['tanggal_rilis']; ?>" class="form-control bg-white" required>

                        <h6 class="font-weight-bold pt-4 pb-1">Synopsis:</h6>
                        <textarea name="sinopsis" id="" cols="30" class="form-control bg-white" required rows="10"><?php echo $mov['sinopsis']; ?></textarea>

                        <h6 class="font-weight-bold pt-4 pb-1">Cover:</h6>
                        <input type="text" name="cover" id="cover" value="<?= $mov['cover']; ?>" class="form-control bg-white" required>
                        <div class="checkbox d-inline-flex">
                            <button type="submit" class="btn btn-danger" name="proses" value="edit" onclick="return confirm('Edit Data ?')">Edit</button>
                            <input type="hidden" name="idx" value="<?= $idedit ?>">
                        </div>
            </fieldset>
        </form>
    </div>
</section>