<?php

$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7); // time in seconds eg (seconds*minutes*hours*week)=1 week

setcookie($name,$value,$expiration);


?>



<?php include "includes/header.php" ?>
<?php

if(isset($_COOKIE["SomeName"])) {  //Check if the Cookie exists

    $someOne = $_COOKIE["SomeName"];
    echo $someOne;
} else {
    $someOne = "";
}

?>


<?php include "includes/footer.php" ?>