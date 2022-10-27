<?php
?>
<section class="advt-post bg-gray py-5">
    <div class="container">
        <form action="kategoriController.php" method="POST">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Add Category</h3>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Title Of Category:</h6>
                        <input type="text" name="nama" id="nama" class="form-control bg-white" placeholder="Category Title" required>
                        <div class="col-12 mt-3">

                            <button type="submit" name="proses" value="simpan" class="btn btn-success btn-lg">Simpan</button>
                            <input type="hidden" name="idx" value="<?= $idedit ?>"><button type=" submit" name="proses" value="batal" class="btn btn-info btn-lg">
                                Batal</button>

                        </div>
            </fieldset>
        </form>
    </div>
</section>