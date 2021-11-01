<?php

class Car {
    function MoveWheels(){
        echo "Wheels move";
    }

};

if(method_exists("Car", "MoveWheels")) {
    echo "Method exists nice";

} else {

    echo "no";
}


?>



<?php include "includes/header.php" ?>



<?php include "includes/footer.php" ?>