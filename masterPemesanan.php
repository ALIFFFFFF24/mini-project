<?php
$model = new Pemesanan();

$dataPemesanan = $model->dataPemesanan();
?>
<section class="dashboard section">

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">Booking Data</h3>
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Booking Id</th>
                                <th>Name</th>
                                <th>Seat Number</th>
                                <th>Movie Title</th>
                                <th>Studio</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataPemesanan as $row) {
                            ?>
                                <tr class="text-center">
                                    <td scope="row"><?= $no ?></td>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['kur'] ?></td>
                                    <td><?= $row['jud'] ?></td>
                                    <td><?= $row['stu'] ?></td>
                                    <td><?= $row['tanggal'] ?></td>
                                    <td>
                                        <form action="pemesananController.php" method="POST">


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