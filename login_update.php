<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php UpdateTable(); ?>

<?php include "includes/header.php" ?>

<div class="container">
    <!-- <div class="row"> -->
    <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
        <form action="login_update.php" method="POST">
            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <br>
            <div class="form-group">

                <select name="id" id="">
                    <?php
                    showAllData()
                    ?>
                </select>

            </div>
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="Update">

        </form>
    </div>
    <!-- </div> -->
</div>

<?php include "includes/footer.php" ?>