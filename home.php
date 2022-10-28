<?php
$model = new Movie();

$dataMovie = $model->dataMovie();
?>
<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Header Contetnt -->
                <div class="content-block">
                    <h1>Watch Your Favorite Movies </h1>
                </div>>
            </div>
        </div>
    </div>
    </div>
    <!-- Container End -->
</section>

<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Now Showing</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="trending-ads-slide">
                    <?php
                    foreach ($dataMovie as $row) {
                    ?>
                        <div class="col-sm-12 col-lg-4">
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <a href="single.html">
                                            <img class="card-img-top img-fluid" src="images/movies/<?= $row['cover']; ?>.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="single.html"><?= $row['judul']; ?></a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="single.html" class="fw-bold"><?= $row['kat']; ?></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="category.html"><i class="fa fa-calendar"></i><?= $row['tanggal_rilis']; ?></a>
                                            </li>
                                        </ul>
                                        <p class="card-text"><?= $row['sinopsis']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section>