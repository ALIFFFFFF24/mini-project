<?php
include_once("header.php");
?>

<div class="container py-5 border-top-1">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 align-item-center">
            <div class="border border">
                <h3 class="bg-gray p-4">Register Now</h3>
                <form action="userController.php" method="POST">
                    <fieldset class="p-4">
                        <input class="form-control mb-3" id="nama" type="text" name="nama" placeholder="Name*" required>
                        <input class="form-control mb-3" id="nama" type="text" name="username" placeholder="Username*" required>
                        <input class="form-control mb-3" id="email" type="email" name="email" placeholder="Email*" required>
                        <input class="form-control mb-3" id="no_hp" type="text" name="no_hp" placeholder="Phone Number*" required>
                        <input class="form-control mb-3" id="password" type="password" name="password" placeholder="Password*" required>

                        <button type="submit" name="proses" value="simpan" class=" btn btn-primary font-weight-bold mt-3">Register Now</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</section>