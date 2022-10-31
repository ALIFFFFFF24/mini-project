<?php
include_once("header.php");
?>
<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Login Now</h3>
                    <form action="loginController.php" method="POST">
                        <fieldset class="p-4">
                            <input class="form-control mb-3" name="username" type="text" placeholder="username" required>
                            <input class="form-control mb-3" name="password" type="password" placeholder="Password" required>
                            <button type="submit" class="btn btn-primary font-weight-bold">Log in</button>
                            <a class="btn btn-outline-success" href="userRegister.php">Register Now</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>