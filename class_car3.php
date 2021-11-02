<?php

use Car as GlobalCar;

class Car {

    var $wheels = 4; //varibles
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels(){ //method
        
        $this->wheels = 10; // $Car->wheels = 10;
    }

    function CreateDoors(){ //method
        
        $this->doors = 6; // $Car->doors = 6;
    }

}

$bmw = new Car(); // create an instance and assign it to a varible
// $bmw->wheels = 8; //change the value of wheels
$truck = new Car();

//$bmw->MoveWheels(); // Call the method
echo $bmw->wheels . "<br>";
echo $truck->wheels = 10 . "<br>"; //we assign the instance with a value of 10 for $truck
echo $bmw->wheels . "<br>"; //the instance still have a value of 4

echo $truck->doors . "<br>"; // = 4
$truck->CreateDoors();
echo $truck->doors; // = 6 as we change the value

?>



<?php include "includes/header.php" ?>



<?php include "includes/footer.php" ?>