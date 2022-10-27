<?php
$model = new Movie();

$dataMovie = $model->dataMovie();
?>
<section class="dashboard section">

    <div class="container-fluid">
        <a style="margin-left: 25px !important;" class="nav-link text-white add-button" href="index.php?hal=movieForm"><i class="fa fa-plus-circle"></i> Add Movie</a>

        <div class="row">
            <div class="col">
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">Movies Data</h3>
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="">No.</th>
                                <th class="">Movie Id</th>
                                <th class="">Movie Title</th>
                                <th class="">Category</th>
                                <th class="">Release Data</th>
                                <th class="">Synopsis</th>
                                <th class="">Cover</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataMovie as $row) {
                            ?>
                                <tr class="text-center">
                                    <td scope="row"><?= $no ?></td>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['judul'] ?></td>
                                    <td><?= $row['kat'] ?></td>
                                    <td><?= $row['tanggal_rilis'] ?></td>
                                    <td><?= $row['sinopsis'] ?></td>
                                    <td class="product-thumb">
                                        <img width="80px" height="auto" src="images/movies/<?= $row['cover']; ?>.jpg" alt="image description">
                                    </td>
                                    <td>
                                        <form action="movieController.php" method="POST">
                                            <a href="index.php?hal=movieDetail&id=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-info btn-sm" title="Movie Details">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="index.php?hal=movieEdit&idedit=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-warning btn-sm" title="Edit Category">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <?php

                                            ?>
                                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Delete Category?')" title="Delete Category">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            <input type="hidden" name="idx" value="<?= $row['id'] ?>">

                                        </form>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</section>