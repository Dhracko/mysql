<?php

use Car as GlobalCar;

class Car
{

    var $wheels = 4; //varibles
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels()
    { //method

        $this->wheels = 10; // $Car->wheels = 10;
    }

    function CreateDoors()
    { //method

        $this->doors = 6; // $Car->doors = 6;
    }
}

$bmw = new Car(); // create an instance and assign it to a varible

class Plane extends Car{

    var $wheels = 20;
}


$jet = new Plane();
// $jet->MoveWheels(); Echo 10
echo $jet->wheels; // echo 20

// if(class_exists("Plane")){
//     echo "It does";
// }
?>



<?php include "includes/header.php" ?>



<?php include "includes/footer.php" ?>