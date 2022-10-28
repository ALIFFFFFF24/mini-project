<?php
$model = new Jadwal();

$dataJadwal = $model->dataJadwal();
?>
<section class="dashboard section">

    <div class="container-fluid">
        <a style="margin-left: 25px !important;" class="nav-link text-white add-button" href="index.php?hal=jadwalForm"><i class="fa fa-plus-circle"></i> Add Schedule</a>

        <div class="row">
            <div class="col">
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">Movie Schedule</h3>
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="">No.</th>
                                <th class="">Time</th>
                                <th class="">Date</th>
                                <th class="">Movie Title</th>
                                <th class="">Studio</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataJadwal as $row) {
                            ?>
                                <tr class="text-center">
                                    <td scope="row"><?= $no ?></td>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['waktu'] ?></td>
                                    <td><?= $row['jud'] ?></td>
                                    <td><?= $row['stu'] ?></td>
                                    <td>
                                        <form action="jadwalController.php" method="POST">
                                            <a href="index.php?hal=jadwalEdit&idedit=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-warning btn-sm" title="Edit Schedule">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <?php

                                            ?>
                                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Delete Schedule?')" title="Delete Schedule">
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