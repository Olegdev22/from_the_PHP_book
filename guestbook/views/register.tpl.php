<?php require_once __DIR__ . "/incs/header.tpl.php"; ?>

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">

                <?php if (isset($_SESSION["errors"])): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php
                        echo $_SESSION["errors"];
                        unset($_SESSION["errors"]);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <form class="mb-2" method="post">

                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" id="name" placeholder="Name" name="name" value="<?= old
                        ('name') ?>">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="email" id="email" placeholder="name@example.com" name="email"
                               value="<?= old
                               ('email') ?>">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="password" id="password" placeholder="Password" name="password">
                        <label for="password">Password</label>
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Register</button>

                </form>

            </div>

        </div>

    </div>

<?php require_once __DIR__ . "/incs/footer.tpl.php"; ?>