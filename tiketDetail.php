<?php
$id = $_REQUEST['id'];
$model = new Pemesanan();
$pemesanan = $model->getPemesanan($id);
?>
<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Ticket Details</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section single-speaker">
    <div class="container">
        <div class="block">
            <div class="row">
                <div class="col-lg-12 col-md-6 align-self-center">
                    <div class="content-block">
                        <div class="alert alert-secondary" role="alert">
                            <ul class="mr-1">
                                <h6>Movie Title</h6>
                                <h1><?= $pemesanan['jud'] ?></h1>
                                <h6>Seat Number</h6>
                                <h1><?= $pemesanan['kur'] ?></h1>
                                <h6>Studio</h6>
                                <h1><?= $pemesanan['stu'] ?></h1>
                                <h6>Date</h6>
                                <h1><?= $pemesanan['tanggal'] ?></h1>
                                <h6>Time</h6>
                                <h1><?= $pemesanan['waktu'] ?></h1>
                            </ul>
                        </div>
                        <br />
                        <p align="right">
                            <a href="index.php?hal=tiket" class="btn btn-outline-danger" title="back">
                                Back
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>