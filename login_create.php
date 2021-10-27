<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php createRows(); ?>

<?php include "includes/header.php" ?>

<div class="container-md">
    <div class="col-sm-6">
        <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="POST">
            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="Create">
        </form>
    </div>
</div>

<?php include "includes/footer.php" ?>