<?php
$model = new Pemesanan();
$iduser = $_REQUEST['iduser'];
$objTiket = new Pemesanan();
$dataTiket = $objTiket->getPemesananUser($iduser);
if (isset($sesi)) {
?>
    <section class="dashboard section">

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="widget dashboard-container my-adslist">
                        <h3 class="widget-header">My Ticket</h3>
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th class="">No.</th>
                                    <th class="">Movie Title</th>
                                    <th class="">Seat Number</th>
                                    <th class="">Studio</th>
                                    <th class="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($dataTiket as $row) {
                                ?>
                                    <tr class="text-center">
                                        <td scope="row"><?= $no ?></td>
                                        <td><?= $row['jud'] ?></td>
                                        <td><?= $row['kur'] ?></td>
                                        <td><?= $row['stu'] ?></td>
                                        <td>
                                            <form action="pemesananController.php" method="POST">
                                                <a href="index.php?hal=tiketDetail&id=<?= $row['id'] ?>">
                                                    <button type="button" class="btn btn-info btn-sm" title="Movie Details">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </a>

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
<?php
} else {
    header('location:login.php');
}
?>