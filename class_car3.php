<?php

use Car as GlobalCar;

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

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