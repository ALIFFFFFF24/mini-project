<?php
$sesi = $_SESSION['user'];
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="index.html">
                        <img class="img w-50" src="images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto main-nav ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php?hal=home">Home</a>
                            </li>
                            <?php
                            if ($sesi['role'] == 'admin') { //---------hanya untuk admin----------
                            ?>
                                <li class="nav-item dropdown dropdown-slide">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Master Data<span><i class="fa fa-angle-down"></i></span>
                                    </a>

                                    <!-- Dropdown list -->
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item " href="index.php?hal=movie">Movies</a></li>
                                        <li><a class="dropdown-item " href="index.php?hal=kategori">Film Categories</a></li>
                                        <li><a class="dropdown-item " href="index.php?hal=studio">Studios</a></li>
                                        <li><a class="dropdown-item " href="index.php?hal=kursi">Seats</a></li>
                                        <li><a class="dropdown-item " href="index.php?hal=jadwal">Movies Schedule</a></li>
                                        <li><a class="dropdown-item " href="index.php?hal=masterPemesanan">Movies Booking</a></li>

                                    </ul>

                                </li>
                            <?php } ?>
                            <?php
                            if ($sesi['role'] == 'user') { //---------hanya untuk user----------
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?hal=pemesanan">Buy Ticket</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?hal=tiket&iduser=<?= $sesi['id'] ?>">My Ticket</a>
                                </li>
                            <?php } ?>

                        </ul>
                        <ul class="navbar-nav ml-auto mt-10">
                            <?php
                            if (!isset($sesi)) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white add-button" href="">Register</a>
                                </li>
                            <?php } else {
                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#!" data-toggle="dropdown"><?= $sesi['nama'] ?> <i class="fa fa-angle-down"></i></a>
                                    <!-- Dropdown list -->
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index.php?hal=member_profile">Profile</a></li>
                                        <?php
                                        if ($sesi['role'] == 'admin') { //---------hanya untuk admin----------
                                        ?>
                                            <li><a class="dropdown-item" href="index.php?hal=user">Kelola User</a></li>
                                        <?php } ?>

                                        <li><a class="dropdown-item" href="logout.php">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>