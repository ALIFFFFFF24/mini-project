<?php
$objKategori = new Kategori();
$rs = $objKategori->dataKategori();
$idedit = $_REQUEST['idedit'];
$objKategori = new Kategori();
if (!empty($idedit)) {
    $row = $objKategori->getKategori($idedit);
} else {
    $row = array();
}
?>
<section class="advt-post bg-gray py-5">
    <div class="container">
        <form action="kategoriController.php" method="POST">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Edit Category</h3>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Title Of Category:</h6>
                        <input type="text" name="nama" id="nama" class="form-control bg-white" required value="<?= $row['nama']; ?>">
                        <div class="checkbox d-inline-flex">
                            <button type="submit" class="btn btn-danger" name="proses" value="edit" onclick="return confirm('Edit Data ?')">Edit</button>
                            <input type="hidden" name="idx" value="<?= $idedit ?>">
            </fieldset>
        </form>
    </div>
</section>