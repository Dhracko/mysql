<?php include "includes/header.php" ?>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'practice');
if (!$connection) {
    die("Database errors reading");
} else {
    echo "we are good to go";
}

$query = "SELECT * FROM practice ";
$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query FAILED' . mysqli_error($connection));
}

while ($row = mysqli_fetch_assoc($result)) {
?>
    <prev>
        <?php print_r($row); ?>
    </prep>
    <?php
}


    ?>

    <?php include "includes/footer.php" ?>