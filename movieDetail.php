<?php
$id = $_REQUEST['id'];
$model = new Movie();
$movie = $model->getMovie($id);
?>
<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Movie Details</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section single-speaker">
    <div class="container">
        <div class="block">
            <div class="row">
                <div class="col-lg-5 col-md-6 align-self-md-center">
                    <div class="image-block">
                        <img src="images/movies/<?= $movie['cover']; ?>.jpg" class="img-fluid" alt="movie">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 align-self-center">
                    <div class="content-block">
                        <div class="judul">
                            <h1><?= $movie['judul'] ?></h1>
                        </div>
                        <div class="Movie category">
                            <p>Movie Category: <?= $movie['kat'] ?></p>
                        </div>
                        <div class="Release Date">
                            <p>Release Date: <?= $movie['tanggal_rilis'] ?></p>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <ul class="mr-1">
                                <h6>Sinopsis</h6>
                                <p><?= $movie['sinopsis'] ?></p>
                            </ul>
                        </div>
                        <br />
                        <p align="right">
                            <a href="index.php?hal=movie" class="btn btn-primary" title="back">
                                <i class="fa fa-hand-o-left" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>