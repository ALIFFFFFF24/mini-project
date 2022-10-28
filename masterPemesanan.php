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
                                <th class="">No.</th>
                                <th class="">Booking Id</th>
                                <th class="">User Name</th>
                                <th class="">Seat Number</th>
                                <th class="">Movie Title</th>
                                <th class="">Studio</th>
                                <th class="">Date</th>
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