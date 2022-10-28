<?php
$model = new Jadwal();

$dataJadwal = $model->dataJadwal();
?>
<section class="dashboard section">

    <div class="container-fluid">
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataJadwal as $row) {
                            ?>
                                <tr class="text-center">
                                    <td scope="row"><?= $no ?></td>
                                    <td><?= $row['waktu'] ?></td>
                                    <td><?= $row['tanggal'] ?></td>
                                    <td><?= $row['jud'] ?></td>
                                    <td><?= $row['stu'] ?></td>
                                    <td>
                                        <form action="pemesananController.php" method="POST">
                                            <a href="index.php?hal=pemesananForm&idjadwal=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-success btn-sm" title="Buy Ticket">
                                                    <i class="fa fa fa-money" aria-hidden="true"></i>Buy Ticket
                                                </button>
                                            </a>
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