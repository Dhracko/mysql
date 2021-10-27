<?php include "db.php"; ?>
<?php include "functions.php"; ?>


<?php include "includes/header.php" ?>
<div class="container">
    <!-- <div class="row"> -->
    <div class="col-sm-6">
        <pre class="border"><!--  html inside php -->
            <?php readRows() ?>
        </pre>
    </div>
    <!-- </div> -->
</div>
<?php include "includes/footer.php" ?>