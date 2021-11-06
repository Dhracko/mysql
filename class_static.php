<?php

use Car as GlobalCar;

class Car
{

    static $wheels = 4; //varibles
    var $hood = 1;


    function MoveWheels()
    { //method

        // $this->wheels = 10; // $Car->wheels = 10;
        Car::$wheels = 10;
    }

    
}

// $bmw = new Car(); // no longer need an instance being declare

//$bmw->wheels;
Car::MoveWheels();

echo Car::$wheels;

?>



<?php include "includes/header.php" ?>



<?php include "includes/footer.php" ?>