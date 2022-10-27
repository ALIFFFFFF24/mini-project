<?php
$model = new Studio();

$dataStudio = $model->dataStudio();
?>
<section class="dashboard section">

    <div class="container-fluid">
        <a style="margin-left: 25px !important;" class="nav-link text-white add-button" href="index.php?hal=studioForm"><i class="fa fa-plus-circle"></i> Add Studio</a>

        <div class="row">
            <div class="col">
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">Studios</h3>
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="">No.</th>
                                <th class="">Studio Id</th>
                                <th class="">Studio Name</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dataStudio as $row) {
                            ?>
                                <tr class="text-center">
                                    <td scope="row"><?= $no ?></td>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td>
                                        <form action="studioController.php" method="POST">
                                            <a href="index.php?hal=studioEdit&idedit=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-warning btn-sm" title="Edit Category">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <?php

                                            ?>
                                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Delete Studio?')" title="Delete Studio">
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