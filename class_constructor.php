<?php

use Car as GlobalCar;

class Car
{

    var $wheels = 4; //varibles
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function __construct(){

       echo $this->wheels = 10; // $Car->wheels = 10;
    }

}

$bmw = new Car(); // create an instance and assign it to a varible
$truck = new Car();

?>



<?php include "includes/header.php" ?>



<?php include "includes/footer.php" ?>
