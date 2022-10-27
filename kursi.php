<?php
$model = new Kursi();

$dataKursi = $model->dataKursi();
?>
<section class="dashboard section">

    <div class="container-fluid">
        <a style="margin-left: 25px !important;" class="nav-link text-white add-button" href="index.php?hal=kursiForm"><i class="fa fa-plus-circle"></i>Add Seat</a>

        <div class="row">
            <div class="col">
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">Theater Seat</h3>
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="">No.</th>
                                <th>Seat Id</th>
                                <th class="">Studio</th>
                                <th class="">Seat Number</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataKursi as $row) {
                            ?>
                                <tr class="text-center">
                                    <td scope="row"><?= $no ?></td>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['studio_id'] ?></td>
                                    <td><?= $row['nomor'] ?></td>
                                    <td>
                                        <form action="kursiController.php" method="POST">
                                            <?php

                                            ?>
                                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Delete Seat?')" title="Delete Seat">
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