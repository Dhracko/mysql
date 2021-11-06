<?php

use Car as GlobalCar;

class Car
{

    public $wheels = 4; //varibles = var
    protected $hood = 1; // only available to this class or subclasses
    private $engine = 1; // only available to this class
    var $doors = 4;

    function showProperty() //subclass
    { //method

      echo $this->hood; 
    }
}

$bmw = new Car(); // create an instance and assign it to a varible

echo $bmw->wheels; // = 4

// echo $bmw->hood; // produce and error as it's outside the class Car
echo $bmw->showProperty();

?>



<?php include "includes/header.php" ?>



<?php include "includes/footer.php" ?>