<?php

$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7); // time in seconds eg (seconds*minutes*hours*7)=1 week

setcookie($name,$value,$expiration);


?>



<?php include "includes/header.php" ?>


<?php include "includes/footer.php" ?>