<?php

use Car as GlobalCar;

class Car {
    function MoveWheels(){
        echo "Wheels move";
    }

}

$bmw = new Car();
$merces_benz = new Car();

$bmw->MoveWheels(); // call the funtion
$merces_benz->MoveWheels();

?>



<?php include "includes/header.php" ?>



<?php include "includes/footer.php" ?>